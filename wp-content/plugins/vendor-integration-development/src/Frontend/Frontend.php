<?php namespace Vendor\Integration\Frontend;

use Vendor\Integration\FileManager;

/**
 * Class Frontend
 *
 * @package Vendor\Integration\Frontend
 */
class Frontend {


	/**
	 * @var FileManager
	 */
	private $fileManager;

	public function __construct( FileManager $fileManager ) {
		$this->fileManager = $fileManager;
	}

}