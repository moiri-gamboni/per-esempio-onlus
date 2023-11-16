<div class="blog-container page-padding header-lateral-padding-off">
<article itemscope itemtype="http://schema.org/Article" <?php post_class( 'post post-detail style1-detail' ); ?> role="article">
	<figure class="post-gallery parallax">
		<div class="parallax_bg"><?php the_post_thumbnail( 'full' ); ?></div>
		<header class="post-title entry-header">
			<div class="row align-center">
				<div class="small-12 medium-10 large-7 columns">
					<aside class="post-category">
						<?php the_category( ', ' ); ?>
					</aside>
					<?php the_title( '<h1 class="entry-title" itemprop="name headline">', '</h1>' ); ?>
					<aside class="post-meta">
						<?php the_author_posts_link(); ?> <?php esc_html_e( 'on', 'werkstatt' ); ?> <?php echo get_the_date(); ?>
					</aside>
				</div>
			</div>
		</header>
	</figure>
	<div class="row align-center">
		<div class="small-12 medium-10 large-7 columns">
			<div class="post-content">
				<?php the_content(); ?>
					<?php wp_link_pages(); ?>
			</div>
			<?php get_template_part( 'inc/templates/blog/post-end' ); ?>
		</div>
	</div>
	<?php do_action( 'thb_PostMeta' ); ?>
</article>
</div>
