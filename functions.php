<?php

/**
Adding Custom CSS Files
**/
function my_custom_styles() {

	// My Custom Styles
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main_style.css' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom_styles.css' );
	wp_enqueue_style( 'bootstrap-element-style', get_template_directory_uri() . '/css/bootstrap_elements_style.css' );
	wp_enqueue_style( 'custom-animations', get_template_directory_uri() . '/css/custom_animations.css' );

	// My Custom Scripts
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.2.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.1.0', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts','my_custom_styles' );

/**
Custom Header with full width background image
Only if website needs to show banner image
 **/
function atom_custom_header_setup() {
	$args = array(
	    'flex-width'    => true,
	    'width'         => 1600,
	    'flex-height'   => true,
	    'height'        => 800,
	    'default-image' => get_template_directory_uri() . '/assets/banner.jpg'
	);
	add_theme_support( 'custom-header', $args );
}

add_action( 'after_setup_theme', 'atom_custom_header_setup' );

/**
Custom menus for the page
**/
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu' => __( 'Extra Menu' )
		)
	);
}

add_action( 'init', 'register_my_menus' );

/**
Custom Logo Should be of particular size
Sizing function not yet developed.
**/
function my_logo_setup() {
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'my_logo_setup');

?>