<?php
/**
* Standard controller layout.
*
* @package LydiaCore
*/
class CCIndex extends CObject implements IController {

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct();
	}
   
   /**
    * Implementing interface IController. All controllers must have an index action.
    */
    public function Index() {
    	$this->data['title'] = "The Index Controller";
      	$this->data['header'] = "Welcome to Lanaya framework!";
      	$this->data['main'] = "<img src='http://athu.se/lanaya_dota2.jpg' alt='Lanaya' height='700' width='400' />";
      	$this->data['footer'] = "© Lanaya by Andreas Thuresson";
    }

} 