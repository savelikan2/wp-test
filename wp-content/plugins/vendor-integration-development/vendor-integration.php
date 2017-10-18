<?php

use Vendor\Integration\IntegrationPlugin;
use Vendor\Integration\FileManager;

/**
 * Integration plugin
 *
 *
 * @link              http://premmerce.com
 * @since             1.0.0
 * @package           Vendor\Integration
 *
 * @wordpress-plugin
 * Plugin Name:       Integration
 * Plugin URI:        http://premmerce.com
 * Description:       Test plugin
 * Version:           1.0
 * Author:            vendor
 * Author URI:        http://premmerce.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vendor-integration
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if(!defined('WPINC')){
	die;
}

call_user_func(function(){

	require_once plugin_dir_path(__FILE__) . 'autoload.php';

	$main = new IntegrationPlugin(new FileManager(__FILE__));

	register_activation_hook(__FILE__, [$main, 'activate']);

	register_deactivation_hook(__FILE__, [$main, 'deactivate']);

	register_uninstall_hook(__FILE__, [IntegrationPlugin::class, 'uninstall']);

	$main->run();
});