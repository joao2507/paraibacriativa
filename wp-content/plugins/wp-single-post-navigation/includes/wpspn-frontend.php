<?php
/**
 * Frontend functions.
 *
 * @package    WP Single Post Navigation
 * @subpackage Frontend
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
 * Create "previous post link" and add filters for it
 * Set default values for args - so it could be overridden via theme/child theme
 *
 * @since 1.4
 */
function wpspn_previous_post_link() {

	$args = array (
		'format'       		=> '%link',     // Link format (default: %link)
		'link'                	=> '&raquo;',   // Link string (default: &raquo;)
		'in_same_cat'        	=> FALSE,       // Apply only to same category (default: FALSE)
		'excluded_categories' 	=> ''           // Exclude categories (default: empty)
	);

	$args = apply_filters( 'wpspn_previous_link_args', $args );

	previous_post_link( $args['format'], $args['link'], $args['in_same_cat'], $args['excluded_categories'] );

}  // end of function wpspn_previous_post_link


/**
 * Create "next post link" and add filters for it
 * Set default values for args - so it could be overwritten via theme/child theme
 *
 * @since 1.4
 */
function wpspn_next_post_link() {

	$args = array (
		'format'       		=> '%link',     // Link format (default: %link)
		'link'                	=> '&laquo;',   // Link string (default: &laquo;)
		'in_same_cat'        	=> FALSE,       // Apply only to same category (default: FALSE)
		'excluded_categories' 	=> ''           // Exclude categories (default: empty)
	);

	$args = apply_filters( 'wpspn_next_link_args', $args );

	next_post_link( $args['format'], $args['link'], $args['in_same_cat'], $args['excluded_categories'] );

}  // end of function wpspn_next_post_link


/**
 * Output single post navigation links for display
 * 1) Check for constant, on TRUE reverse link direction
 * 2) In link areas/containers check for custom filters and apply on success
 *
 * @since 1.0
 * @version 1.2
 */
function ddw_wpspn_single_prev_next_links() {

	/** Filters for the previous post tooltip title */
	$wpspn_previous_post_title_data = get_adjacent_post( false, '', true );
	$wpspn_previous_default_output = __( 'Previous post:', 'wpspn' ) . ' ' . esc_attr( get_the_title( $wpspn_previous_post_title_data ) );
	$wpspn_previous_post_tooltip = apply_filters( 'wpspn_filter_previous_post_tooltip', $wpspn_previous_default_output );

	/** Filters for the next post tooltip title */
	$wpspn_next_post_title_data = get_adjacent_post( false, '', false );
	$wpspn_next_default_output = __( 'Next post:', 'wpspn' ) . ' ' . esc_attr( get_the_title( $wpspn_next_post_title_data ) );
	$wpspn_next_post_tooltip = apply_filters( 'wpspn_filter_next_post_tooltip', $wpspn_next_default_output );

	/** Conditional for the links display */
	if ( is_single() && ( defined( 'WPSPN_REVERSE_LINK_DIRECTION' ) && ( WPSPN_REVERSE_LINK_DIRECTION || WPSPN_REVERSE_LINK_DIRECTION == 'reverse_direction' ) ) ) {  // Check for constant TRUE, then reverse links

		?>
		<div class="wpspn-area">
			<div id="wpspn-nextpost-reverse" title="<?php echo esc_attr__( $wpspn_next_post_tooltip ); ?>">
				<?php
					/** Check for custom filters for "next post link" parameters */
					if ( has_filter( 'wpspn_next_post_link', 'custom_wpspn_next_link' ) ) {
						custom_wpspn_next_link();

					/** If no custom filters display reversed behavior */
					} elseif ( has_filter( 'wpspn_reversed_next_post_link', 'wpspn_reversed_next_link' ) ) {
						wpspn_reversed_next_link();

					/** If nothing is found apply default parameters */
					} else {
						wpspn_next_post_link();
					}
				?>
			</div>
			<div id="wpspn-prevpost-reverse" title="<?php echo esc_attr__( $wpspn_previous_post_tooltip ); ?>">
				<?php
					/** Check for custom filters for "previous post link" parameters */
					if ( has_filter( 'wpspn_previous_post_link', 'custom_wpspn_previous_link' ) ) {
						custom_wpspn_previous_link();

					/** If no custom filters display reversed behavior */
					} elseif ( has_filter( 'wpspn_reversed_previous_post_link', 'wpspn_reversed_previous_link' ) ) {
						wpspn_reversed_previous_link();

					/** If nothing is found apply default parameters */
					} else {
						wpspn_previous_post_link();
					}
				?>
			</div>
		</div>
		<?php

	} elseif ( is_single() ) {  // Check for constant is FALSE, so DON'T reverse links (default behavior)

		?>
		<div class="wpspn-area">
			<div id="wpspn-prevpost" title="<?php echo esc_attr__( $wpspn_previous_post_tooltip ); ?>">
				<?php
					/** Check for custom filters for "previous post link" parameters */
					if ( has_filter( 'wpspn_previous_post_link', 'custom_wpspn_previous_link' ) ) {
						custom_wpspn_previous_link();

					/** If nothing is found apply default parameters */
					} else {
						wpspn_previous_post_link();
					}
				?>
			</div>
			<div id="wpspn-nextpost" title="<?php echo esc_attr__( $wpspn_next_post_tooltip ); ?>">
				<?php
					/** Check for custom filters for "next post link" parameters */
					if ( has_filter( 'wpspn_next_post_link', 'custom_wpspn_next_link' ) ) {
						custom_wpspn_next_link();

					/** If nothing is found apply default parameters */
					} else {
						wpspn_next_post_link();
					}
				?>
			</div>
		</div>
		<?php

	}  // end elseif

}  // end of function ddw_wpspn_single_prev_next_links


/**
 * Get current stylesheet name logic - compatible up to WordPress 3.4+!
 *
 * @since 1.5
 *
 * @global mixed $stylesheet
 * @param $wpspn_stylesheet_name
 */
global $stylesheet;

if ( function_exists( 'wp_get_theme' ) ) {			// First, check for WP 3.4+ function wp_get_theme()
	$wpspn_stylesheet_name = wp_get_theme( $stylesheet );
} elseif ( function_exists( 'get_current_theme' ) ) {		// Otherwise fall back to prior WP 3.4 default get_current_theme()
	$wpspn_stylesheet_name = get_current_theme();
} // end-if stylesheet check


/**
 * Load the hooks and display single post navigation links.
 *
 * Provide hooks for the most popular theme frameworks
 * and some single themes/parent themes.
 *
 * Fallback into wp_head if no framework/theme fits (sorry, we have no other chance, yet...)
 *
 * @since 1.2
 * @version 1.3
 */
if ( defined( 'GENESIS_SETTINGS_FIELD' ) || get_template() == 'genesis' ) {	// Check for Genesis Framework
	add_action( 'genesis_after', 'ddw_wpspn_single_prev_next_links' );

} elseif ( defined( 'THESIS_CLASSES' ) || 
		get_template() == 'thesis' || 
		get_template() == 'thesis_185' || 
		get_template() == 'thesis_184' || 
		get_template() == 'thesis_183' || 
		get_template() == 'thesis_182' || 
		get_template() == 'thesis_181' || 
		get_template() == 'thesis_18' || 
		get_template() == 'thesis_17' || 
		$wpspn_stylesheet_name == 'Thesis'
	) {	// Check for Thesis Theme/Framework
		add_action( 'thesis_hook_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'Builder' ) {		// Check for Builder Framework
	add_action( 'builder_finish', 'ddw_wpspn_single_prev_next_links', 5 );

} elseif ( defined( 'CATALYST_THEME_VERSION' ) || get_template() == 'catalyst' ) {	// Check for Catalyst Framework
	add_action( 'catalyst_hook_after_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'hybrid' ) {		// Check for Hybrid Framework
	add_action( 'hybrid_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'xtreme-one' ) {		// Check for Xtreme One Framework
	add_action( 'xtreme_after_siteinfo', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'headway' ) {		// Check for Headway Framework
	add_action( 'headway_after_everything', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'pagelines' ||
		get_template() == 'platform' ||
		get_template() == 'platformpro'
	) {
		// Check for Pagelines Framework or Platform (free) or Platform Pro
		add_action( 'pagelines_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'startbox' ) {		// Check for StartBox Framework
	add_action( 'sb_after', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'thematic' ) {		// Check for Thematic Framework
	add_action( 'thematic_after', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'elemental' ) {		// Check for Elemental Framework
	add_action( 'bm_footer_content_after', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'ashford' ) {		// Check for Ashford Framework
	add_action( 'ashford_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'wonderflux' ) {		// Check for Wonderflux Framework
	add_action( 'wffooter_after_wrapper', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'body_close' ) && get_template() == 'wp-framework' ) {		// Check for WP-Framework Framework
	add_action( 'body_close', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'canvas' ) {		// Check for WooThemes Canvas Parent Theme
	add_action( 'woo_footer_after', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'bp-default' ||
		get_template() == 'custom-community' ||
		get_template() == 'custom-community-pro'
	) {
		// BuddyPress specific: Check for BuddyPress Default or Custom Community/Pro Theme/Template
		add_action( 'bp_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'twentyeleven' ) {		// Check for Twenty Eleven default theme
	add_action( 'twentyeleven_credits', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'twentyten' ) {		// Check for Twenty Ten default theme
	add_action( 'twentyten_credits', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'twentytwelve' ) {		// Check for Twenty Twelve default theme
	add_action( 'twentytwelve_credits', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'suffusion' ) {		// Check for Suffusion theme
	add_action( 'suffusion_document_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'graphene' ) {		// Check for Graphene theme
	add_action( 'graphene_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'easel' ) {		// Check for Easel theme
	add_action( 'easel-page-foot', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'ifeature' ) {		// Check for iFeature3 theme
	add_action( 'chimps_afterfooter', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'news_after_html' ) && get_template() == 'news' ) {		// Check for News Theme by Justin Tadlock
	add_action( 'news_after_html', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'toolbox_credits' ) && get_template() == 'toolbox' ) {		// Check for Toolbox theme
	add_action( 'toolbox_credits', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'dkret3' ) {		// Check for dkret3 theme
	add_action( 'dkret_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'prototype_close_body' ) && get_template() == 'prototype' ) {	// Check for Prototype Theme by Justin Tadlock
	add_action( 'prototype_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'grey-opaque' ) {		// Check for Grey Opaque theme
	add_action( 'greyopaque_footer_statistics', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'oenology' ) {		// Check for Oenology theme
	add_action( 'oenology_hook_extent_after', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'retro-fitted' ) {		// Check for Retro Fitted Theme by Justin Tadlock/ Theme Hybrid
	add_action( 'retro-fitted_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'trending' ) {		// Check for Trending Theme by Justin Tadlock/ Theme Hybrid
	add_action( 'trending_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'my-life' ) {		// Check for My Life Theme by Justin Tadlock/ Theme Hybrid
	add_action( 'my-life_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'live-wire_close_body' ) && get_template() == 'live-wire' ) {	// Check for Live Wire Theme by Theme Hybrid
	add_action( 'live-wire_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'elbee-elgee' ) {		// Check for Elbee Elgee Theme
	add_action( 'lblg_print_credits', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'st_footer' ) && get_template() == 'skeleton' ) {		// Check for Skeleton theme
	add_action( 'st_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'admired' ) {		// Check for Admired theme
	add_action( 'admired_credits', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'close_body' ) && get_template() == 'infinity' ) {		// Check for Infinity Framework
	add_action( 'close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'fanwood_after_footer' ) && get_template() == 'fanwood' ) {	// Check for Fanwood v0.1.6+ Theme by DevPress
	add_action( 'fanwood_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'fanwood_close_body' ) && get_template() == 'fanwood' ) {	// Check for Fanwood prior v0.1.6 Theme by DevPress
	add_action( 'fanwood_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'visual_close_body' ) && get_template() == 'visual' ) {		// Check for Visual Theme by DevPress
	add_action( 'visual_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'james-goody_close_body' ) && get_template() == 'james-goody' ) {	// Check for James Goody Theme by DevPress
	add_action( 'james-goody_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'good_close_body' ) && get_template() == 'good' ) {		// Check for Good Theme by DevPress
	add_action( 'good_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'dotos_close_body' ) && get_template() == 'dotos' ) {		// Check for Dotos Theme by DevPress
	add_action( 'dotos_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'cascade_after_footer' ) && get_template() == 'cascade' ) {	// Check for Cascade Theme by DevPress
	add_action( 'cascade_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'goa_close_body' ) && get_template() == 'goa' ) {		// Check for Goa Theme by DevPress
	add_action( 'goa_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'ascetica' ) {		// Check for Ascetica Theme by Galin/AlienWP/Theme Hybrid
	add_action( 'ascetica_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'hatch_close_body' ) && get_template() == 'hatch' ) {		// Check for Hatch Theme by AlienWP/DevPress
	add_action( 'hatch_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'hatch_pro_close_body' ) && get_template() == 'hatch-pro' ) {	// Check for Hatch Pro Theme by AlienWP/DevPress
	add_action( 'hatch_pro_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'origin_close_body' ) && get_template() == 'origin' ) {		// Check for Origin Theme by AlienWP/DevPress
	add_action( 'origin_close_body', 'ddw_wpspn_single_prev_next_links' );

} elseif ( has_action( 'oxygen_close_body' ) && get_template() == 'oxygen' ) {		// Check for Oxygen Theme by AlienWP/DevPress
	add_action( 'oxygen_close_body', 'ddw_wpspn_single_prev_next_links' );

	// Check for Hook & Theme from "mysitemyway" brand
} elseif ( has_action( 'mysite_after_footer' ) && ( get_template() == 'myriad' ||
							get_template() == 'elegance' ||
							get_template() == 'dejavu' ||
							get_template() == 'method' ||
							get_template() == 'fusion' ||
							get_template() == 'echelon' ||
							get_template() == 'modular' ||
							get_template() == 'persuasion' )
	) {
		add_action( 'mysite_after_footer', 'ddw_wpspn_single_prev_next_links' );

} elseif ( get_template() == 'rtpanel' ) {						// Check for rtPanel Theme Framework by rtCamp
	add_action( 'rtp_hook_after_footer', 'ddw_wpspn_single_prev_next_links' );

} else {  // If nothing else fits load into 'wp_footer'
	add_action( 'init', 'ddw_wpspn_theme_helper_hook' );

}  // end-if theme & hook check


/**
 * Helper function for themes without hook
 * Uses action 'wp_footer'
 *
 * @since 1.5
 */
function ddw_wpspn_theme_helper_hook() {

	add_action( 'wp_footer', 'ddw_wpspn_single_prev_next_links', 100 );
}
