<?php

/**
Main Function contains all the theme support 
as well as the starter content for the website
**/
function atom_setup() {

/**
Custom Header Menu Logo Should be of fixed size for site identity
**/
add_theme_support('custom-logo', array(
		'width' => 70,
		'height' => 100,
		'flex-width' => true
	));

/**
Custom menus for the page
**/

register_nav_menus(
	array(
		'top' => __( 'Top Menu', 'atom' ),
		'bottom' => __( 'Bottom Menu', 'atom' )
	)
);

// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "top" location.
			'top' => array(
				'name' => __( 'Top Menu', 'atom' ),
				'items' => array(
					'link_home' // Note that the core "home" page is actually a link in case a static front page is not used.
				)
			),
			'bottom' => array(
				'name' => __( 'Bottom Menu', 'atom' ),
				'items' => array(
					'link_home'
				)
			)
		)
	);

	$starter_content = apply_filters( 'atom_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}

add_action( 'after_setup_theme', 'atom_setup' );

/**
Activvation of widget area
**/
function atm_custom_widgets_init() {
	register_sidebar( array(
		'name' => 'Footer Area Address',
		'id' => 'atm_footer_one',
		'before_widget' => '<div class="atm-bottom-nav-address">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	register_sidebar( array(
		'name' => 'Footer Area Copyright',
		'id' => 'atm_footer_two',
		'before_widget' => '<div class="atm-bottom-nav-copy">',
		'after_widget' => '</div>',
		'before_title' => '<span>',
		'after_title' => '</span>'
	) );
	register_sidebar( array(
		'name' => 'Footer Area Newsletter',
		'id' => 'atm_footer_three',
		'before_widget' => '<div class="atm-bottom-nav-news">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
}
add_action( 'widgets_init', 'atm_custom_widgets_init' );

/**
Adding Custom CSS Files
**/
function my_custom_styles() {

	// My Custom Styles
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.2' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.2' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main_style.css', array(), '1.3' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom_styles.css', array(), '1.19' );
	wp_enqueue_style( 'bootstrap-element-style', get_template_directory_uri() . '/css/bootstrap_elements_style.css', array(), '1.2' );
	wp_enqueue_style( 'custom-animations', get_template_directory_uri() . '/css/custom_animations.css', array(), '1.3' );

	// My Custom Scripts
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.4.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.4.0', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ), '1.1.17', true );
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
XML-RPC is a method that allows third party apps to communicate with your WordPress site remotely. 
This could cause security issues and can be exploited by hackers.
**/
add_filter( 'xmlrpc_enabled', '__return_false' );
?>