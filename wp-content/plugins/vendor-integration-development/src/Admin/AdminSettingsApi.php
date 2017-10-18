<?php namespace Vendor\Integration\Admin;

use Vendor\Integration\FileManager;

/**
 * Class Admin
 *
 * @package Vendor\Integration\Admin
 */
class AdminSettingsApi{

	/**
	 * @var FileManager
	 */
	private $fileManager;

	const  SLUG = 'vendor-integration';

	/**
	 * Admin constructor.
	 *
	 * Register menu items and handlers
	 *
	 * @param FileManager $fileManager
	 */
	public function __construct(FileManager $fileManager){
		$this->fileManager = $fileManager;
		add_action('admin_init', [$this, 'initSettings']);
		add_action('admin_menu', [$this, 'addMenuPage']);
	}

	public function initSettings(){

		register_setting('vendor', 'vendor_integration');


		$options = get_option('vendor_integration');

		add_settings_section(
			'libraries_section',
			'Libraries',
			function(){
				echo '<p>Select libraries to integrate</p>';
			},
			self::SLUG
		);

		add_settings_field(
			'bootstrap',
			'Bootstrap',
			[$this, 'renderCheckbox'],
			self::SLUG,
			'libraries_section',
			[
				'label_text' => 'Add perfect style to your site',
				'label_for'  => 'vendor_integration[bootstrap]',
				'value'      => $options['bootstrap'] ?? null,
			]
		);

		add_settings_field(
			'jquery',
			'JQuery',
			[$this, 'renderCheckbox'],
			self::SLUG,
			'libraries_section',
			[
				'label_text' => 'Fully integrate jquery into your site',
				'label_for'  => 'vendor_integration[jquery]',
				'value'      => $options['jquery'] ?? null,
			]
		);


		add_settings_section(
			'own_section',
			'Your own library',
			function(){
				echo '<p>Here you can add your own library</p>';
			},
			self::SLUG
		);

		add_settings_field('name',
			'Name',
			[$this, 'renderText'],
			self::SLUG,
			'own_section',
			[
				'label_for'  => 'vendor_integration[name]',
				'label_text' => 'Your library name',
				'value'      => $options['name'],
			]);

	}


	public function addMenuPage(){
		add_menu_page('Integration',
			'Integration',
			'manage_options',
			self::SLUG,
			[$this, 'renderPage'],
			'dashicons-dashboard');
	}

	public function renderText($args){
		$this->fileManager->includeTemplate('admin/field-text.php', ['args' => $args]);
	}

	public function renderCheckBox($args){
		$this->fileManager->includeTemplate('admin/field-checkbox.php', ['args' => $args]);
	}

	public function renderPage(){
		$this->fileManager->includeTemplate('admin/options-auto.php');
	}

}