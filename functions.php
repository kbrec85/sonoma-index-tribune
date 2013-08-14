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
	add_image_size( 'featured', '698', '408', true );
	set_post_thumbnail_size( 200, 115, crop );
 	add_theme_support( 'automatic-feed-links' );
 }
 add_action( 'after_setup_theme', '_sit__setup' );
 function _sit__widgets_init() {

	register_sidebar( array(
		'name' => 'Sidebar Top',
		'id' => 'sidebar-top',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Local Events Widget',
		'id' => 'local-events',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', '_sit__widgets_init' );
 /**
  * Enqueue scripts and styles for front-end.
  *
  * @since 0.1.0
  */
 function _sit__scripts_styles() {
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( '_sit_', get_template_directory_uri() . "/assets/js/sonoma_index_tribune{$postfix}.js", array(), _SIT__VERSION, true );
	wp_enqueue_script('jquery');
		
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

//1. Add a new form element...
add_action('register_form','_sit__register_form');
function _sit__register_form (){
	$byline = ( isset( $_POST['byline'] ) ) ? $_POST['byline']: '';
	?>
	<p>
		<label for="byline"><?php _e('Byline','sit') ?><br />
			<input type="text" name="byline" id="byline" class="input" value="<?php echo esc_attr(stripslashes($byline)); ?>" size="25" /></label>
	</p>
	<?php
}

//2. Add validation. In this case, we make sure byline is required.
add_filter('registration_errors', '_sit__registration_errors', 10, 3);
function _sit__registration_errors ($errors, $sanitized_user_login, $user_email) {

	if ( empty( $_POST['byline'] ) )
		$errors->add( 'byline_error', __('<strong>ERROR</strong>: You must include a byline.','sit') );

	return $errors;
}

//3. Finally, save our extra registration user meta.
add_action('user_register', '_sit__user_register');
function _sit__user_register ($user_id) {
	if ( isset( $_POST['byline'] ) )
		update_user_meta($user_id, 'byline', $_POST['byline']);
}