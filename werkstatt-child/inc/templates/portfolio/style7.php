<?php
// Edited Werkstatt theme file to add custom text to portfolio slider links
// 3 modifications

$thb_button_hide = get_query_var( 'thb_button_hide' ) ? get_query_var( 'thb_button_hide' ) : false;
// Retrieve link text - modification 1
$thb_link_text = get_query_var( 'thb_link_text' ) ? get_query_var( 'thb_link_text' ) : 'View Case Study';

$thb_id         = get_the_ID();
$portfolio_data = thb_get_portfolio_data( $thb_id );

$class[] = $portfolio_data['main_color_title'];
$class[] = $portfolio_data['cat_class'];
$class[] = 'style7';
$class[] = 'type-portfolio';
$class[] = 'small-12 columns';


$btn_class[] = 'btn-text style6';

$btn_class = array_merge( $btn_class, $portfolio_data['link_class'] );

$key = array_search( 'portfolio-link', $btn_class, true );
if ( false !== $key ) {
	unset( $btn_class[ $key ] );
}

?>
<div <?php post_class( $class ); ?> id="portfolio-<?php the_ID(); ?>" data-title="<?php the_title_attribute(); ?>">
	<div class="portfolio-holder">
		<div class="thb-placeholder">
			<?php the_post_thumbnail( 'werkstatt-slider' ); ?>
		</div>
		<div class="portfolio-link transparent">
			<h1>
			<?php
			if ( 'subtitles' === $thb_subtitles ) {
				$portfolio_subtitle = get_post_meta( $thb_id, 'portfolio_subtitle', true );
				echo wp_kses_post( $portfolio_subtitle );
			} else {
				the_title();
			}
			?>
			</h1>
			<?php if ( '1' !== $thb_button_hide ) { ?>
			<a href="<?php echo esc_url( $portfolio_data['permalink'] ); ?>" class="<?php echo esc_attr( implode( ' ', $btn_class ) ); ?>" title="<?php // Change link text to be dynamic - modification 2 
				esc_html_e( $thb_link_text, 'werkstatt' ); ?>">
				<strong class="regular-arrow"><span></span></strong>
				<span><?php // Change link text to be dynamic - modification 3 
												   esc_html_e( $thb_link_text, 'werkstatt' ); ?></span><span class="test-span-portfolio"></span>
			</a>
			<?php } ?>
		</div>
	</div>
</div>
