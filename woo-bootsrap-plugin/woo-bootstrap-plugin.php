<?php
/**
 * Plugin Name: Woo Bootrap plugin
 * Plugin URI: https://course.codewithmehedi.com
 * Description: This is a woocommerce bootrap plugin
 * Version: 1.0.0
 * Author: Mehedi hasan
 * Author URI: https://codewithmehedi.com/
 * Text Domain: woobp
 * Domain Path: /languages
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    // Put your plugin code here
}
else {
	add_action('admin_notices', function() {
       echo '<div class="notice notice-error"><p>'.esc_html__('Woo Bootrap plugin For Woocommerce requires WooCommerce to be installed and active. You can download', 'woobp').' <a href="https://woocommerce.com/" target="_blank">WooCommerce</a> '.esc_html__('here.','woobp').'</p></div>';   
    });

}