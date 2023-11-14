<?php
function enqueue_style() {
	wp_enqueue_style( 'werkstatt-child',
		get_stylesheet_uri(),
		array( 'werkstatt' )
	);
	wp_enqueue_style( 'home', 
		get_stylesheet_directory_uri() . '/css/home.css'
	);
	wp_enqueue_style( 'contatti', 
		get_stylesheet_directory_uri() . '/css/contatti.css'
	);
	wp_enqueue_style( 'sostenitori', 
		get_stylesheet_directory_uri() . '/css/sostenitori.css'
	);
	wp_enqueue_style( 'sostienici', 
		get_stylesheet_directory_uri() . '/css/sostienici.css'
	);
	wp_enqueue_style( 'header', 
		get_stylesheet_directory_uri() . '/css/header.css'
	);
	wp_enqueue_style( 'inverse_gradient', 
		get_stylesheet_directory_uri() . '/css/inverse_gradient.css'
	);
}
function enqueue_script() {
	wp_enqueue_script( 'werkstatt-child-app', 
		get_stylesheet_directory_uri().'/assets/js/plugins/app.js', 
		array('jquery')
	);
}

function enqueue_templates() {
	require_once( get_stylesheet_directory() . '/plugin/inc/vc_templates/thb_portfolio_masonry.php');
	require_once( get_stylesheet_directory() . '/plugin/inc/vc_templates/thb_portfolio_slider.php');
	require_once( get_stylesheet_directory() . '/plugin/inc/vc_templates/thb_portfolio_carousel.php');
}

add_action( 'wp_enqueue_scripts', 'enqueue_style' );
add_action( 'after_setup_theme', 'enqueue_script' );
add_action( 'after_setup_theme', 'enqueue_templates' );
