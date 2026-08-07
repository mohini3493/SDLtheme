<?php
/**
 * Hello Elementor Child - functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue parent theme styles first, then the child stylesheet on top.
 */
function hello_elementor_child_enqueue_styles() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'hello-elementor', 'hello-elementor-theme-style' ],
		HELLO_CHILD_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles', 20 );

/**
 * Load the handmade homepage CSS/JS only on the front page, so it never
 * leaks into Elementor-built pages.
 */
function hello_elementor_child_front_page_assets() {
	if ( ! is_front_page() ) {
		return;
	}

	wp_enqueue_style(
		'hello-elementor-child-homepage',
		get_stylesheet_directory_uri() . '/assets/css/homepage.css',
		[ 'hello-elementor-child-style' ],
		HELLO_CHILD_VERSION
	);

	wp_enqueue_script(
		'hello-elementor-child-homepage',
		get_stylesheet_directory_uri() . '/assets/js/homepage.js',
		[],
		HELLO_CHILD_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_front_page_assets' );
