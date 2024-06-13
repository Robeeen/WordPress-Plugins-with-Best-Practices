<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       Post Creation
 * Plugin URI:        http://shamskha.xyz/plugin-names
 * Description:       To create and insert new post 
 * Version:           1.0.0
 * Author:            Fun Company
 * Author URI:        http://author.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
//plugin Versions
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
include( MY_PLUGIN_PATH . 'includes/enqueue_scripts/enque_files.php');
include( MY_PLUGIN_PATH . 'includes/shortcodes/shortcodes.php');
include( MY_PLUGIN_PATH . 'includes/insert_post/insert_post.php');
include( MY_PLUGIN_PATH . 'uninstall.php');



