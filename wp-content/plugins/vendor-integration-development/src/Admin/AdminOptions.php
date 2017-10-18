<?php namespace Vendor\Integration\Admin;


use Vendor\Integration\FileManager;

class AdminOptions{

	const SLUG = 'vendor-integration-options';

	const OPTION = 'vendor_integration_options_key';


	/**
	 * @var FileManager
	 */
	private $fileManager;

	public function __construct(FileManager $fileManager){
		$this->fileManager = $fileManager;
		add_action('admin_menu', [$this, 'addMenuPage']);
	}

	public function addMenuPage(){
		add_submenu_page(AdminSettingsApi::SLUG, 'Integration Options',
			'Options',
			'manage_options',
			self::SLUG,
			[$this, 'optionsPageHandler'],
			'dashicons-dashboard');
	}

	public function optionsPageHandler(){
		$data = $_POST;

		if(isset($data['submitted'])){
			update_option(self::OPTION, $data[ self::OPTION ] ?? []);
		}

		$options = get_option(self::OPTION, []);

		$this->fileManager->includeTemplate('admin/options.php', ['options' => $options]);
	}


}
