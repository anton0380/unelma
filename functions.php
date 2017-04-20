<?php
/**
 * Unelma functions and definitions
 *
 * @package WordPress
 * @subpackage Unelma
 * @since Unelma 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660; /* pixels */
}

if ( ! function_exists( 'unelma_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function unelma_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on unelma, use a find and replace
	 * to change 'unelma' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'unelma', get_template_directory() . '/languages' );

}
endif; // unelma_setup
add_action( 'after_setup_theme', 'unelma_setup' );

 
function unelma_scripts() {
	// load main style
	wp_enqueue_style( 'unelma-style', get_stylesheet_uri());	 
}
add_action( 'wp_enqueue_scripts', 'unelma_scripts' );