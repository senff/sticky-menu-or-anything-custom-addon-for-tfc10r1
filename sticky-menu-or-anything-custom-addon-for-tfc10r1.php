<?php
/*
Plugin Name: Sticky Menu (or Anything!) on Scroll (custom add-on for tfc10r1)
Plugin URI: http://www.senff.com/plugins/sticky-anything-wp
Description: A custom add-on to Sticky Menu (Or Anything) On Scroll for tfc10r1 to enable horizontal scrolling.
Author: Mark Senff
Author URI: http://www.senff.com
Version: 1.0
*/

defined('ABSPATH') or die('INSERT COIN');

if (!function_exists('load_sticky_anything_tfc10r1')) {
    function load_sticky_anything_tfc10r1() {

		include_once(ABSPATH.'wp-admin/includes/plugin.php');
		if ( is_plugin_active( 'sticky-menu-or-anything-on-scroll/sticky-menu-or-anything.php' ) ) {
			wp_register_script('stickyAnythingtfc10r1Lib', plugins_url('jq-sticky-anything-tfc10r1.js', __FILE__), array( 'stickyAnythingLib' ), '1.0', true);
	    	wp_enqueue_script('stickyAnythingtfc10r1Lib');
	    }
	}
}

$plugin = plugin_basename(__FILE__); 
add_action('wp_enqueue_scripts', 'load_sticky_anything_tfc10r1',99999);
