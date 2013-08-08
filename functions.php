<?php
/**
 * Sonoma Index Tribune functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Sonoma Index Tribune
 * @since 0.1.0
 */
 
 // Useful global constants
define( '_SIT__VERSION', '0.1.0' );
 
 /**
  * Set up theme defaults and register supported WordPress features.
  *
  * @uses load_theme_textdomain() For translation/localization support.
  *
  * @since 0.1.0
  */

 function _sit__setup() {
	/**
	 * Makes Sonoma Index Tribune available for translation.
	 *
	 * Translations can be added to the /lang directory.
	 * If you're building a theme based on Sonoma Index Tribune, use a find and replace
	 * to change '_sit_' to the name of your theme in all template files.
	 */
	load_theme_textdomain( '_sit_', get_template_directory() . '/languages' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 115, crop );
 	add_theme_support( 'automatic-feed-links' );
 }
 add_action( 'after_setup_theme', '_sit__setup' );
 
 /**
  * Enqueue scripts and styles for front-end.
  *
  * @since 0.1.0
  */
 function _sit__scripts_styles() {
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( '_sit_', get_template_directory_uri() . "/assets/js/sonoma_index_tribune{$postfix}.js", array(), _SIT__VERSION, true );
		
	wp_enqueue_style( '_sit_', get_template_directory_uri() . "/assets/css/sonoma_index_tribune{$postfix}.css", array(), _SIT__VERSION );
 }
 add_action( 'wp_enqueue_scripts', '_sit__scripts_styles' );

function _sit__register_menus() {
	register_nav_menu('top-menu',__( 'top-menu' ));
	register_nav_menu('main-menu',__( 'main menu' ));
	register_nav_menu('find-it-fast',__( 'find-it-fast' ));
	register_nav_menu('contact-help',__( 'contact-help' ));
	register_nav_menu('subscribers',__( 'subscribers' ));
	register_nav_menu('footer-menu',__( 'footer-menu' ));
}
add_action( 'init', '_sit__register_menus' );
function _sit__replace_excerpt($content) {
       return str_replace('[...]',
               '<div class="more-link"><a href="'. get_permalink() .'">Continue Reading</a></div>',
               $content
       );
}
add_filter('the_excerpt', '_sit__replace_excerpt');