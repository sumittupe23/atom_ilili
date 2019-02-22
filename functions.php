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
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom_styles.css', array(), '1.1.11' );
	wp_enqueue_style( 'bootstrap-element-style', get_template_directory_uri() . '/css/bootstrap_elements_style.css', array(), '1.3' );
	wp_enqueue_style( 'custom-animations', get_template_directory_uri() . '/css/custom_animations.css', array(), '1.3' );

	// My Custom Scripts
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.4.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.4.0', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ), '1.2.20', true );
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

// Dynamic Dropdown for contact form 7 plugin

function ajax_cf7_populate_values() {

    // read the CSV file in the $makes_models_years array

	$makes_models_years = array();
	$uploads_folder = wp_upload_dir()['basedir'];
	$file = fopen($uploads_folder.'\make_model_year.csv', 'r');

	$firstline = true;
	while (($line = fgetcsv($file)) !== FALSE) {
		if ($firstline) {
			$firstline = false;
			continue;
		}
		$makes_models_years[$line[0]][$line[1]][] = $line[2];

	}
	fclose($file);

        // setup the initial array that will be returned to the the client side script as a JSON object.

	$return_array = array(
            'makes' => array_keys($makes_models_years),
            'models' => array(),
            'years' => array(),
            'current_make' => false,
            'current_model' => false
        );

        // collect the posted values from the submitted form

	$make = key_exists('make', $_POST) ? $_POST['make'] : false;
	$model = key_exists('model', $_POST) ? $_POST['model'] : false;
	$year = key_exists('year', $_POST) ? $_POST['year'] : false;

        // populate the $return_array with the necessary values

	if ($make) {
		$return_array['current_make'] = $make;
		$return_array['models'] = array_keys($makes_models_years[$make]);
	    if ($model) {
		$return_array['current_model'] = $model;
		$return_array['years'] = $makes_models_years[$make][$model];
		if ($year) {
	            $return_array['current_year'] = $year;
	        }
            }
        }

        // encode the $return_array as a JSON object and echo it
        
        echo json_encode($return_array);
        wp_die();

}

// These action hooks are needed to tell WordPress that the cf7_populate_values() function needs to be called
// if a script is POSTing the action : 'cf7_populate_values'

add_action( 'wp_ajax_cf7_populate_values', 'ajax_cf7_populate_values' );
add_action( 'wp_ajax_nopriv_cf7_populate_values', 'ajax_cf7_populate_values' );

?>