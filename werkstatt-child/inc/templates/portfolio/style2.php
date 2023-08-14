<?php
// Adds inverse gradient effect and excerpts to portfolio masonries
// 2 modifications

$thb_masonry     = get_query_var( 'thb_masonry' ) ? get_query_var( 'thb_masonry' ) : false;
$thb_size        = get_query_var( 'thb_size' ) ? get_query_var( 'thb_size' ) : false;
$thb_style       = get_query_var( 'thb_style' ) ? get_query_var( 'thb_style' ) : false;
$thb_animation   = get_query_var( 'thb_animation' ) ? get_query_var( 'thb_animation' ) : false;
$thb_hover_style = get_query_var( 'thb_hover_style' ) ? get_query_var( 'thb_hover_style' ) : false;

$thb_id         = get_the_ID();
$portfolio_data = thb_get_portfolio_data( $thb_id );

$aspect_ratio = $portfolio_data['image_id'] ? ( ( $portfolio_data['image_url'][2] / $portfolio_data['image_url'][1] ) * 100 ) . '%' : '100%';
$aspect_ratio = $thb_masonry ? $aspect_ratio : '80%';

$class[] = 'columns';
$class[] = 'type-portfolio';
$class[] = $thb_size;
$class[] = $thb_animation;
$class[] = $thb_style;
$class[] = $thb_hover_style;
$class[] = $portfolio_data['cat_class'];
$class[] = 'style2';

$class = array_merge( $class, $portfolio_data['link_class'] );
?>
<a href="<?php echo esc_url( $portfolio_data['permalink'] ); ?>" <?php post_class( $class ); ?> id="portfolio-<?php the_ID(); ?>">
	<div class="portfolio-holder">
		<div class="portfolio-inner <?php echo esc_attr( $thb_hover_style ); ?>" style="<?php echo esc_attr( 'padding-bottom: ' . $aspect_ratio . ';' ); ?>">
			<?php if ( 'thb-image-hover' === $thb_hover_style ) { ?>
				<div class="thb-placeholder first"><?php the_post_thumbnail( 'werkstatt-masonry-3x' ); ?></div>
				<div class="thb-placeholder second"><?php echo wp_get_attachment_image( $portfolio_data['hover_id'], 'werkstatt-masonry-3x' ); ?></div>
			<?php } else { ?>
				<div class="thb-placeholder">
					<?php the_post_thumbnail( 'werkstatt-masonry-3x' ); ?>
					<?php  // Add inverse gradient fill markup  - modification 1
					if ( 'thb-gradient-fill-hover' === $thb_hover_style or 'thb-inverse-gradient-fill-hover' === $thb_hover_style) { ?>
						<div class="thb-gradient-fill"></div>
					<?php } ?>
				</div>
			<?php } ?>
			<?php if ( 'thb-corner-arrow' === $thb_hover_style ) { ?>
				<?php get_template_part( 'assets/img/svg/hover-arrow.svg' ); ?>
			<?php } ?>
		</div>
		<h2><span><?php the_title(); ?></span></h2>
		<aside class="thb-categories"><span><?php // Replace category by excerpt - modification 2
		if ( has_excerpt() ) {the_excerpt(); }?></span></aside>
	</div>
</a>
