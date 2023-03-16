<?php
function enqueue_child() {
	wp_enqueue_style( 'werkstatt-child',
		get_stylesheet_uri(),
		array( 'werkstatt' ),
		wp_get_theme()->get( '1.0.0' )
	);
	wp_enqueue_script( 'werkstatt-child-app', 
		get_stylesheet_directory_uri().'/assets/js/plugins/app.js', 
		array('jquery')
	);
}

function enqueue_templates() {
	require_once( get_stylesheet_directory() . '/plugin/inc/vc_templates/thb_portfolio_masonry.php');
	require_once( get_stylesheet_directory() . '/plugin/inc/vc_templates/thb_portfolio_slider.php');
}

add_action( 'wp_enqueue_scripts', 'enqueue_child' );
add_action( 'after_setup_theme', 'enqueue_templates' );
