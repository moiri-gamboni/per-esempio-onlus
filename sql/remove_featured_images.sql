-- remove featured images that are in the body of the post content
-- 524 updates
UPDATE `template_posts`
INNER JOIN (
    SELECT enriched_text_posts.`ID`,
        -- removes the featured image html tag, keeping the rest of the post
        REGEXP_REPLACE(
            enriched_text_posts.`post_content`, 
            -- regex pattern matching an img tag containing the featured image path ignoring size qualifiers
            CONCAT(
                -- prior content and start img tag
                '(.*)(<img.+?',
                -- base path
                REGEXP_REPLACE(image_posts.`guid`,'^(.+?)(-\d+x\d+)?\.([^\.]+)$','\\1'),
                -- size qualifier and dot
                '(-\\d+x\\d+)?\\.',
                -- extension
                REGEXP_REPLACE(image_posts.`guid`,'^(.+?)(-\d+x\d+)?\.([^\.]+)$','\\3'),
                -- end img tag and later content
                '.+?\\/>)(.*)'
            ),
            '\\1\\4') 
        AS `post_content`
    FROM `template_posts` AS image_posts INNER JOIN (
        -- we need an intermediary table as image paths are stored as posts, not postmeta
        -- selects all posts that have a corresponsing thumbnail meta entry 
        -- include meta_value allowing later filepath (guid) retrieval
        SELECT `template_posts`.`ID`, `template_posts`.`post_content`, `template_postmeta`.`meta_value`
        FROM `template_postmeta` INNER JOIN `template_posts` 
        ON `template_posts`.`ID`=`template_postmeta`.`post_id` 
        -- important to include as it removed meta_value entries that are not integers
        AND `template_postmeta`.`meta_key` = "_thumbnail_id"
    ) AS enriched_text_posts
    -- filter posts for which the meta entry corresponds to an image 
    ON enriched_text_posts.`meta_value`= image_posts.`ID`
    -- filter posts that have the featured image in the body of the content,
    AND enriched_text_posts.`post_content` REGEXP 
        -- regex pattern matching image paths ignoring size qualifiers (e.g. 'image-300x500.jpg' and 'image.jpg' both match)
        CONCAT(
            -- base path
            REGEXP_REPLACE(image_posts.`guid`,'^(.+?)(-\d+x\d+)?\.([^\.]+)$','\\1'),
            -- size qualifier and dot
            '(-\\d+x\\d+)?\\.',
            -- extension
            REGEXP_REPLACE(image_posts.`guid`,'^(.+?)(-\d+x\d+)?\.([^\.]+)$','\\3')
        )
)  AS new_posts
ON `template_posts`.`ID` = new_posts.`ID`
SET `template_posts`.`post_content` = new_posts.`post_content`
;