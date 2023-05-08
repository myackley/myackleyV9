<?php 
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myackleyV9
 * @since myackleyV9 1.0
 */

if ( ! function_exists( 'myackleyV9_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress  
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 *  @since myackleyV9 1.0
 */
function myackleyV9_setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

    // Adding support for different post types
	add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    // Add support for custom menu
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'myackleyV9' )
	) );
}
endif; // myackleyV9_setup
add_action( 'after_setup_theme', 'myackleyV9_setup' );