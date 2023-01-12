<?php
// Edited Werkstatt theme file to add custom text to portfolio masonry links
// 3 modifications
$thb_masonry        = get_query_var( 'thb_masonry' ) ? get_query_var( 'thb_masonry' ) : false;
$thb_grid_type      = get_query_var( 'thb_grid_type' ) ? get_query_var( 'thb_grid_type' ) : 4;
$thb_size           = get_query_var( 'thb_size' ) ? get_query_var( 'thb_size' ) : false;
$thb_animation      = get_query_var( 'thb_animation' ) ? get_query_var( 'thb_animation' ) : false;
$thb_title_position = get_query_var( 'thb_title_position' ) ? get_query_var( 'thb_title_position' ) : false;
$thb_hover_style    = get_query_var( 'thb_hover_style' ) ? get_query_var( 'thb_hover_style' ) : false;
// Retrieve link text - modification 1
$thb_link_text      = get_query_var( 'thb_link_text' ) ? get_query_var( 'thb_link_text' ) : 'View Case Study';
$thb_id         = get_the_ID();
$portfolio_data = thb_get_portfolio_data( $thb_id );

$aspect_ratio = $portfolio_data['image_id'] ? ( ( $portfolio_data['image_url'][2] / $portfolio_data['image_url'][1] ) * 100 ) . '%' : '100%';
$aspect_ratio = $thb_masonry ? $aspect_ratio : '80%';

$class[] = 'columns';
$class[] = 'type-portfolio';
$class[] = 'custom' !== $thb_masonry ? $thb_size : false;
$class[] = $thb_title_position;
$class[] = $thb_animation;
$class[] = $portfolio_data['main_color_title'];
$class[] = $portfolio_data['cat_class'];
$class[] = $thb_hover_style;
$class[] = 'style1';


$image_size = 'werkstatt-masonry-3x';
// Image sizes
if ( 'custom' === $thb_masonry ) {
	$masonry_size     = get_post_meta( $thb_id, 'masonry_size', true ) ? get_post_meta( $thb_id, 'masonry_size', true ) : 'small';
	$thb_masonry_size = thb_get_masonry_size( $masonry_size, $thb_grid_type );
	$class[]          = $thb_masonry_size['class'];
	$image_size       = $thb_masonry_size['image_size'];
}
?>
<div <?php post_class( $class ); ?> id="portfolio-<?php the_ID(); ?>">
	<div class="portfolio-holder"<?php if ( $thb_masonry && 'custom' !== $thb_masonry ) { ?> style="<?php echo esc_attr( 'padding-bottom: ' . $aspect_ratio . ';' ); ?>"<?php } ?>>
		<?php if ( 'thb-image-hover' === $thb_hover_style ) { ?>
			<div class="thb-placeholder first"><?php the_post_thumbnail( $image_size ); ?></div>
			<div class="thb-placeholder second"><?php echo wp_get_attachment_image( $portfolio_data['hover_id'], $image_size ); ?></div>
			<a href="<?php echo esc_url( $portfolio_data['permalink'] ); ?>" class="<?php echo esc_attr( implode( ' ', $portfolio_data['link_class'] ) ); ?>">
				<h2><span><?php the_title(); ?></span></h2>
				<aside class="thb-categories"><span><?php echo esc_html( $portfolio_data['categories'] ); ?></span></aside>
			</a>
		<?php } else { ?>
			<div class="thb-placeholder first">
				<?php the_post_thumbnail( $image_size ); ?>
				<?php if ( 'thb-gradient-fill-hover' === $thb_hover_style ) { ?>
					<div class="thb-gradient-fill"></div>
				<?php } ?>
			</div>
			<a href="<?php echo esc_url( $portfolio_data['permalink'] ); ?>" class="<?php echo esc_attr( implode( ' ', $portfolio_data['link_class'] ) ); ?>">
				<h2><span><?php the_title(); ?></span></h2>
				<aside class="thb-categories"><span><?php echo esc_html( $portfolio_data['categories'] ); ?></span></aside>
				<?php if ( 'thb-corner-arrow' === $thb_hover_style ) { ?>
					<?php get_template_part( 'assets/img/svg/hover-arrow.svg' ); ?>
				<?php } ?>
				<?php if ( 'thb-image-blur' === $thb_hover_style ) { ?>
					<div class="btn-text style6" title="<?php // Change link text to be dynamic - modification 2 
				esc_html_e( $thb_link_text, 'werkstatt' ); ?>">
						<strong class="regular-arrow"><span></span></strong>
						<span><?php // Change link text to be dynamic - modification 3 
				esc_html_e( $thb_link_text, 'werkstatt' ); ?></span>
					</div>
				<?php } ?>
			</a>
		<?php } ?>
	</div>
</div>
