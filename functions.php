<?php
/**
 * Unelma functions and definitions
 *
 * @package WordPress
 * @subpackage Unelma
 * @since Unelma 1.0
 */
 
function unelma_scripts() {
	// load main style
	wp_enqueue_style( 'unelma-style', get_stylesheet_uri());	 
}
add_action( 'wp_enqueue_scripts', 'unelma_scripts' );