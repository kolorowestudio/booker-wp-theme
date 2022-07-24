<?php
/**
 * Twenty Twenty-Two Child functions
 *
 */


if ( ! function_exists( 'twentytwentytwochild_styles' ) ) :

	function twentytwentytwochild_styles() {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'child-style',
			get_template_directory_uri() . '/style.css',
			array('parenthandle'),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'child-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwochild_styles' );



/*
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$version_string = is_string( $theme_version ) ? $theme_version : false;

    wp_enqueue_style( 
    	'child-style', 
    	get_template_directory_uri() . '/style.css',
        array( 'parenthandle' ), 
		$version_string // this only works if you have Version in the style header
    );
}

/*
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$version_string = is_string( $theme_version ) ? $theme_version : false;

    wp_enqueue_style( 
    	'child-style', 
    	get_template_directory_uri() . '/theme.css',
        array( 'parenthandle' ), 
		$version_string // this only works if you have Version in the style header
    );
}*/

/*add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style-2',
			get_template_directory_uri() . '/theme.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style-2' );

	}

endif;*/


add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all' );
}

