<?php namespace Vendor\Integration;

use Vendor\Integration\Admin\AdminOptions;
use Vendor\Integration\Admin\AdminSettingsApi;
use Vendor\Integration\Frontend\Frontend;

/**
 * Class IntegrationPlugin
 *
 * @package Vendor\Integration
 */
class IntegrationPlugin{

	/**
	 * @var FileManager
	 */
	private $fileManager;

	const DOMAIN = 'vendor-integration';

	/**
	 * PluginManager constructor.
	 *
	 * @param FileManager $fileManager
	 */
	public function __construct(FileManager $fileManager){

		$this->fileManager = $fileManager;

		add_action('init', [$this, 'loadTextDomain']);

	}

	/**
	 * Run plugin part
	 */
	public function run(){
		if(is_admin()){
			new AdminSettingsApi($this->fileManager);
			new AdminOptions($this->fileManager);
		}else{
			new Frontend($this->fileManager);
		}

	}

	/**
	 * Load plugin translations
	 */
	public function loadTextDomain(){
		$name = $this->fileManager->getPluginName();
		load_plugin_textdomain($name, false, $name . '/languages/');
	}

	/**
	 * Fired when the plugin is activated
	 */
	public function activate(){
		update_option(AdminOptions::OPTION, [
			'bootstrap' => 'on',
			'jquery'    => 'on',
		]);
	}

	/**
	 * Fired when the plugin is deactivated
	 */
	public function deactivate(){
		delete_option(AdminOptions::OPTION);
	}

	/**
	 * Fired during plugin uninstall
	 */
	public static function uninstall(){
		delete_option(AdminOptions::OPTION);
	}
}