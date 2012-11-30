<?php
/**
* Holding a instance of CLydia to enable use of $this in subclasses.
*
* @package LydiaCore
*/
class CObject {
	 
	 /**
	 * Members
	 */
	public $config;
	public $request;
	public $data;      

	/**
	 * Constructor
	 */
	protected function __construct() {
		$lanaya = CLanaya::Instance();
		$this->config   = &$lanaya->config;
		$this->request  = &$lanaya->request;
		$this->data     = &$lanaya->data;
	}
	
}