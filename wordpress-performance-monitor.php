<?php
/*
 * Plugin Name:       WordPress Performance & Monitor
 * Plugin URI:        https://github.com/magnetoelectrox/WordPress-Performance-Monitor
 * Description:       WordPress Performance & Monitor helps WordPress users to see where the bottlenecks of their WordPress to improve overall performance.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Cuong Le
 * Author URI:        https://github.com/magnetoelectrox
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       leslabs-wordpress-performance-monitor
 */

function activate_wpm() {
    /* activation code here */
    //file_put_contents(plugin_dir_path(__DIR__) . '/test.txt', 'activated', FILE_APPEND);
}
  
register_activation_hook( __FILE__, 'activate_wpm' );

function deactivate_wpm() {
    /* deactivation code here *
    //file_put_contents(plugin_dir_path(__DIR__) . '/test.txt', 'deactivated', FILE_APPEND);
}

register_deactivation_hook( __FILE__, 'deactivate_wpm' );

function uninstallhook_wpm() {
    /* codes to perform during unistallation */
    //file_put_contents(plugin_dir_path(__DIR__) . '/test.txt', 'uninstalled', FILE_APPEND);
}

register_uninstall_hook( __FILE__, 'uninstallhook_wpm' );

 ?>

