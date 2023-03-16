<?php
// Overrides a shortcode to add custom text to portfolio slider links
// 2 modifications

function custom_thb_portfolio_slider( $atts, $content = null ) {
	// Add $link_text init - modification 1
	$thb_subtitles = $thb_header_colors = $slider_style = $button_hide = $autoplay = $autoplay_speed = $thb_link_text = '';
	$slider_style  = 'slider_style1';
	$atts          = vc_map_get_attributes( 'thb_portfolio_slider', $atts );
	extract( $atts );
	$portfolio_source = $portfolio_source ? $portfolio_source : 'by_id';

	if ( 'by_id' === $portfolio_source ) {
		$portfolio_id_array = explode( ',', $portfolio_ids );

		$args  = array(
			'posts_per_page' => -1,
			'post_type'      => 'portfolio',
			'post__in'       => $portfolio_id_array,
			'orderby'        => 'post__in',
		);
		$posts = new WP_Query( $args );
	} else {
		$posts = vc_build_loop_query( $source );
		$posts = $posts[1];
	}
	$rand = wp_rand( 0, 1000 );
	$i    = 0;

	$arrow_style = 'slider_style2' === $slider_style ? 'arrow-style2' : '';
	$classes[]   = 'swiper-container full-page thb-portfolio carousel slider';
	$classes[]   = 'slider_style3' === $slider_style ? 'thb-circular-progress' : '';
	$classes[]   = $slider_style;
	$classes[]   = $thb_header_colors;
	$classes[]   = $arrow_style;
	$classes[]   = $extra_class;

	ob_start();

	$portfolios = array();
	if ( $posts->have_posts() ) { ?>
		<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>" id="portfolio-section-<?php echo esc_attr( $rand ); ?>" data-autoplay="<?php echo esc_attr( $autoplay ); ?>" data-autoplay-speed="<?php echo esc_attr( $autoplay_speed ); ?>">
			<div class="swiper-wrapper">
				<?php
				while ( $posts->have_posts() ) :
					$posts->the_post(); // start of the loop
					set_query_var( 'thb_button_hide', $button_hide );
					set_query_var( 'thb_button_style', $button_style );
					set_query_var( 'thb_subtitles', $thb_subtitles );
					// Allows query of custom text from the template file - modification 2
					set_query_var( 'thb_link_text', $thb_link_text );
					if ( 'slider_style2' === $slider_style ) {
						get_template_part( 'inc/templates/portfolio/style5' );
					} elseif ( 'slider_style1' === $slider_style ) {
						get_template_part( 'inc/templates/portfolio/style4' );
					} elseif ( 'slider_style3' === $slider_style ) {
						get_template_part( 'inc/templates/portfolio/style7' );
					}
					$portfolios[] = array(
						'title' => get_the_title(),
					);
					$i++;
				endwhile; // end of the loop.
				?>
				</div>
				<?php
				if ( 'slider_style1' === $slider_style ) {
					do_action( 'thb_swiper_pagination' );
				} else {
					do_action( 'thb_swiper_nav', $arrow_style );
				}
				do_action( 'thb_portfolio_preloader' );
				?>
		</div>
		<?php
	} else {
		get_template_part( 'inc/templates/not-found' );
	}

	$out = ob_get_clean();

	wp_reset_query();
	wp_reset_postdata();

	return $out;
}

add_shortcode( 'thb_portfolio_slider', 'custom_thb_portfolio_slider' );
