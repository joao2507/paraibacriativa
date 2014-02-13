<?php
/**
 * Main plugin file.
 * This plugin adds next & previous navigation links on single posts
 * to have some kind of a browse post by post nav style.
 * Support for several popular theme frameworks and themes is integrated.
 * And you can customize link direction and some parameters via your theme/child theme.
 *
 * @package   WP Single Post Navigation
 * @author    David Decker
 * @link      http://twitter.com/#!/deckerweb
 * @copyright Copyright 2011-2012, David Decker - DECKERWEB
 *
 * Plugin Name: WP Single Post Navigation
 * Plugin URI: http://genesisthemes.de/en/wp-plugins/wp-single-post-navigation/
 * Description: This plugin adds next & previous navigation links on single posts to have some kind of a browse post by post nav style. Support for several popular theme frameworks and themes is integrated. And you can customize link direction and some parameters via your theme/child theme.
 * Version: 1.5
 * Author: David Decker - DECKERWEB
 * Author URI: http://deckerweb.de/
 * License: GPLv2
 * Text Domain: wpspn
 * Domain Path: /languages/
 */

/**
 * Setting constants
 *
 * @since 1.2
 * @version 1.1
 */
/** Plugin version */
define( 'WPSPN_VERSION', '1.5' );

/** Plugin directory */
define( 'WPSPN_PLUGIN_DIR', dirname( __FILE__ ) );

/** Plugin base directory */
define( 'WPSPN_PLUGIN_BASEDIR', dirname( plugin_basename( __FILE__ ) ) );


add_action( 'init', 'ddw_wpspn_init', 1 );
/**
 * Load the text domain for translation of the plugin.
 * Load admin helper functions - only within 'wp-admin'.
 * 
 * @since 1.2
 * @version 1.1
 */
function ddw_wpspn_init() {

	/** First look in WordPress' "languages" folder = custom & update-secure! */
	load_plugin_textdomain( 'wpspn', false, WPSPN_PLUGIN_BASEDIR . '/../../languages/wp-single-post-navigation/' );

	/** Then look in plugin's "languages" folder = default */
	load_plugin_textdomain( 'wpspn', false, WPSPN_PLUGIN_BASEDIR . '/languages' );

	/** Load the admin and frontend functions only when needed */
	if ( is_admin() ) {
		require_once( WPSPN_PLUGIN_DIR . '/includes/wpspn-admin.php' );
	} else {
		add_action( 'wp_enqueue_scripts', 'ddw_wpspn_add_hook' );
		require_once( WPSPN_PLUGIN_DIR . '/includes/wpspn-frontend.php' );
		require_once( WPSPN_PLUGIN_DIR . '/includes/wpspn-frontend-helper.php' );
	}

	/** Define helper constant for reversing link direction */
	if ( ! defined( 'WPSPN_REVERSE_LINK_DIRECTION' ) ) {
		define( 'WPSPN_REVERSE_LINK_DIRECTION', FALSE );
	}

}  // end of function ddw_wpspn_init


/**
 * Include our own hook within 'wp_enqueue_scripts'
 * to better add or remove plugin & custom stylesheets
 * 
 * @since 1.5
 */
function ddw_wpspn_add_hook() {

	/** Action hook: 'wpspn_load_styles' - allows for enqueueing additional custom WPSPN styles */
	do_action( 'wpspn_load_styles' );
}


add_action( 'wp_enqueue_scripts', 'ddw_wpspn_style_logic' );
/**
 * Set our own action hook for hooking styles in
 * 
 * @since 1.5
 */
function ddw_wpspn_style_logic() {

	/**
	 * At first, look in theme/child theme for custom WPSPN stylesheet: 'wpspn-styles.css'
	 * If it exists, enqueue it!
	 */
	if ( is_readable( get_stylesheet_directory() . '/wpspn-styles.css' ) ) {

		add_action( 'wpspn_load_styles', 'wpspn_custom_styles' );
	}

	/** If no custom/user stylesheet exists, enqueue our default plugin's styles */
	else {

		add_action( 'wpspn_load_styles', 'ddw_wpspn_stylesheet', 5 );

		/** If existing in child theme folder, add additional user styles */
		if ( is_readable( get_stylesheet_directory() . '/wpspn-additions.css' ) ) {
			add_action( 'wpspn_load_styles', 'wpspn_style_additions' );
		}

	} // end-if

}  // end of function ddw_wpspn_style_logic


/**
 * Conditionally enqueue custom/user WPSPN styles
 * 
 * @since 1.5
 */
function wpspn_custom_styles() {

	wp_enqueue_style( 'wpspn-styles-custom', get_stylesheet_directory_uri() . '/wpspn-styles.css', false, WPSPN_VERSION, 'screen' );

}


/**
 * Enqueue the default plugin's stylesheet
 * 
 * @since 1.0
 * @version 1.2
 */
function ddw_wpspn_stylesheet() {

	wp_enqueue_style( 'wp_single_post_navigation', plugins_url( '/css/single-post-navigation.css', __FILE__ ), false, WPSPN_VERSION, 'screen' );

}


/**
 * Conditionally enqueue additional WPSPN style additions
 * 
 * @since 1.5
 */
function wpspn_style_additions() {

	wp_enqueue_style( 'wpspn-style-additions', get_stylesheet_directory_uri() . '/wpspn-additions.css', false, WPSPN_VERSION, 'screen' );

}
