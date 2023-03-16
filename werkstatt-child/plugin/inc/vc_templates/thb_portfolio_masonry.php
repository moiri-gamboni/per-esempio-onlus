<?php
// Overrides a shortcode to add custom text to portfolio masonry links
// 2 modifications

function custom_thb_portfolio_masonry( $atts, $content = null ) {
	// Add $link_text init - modification 1
	$thb_link_text       = '';
	$filter_style        = 'style1';
	$animation_style     = 'thb-animate-from-bottom';
	$always_show_content = '';
	$atts                = vc_map_get_attributes( 'thb_portfolio_masonry', $atts );
	extract( $atts );

	$filter_categories_array = array();

	$args = array(
		'taxonomy'   => 'portfolio-category',
		'orderby'    => $category_order,
		'order'      => 'ASC',
		'hide_empty' => '0',
		'include'    => $filter_categories,
		'fields'     => 'ids',
	);
	if ( 'count' === $category_order ) {
		$args['order'] = 'DESC';
	}
	$portfolio_categories = new WP_Term_Query( $args );

	if ( $portfolio_categories->terms ) {
		foreach ( $portfolio_categories->terms as $term_id ) {
			$filter_categories_array[] = $term_id;
		}
	}

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
		if ( $offset ) {
			$source .= '|offset:' . $offset;
		}
		$source_data   = VcLoopSettings::parseData( $source );
		$query_builder = new ThbLoopQueryBuilder( $source_data );
		$posts         = $query_builder->build();
		$posts         = $posts[1];

		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) :
				$posts->the_post();
				$portfolio_id_array[] = get_the_ID();
			endwhile;
		}
	}
	$rand = wp_rand( 0, 1000 );
	$i    = 0;
	ob_start();
	$is_custom  = 'style1' === $style && 'custom' === $masonry_layout;
	$layoutmode = 'masonry-style7' === $masonry_layout || 'custom' === $masonry_layout ? 'packery' : false;
	$classes[]  = 'row expanded thb-portfolio masonry';
	$classes[]  = $masonry_layout;
	$classes[]  = 'thb-filter-' . $filter_style;
	$classes[]  = $style;
	$classes[]  = 'margins' === $thb_margins ? 'thb-margins' : false;
	$classes[]  = $is_custom ? 'variable-height' : false;
	$classes[]  = $thb_border_radius;
	$classes[]  = 'style1' === $style && 'true' === $always_show_content ? 'thb-always-show-content' : false;

	$btn_classes[] = 'masonry_btn btn';
	$btn_classes[] = $loadmore_style;
	if ( $posts->have_posts() ) { ?>
		<?php
		if ( 'true' === $add_filters ) {
			do_action( 'thb-render-filter', $filter_categories_array, $rand, $filter_style, $portfolio_id_array );
		}
		?>
		<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>" id="portfolio-section-<?php echo esc_attr( $rand ); ?>" data-thb-animation="<?php echo esc_attr( $animation_style ); ?>" data-loadmore="#loadmore-<?php echo esc_attr( $rand ); ?>" data-filter="thb-filter-<?php echo esc_attr( $rand ); ?>" data-layoutmode="<?php echo esc_attr( $layoutmode ); ?>" data-thb-animation-speed="<?php echo esc_attr( $animation_speed ); ?>" data-grid-type="<?php echo esc_attr( $grid_type ); ?>" data-security="<?php echo esc_attr( wp_create_nonce( 'thb_ajax' ) ); ?>">
			<?php
			while ( $posts->have_posts() ) :
				$posts->the_post(); // start of the loop
				set_query_var( 'thb_hover_style', $hover_style );
				// Allows query of custom text from the template file - modification 2
				set_query_var( 'thb_link_text', $thb_link_text );
				if ( 'style1' === $style ) {
					$column_size = thb_get_portfolio_size( $masonry_layout, $i );
					set_query_var( 'thb_size', $column_size );

					if ( $is_custom ) {
						set_query_var( 'thb_masonry', 'custom' );
						set_query_var( 'thb_grid_type', $grid_type );
					}
				} else {
					set_query_var( 'thb_size', $columns );
					set_query_var( 'thb_masonry', true );
				}
				set_query_var( 'thb_title_position', $title_position );
				set_query_var( 'thb_animation', $animation_style );
				get_template_part( 'inc/templates/portfolio/' . $style );
				$i++;
endwhile; // end of the loop.
			?>
			<?php do_action( 'thb_portfolio_preloader' ); ?>
		</div>
		<?php
		if ( $loadmore ) {
			wp_localize_script(
				'thb-app',
				'portfolioajax',
				array(
					'i'               => $i,
					'aspect'          => 'style2' === $style,
					'columns'         => $columns,
					'style'           => $style,
					'masonry_layout'  => $masonry_layout,
					'count'           => $source_data['size'],
					'loop'            => $source,
					'hover_style'     => $hover_style,
					'title_position'  => $title_position,
					'animation_style' => $animation_style,
				)
			);
			?>
		<div class="text-center">
			<a class="<?php echo esc_attr( implode( ' ', $btn_classes ) ); ?>" href="#" id="loadmore-<?php echo esc_attr( $rand ); ?>" title="<?php esc_attr_e( 'Load More', 'werkstatt' ); ?>"><span><?php esc_html_e( 'Load More', 'werkstatt' ); ?></span></a>
		</div>
		<?php } ?>
		<?php
	} else {
		get_template_part( 'inc/templates/not-found' );
	}

	$out = ob_get_clean();

	wp_reset_query();
	wp_reset_postdata();
	set_query_var( 'thb_animation', false );
	return $out;
}

add_shortcode( 'thb_portfolio_masonry', 'custom_thb_portfolio_masonry' );
