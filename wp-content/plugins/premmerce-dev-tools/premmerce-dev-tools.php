<?php
/**
 * Premmerce Dev Tools
 *
 * @package           Premmerce\DevTools
 *
 * @wordpress-plugin
 * Plugin Name:       Premmerce Dev Tools
 * Plugin URI:        https://premmerce.com/premmerce-dev-tools/
 * Description:       This plugin is aimed at making it easier to develop, test and debug the code on the WordPress platform.
 * Version:           1.0.2
 * Author:            premmerce
 * Author URI:        http://premmerce.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       premmerce-dev-tools
 * Domain Path:       /languages
 */

use Premmerce\DevTools\DevToolsPlugin;
use Premmerce\DevTools\FileManager;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

call_user_func( function () {

	require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

	$main = new DevToolsPlugin( new FileManager( __FILE__ ) );

	$main->run();
} );
