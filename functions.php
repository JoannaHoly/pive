<?php
/**
 * Pive Functions
 *
 * @package	Pive
 * @since 	1.0
 * @version 1.0
 * @author 	Joanna Hoły
 *
 * CONTENT:
 *
 * Security
 * Theme directory
 *
 * Setup
 ** Theme support
 ** Images sizes
 ** Menus
 ** Widgets
 *
 * Enqueue styles and scripts
 ** Paths
 ** Styles
 *** Destyle
 *** Main style
 *** User style
 ** Scripts
 */

/* Security */
/* (don't allow direct access to this file) */
if (!defined ('ABSPATH')) exit;

/* Theme directory */
define ('PATH', trailingslashit (get_template_directory()));

/* Setup */
function pive_setup() {
	
	/** Theme support **/
	
	add_theme_support ('dark-editor-style');
	add_theme_support ('wp-block-styles');
	
	add_theme_support ('title-tag');
	add_theme_support ('post-thumbnails');
	
	add_theme_support ('post-formats', array (
			'aside',
			'gallery',
			'link',
			'image'
		)
	);
	
	add_theme_support ('custom-background', array (
		'default-image'						=> '',
    'default-preset'					=> 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
    'default-position-x'			=> 'left',    // 'left', 'center', 'right'
    'default-position-y'			=> 'top',     // 'top', 'center', 'bottom'
    'default-size'						=> 'auto',    // 'auto', 'contain', 'cover'
    'default-repeat'					=> 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
    'default-attachment'			=> 'scroll',  // 'scroll', 'fixed'
    'default-color'						=> '#ECECEC',
    'wp-head-callback'				=> '_custom_background_cb',
    'admin-head-callback'			=> '',
    'admin-preview-callback'	=> '',
		)
	);
	
	add_theme_support ('html5', array (
			'gallery',
			'caption',
			'search-form',
			'comment-form',
			'comment-list'
		)
	);
		
	add_theme_support ('customize-selective-refresh-widgets');
	add_theme_support ('widgets');
	add_theme_support ('widgets-block-editor');
	
	add_theme_support ('editor-styles');
	add_editor_style (get_template_directory_uri() . 'css/user.css');
	
	/** Images sizes **/
	update_option ('thumbnail_size_w', 500);
	update_option ('thumbnail_size_h', 99999);
	
	update_option ('medium_size_w', 800);
	update_option ('medium_size_h', 99999);
	
	update_option ('large_size_w', 1000);
	update_option ('large_size_h', 99999);
	
	set_post_thumbnail_size (1000, 99999);
	
	/** Menus **/
  register_nav_menu('primary', 'Main menu');

	/** Widgets **/
	register_sidebar (array (
										'name'					=> 'Footer',
										'id'						=> 'footer_widget'
										)
	);

} // function pive_setup()
add_action ('after_setup_theme', 'pive_setup');

/* Enqueue styles and scripts */

function pive_enqueue() {

	/** Paths **/
	$pathCSS = get_template_directory_uri ('/css/');
	$pathJS = get_template_directory_uri ('/js/');

	/** Styles **/

		/*** Destyle ***/
		wp_enqueue_style ('destyleCSS', $pathCSS . ('destyle.css'));

		/*** Main style ***/
		wp_enqueue_style ('style', get_stylesheet_uri());

		/*** User style ***/
		wp_enqueue_style ('userCSS', $pathCSS . ('user.css'));

	/** Scripts **/
	wp_enqueue_script ('scriptsJS', $pathJS . ('scripts.js'));
	
} // function pive_enqueue()
add_action ('wp_enqueue_scripts', 'pive_enqueue', 100);