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
		'primary'   => __( 'Primary Menu', 'myackleyV9' ),
        'footer'    => __( 'Footer Menu', 'myackleyV9' )
	) );
}
endif; // myackleyV9_setup

add_action( 'after_setup_theme', 'myackleyV9_setup' );

if ( ! function_exists( 'myackleyV9_styles' ) ) :

    function myackleyV9_styles() {

        // Register theme stylesheet.
        wp_register_style(
            'myackleyV9-style',
            get_template_directory_uri() . '/style.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style( 'myackleyV9-style' );

    }

endif;

add_action( 'wp_enqueue_scripts', 'myackleyV9_styles' );

function myackleyV9_register_pattern_categories() {

    if ( function_exists( 'register_block_pattern_category' ) ) {

        register_block_pattern_category(

            'page-content',

            array(

                'label' => __( 'Page Content', 'myackleyV9' ),

                'description' => __( 'Patterns with starter content for page content', 'myackleyV9' ),

            )

        );

    }

}

add_action( 'init', 'myackleyV9_register_pattern_categories' );