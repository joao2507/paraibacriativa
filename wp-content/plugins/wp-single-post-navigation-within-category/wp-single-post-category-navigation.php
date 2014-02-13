<?php
/*
Plugin Name: WP Single Post Navigation Within Category
Plugin URI: http://boredru.com/2011/11/wp-single-post-category-navigation/
Description: The plugin adds navigation links on a signle post to the previous or next post within the current category. Based on WP Single Post Navigation
Version: 1.0
Author: Michael Hopps
Author URI: http://boredru.com
*/

// Add single post navigation stylesheet
add_action( 'wp_print_styles', 'wp_single_post_navigation_stylesheet' );
function wp_single_post_navigation_stylesheet() {
	wp_deregister_style('wp_single_post_navigation'); // de-register
	wp_register_style('wp_single_post_navigation', plugins_url('/css/single-post-navigation.css', __FILE__), false, '1.1', 'screen'); // re-register
	wp_enqueue_style( 'wp_single_post_navigation' ); // load
}

// Add single post navigation links
add_action( 'wp_head', 'single_prev_next_links' );
function single_prev_next_links() {
	if ( is_single() ) { ?>
		<div class="wpspn-area">
			<div id="wpspn-nextpost">
				<?php next_post_link( '%link', '&raquo;', true ); ?>
			</div>
			<div id="wpspn-prevpost">
				<?php previous_post_link( '%link', '&laquo;', true ); ?>
			</div>
		</div>
	<?php }
}

?>