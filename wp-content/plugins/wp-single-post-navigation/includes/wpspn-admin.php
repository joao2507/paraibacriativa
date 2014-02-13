<?php
/**
 * Helper functions for the admin - plugin links and help tabs.
 *
 * @package    WP Single Post Navigation
 * @subpackage Admin
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2011-2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/wp-single-post-navigation/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 * @version 1.1
 */

/**
 * Setting helper links constant
 *
 * @since 1.5
 */
define( 'WPSPN_URL_TRANSLATE',		'http://translate.wpautobahn.com/projects/wordpress-plugins-deckerweb/wp-single-post-navigation' );
define( 'WPSPN_URL_WPORG_FAQ',		'http://wordpress.org/extend/plugins/wp-single-post-navigation/faq/' );
define( 'WPSPN_URL_WPORG_FORUM',	'http://wordpress.org/support/plugin/wp-single-post-navigation' );
if ( get_locale() == 'de_DE' || get_locale() == 'de_AT' || get_locale() == 'de_CH' || get_locale() == 'de_LU' ) {
	define( 'WPSPN_URL_DONATE', 	'http://genesisthemes.de/spenden/' );
	define( 'WPSPN_URL_PLUGIN',	'http://genesisthemes.de/plugins/wp-single-post-navigation/' );
} else {
	define( 'WPSPN_URL_DONATE', 	'http://genesisthemes.de/en/donate/' );
	define( 'WPSPN_URL_PLUGIN', 	'http://genesisthemes.de/en/wp-plugins/wp-single-post-navigation/' );
}


add_filter( 'plugin_row_meta', 'ddw_wpspn_plugin_links', 10, 2 );
/**
 * Add various support links to plugin page
 *
 * @since 1.2
 *
 * @param  $wpspn_links
 * @param  $wpspn_file
 * @return strings plugin links
 */
function ddw_wpspn_plugin_links( $wpspn_links, $wpspn_file ) {

	if ( ! current_user_can( 'install_plugins' ) )
		return $wpspn_links;

	if ( $wpspn_file == WPSPN_PLUGIN_BASEDIR . '/wp-single-post-navigation.php' ) {
		$wpspn_links[] = '<a href="' . esc_url_raw( WPSPN_URL_WPORG_FAQ ) . '" target="_new" title="' . __( 'FAQ', 'wpspn' ) . '">' . __( 'FAQ', 'wpspn' ) . '</a>';
		$wpspn_links[] = '<a href="' . esc_url_raw( WPSPN_URL_WPORG_FORUM ) . '" target="_new" title="' . __( 'Support', 'wpspn' ) . '">' . __( 'Support', 'wpspn' ) . '</a>';
		$wpspn_links[] = '<a href="' . esc_url_raw( WPSPN_URL_TRANSLATE ) . '" target="_new" title="' . __( 'Translations', 'wpspn' ) . '">' . __( 'Translations', 'wpspn' ) . '</a>';
		$wpspn_links[] = '<a href="' . esc_url_raw( WPSPN_URL_DONATE ) . '" target="_new" title="' . __( 'Donate', 'wpspn' ) . '">' . __( 'Donate', 'wpspn' ) . '</a>';
	}

	return $wpspn_links;

}  // end of function ddw_wpspn_plugin_links
