<?php
/**
* Helpers for the template file.
*/
$lanaya->data['footer'] = '<p>&copy; Lanaya by Andreas Thuresson</h1>';


/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $lanaya = CLanaya::Instance(); 
  $html = null;
  
  return $html;
}

/**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return CLanaya::Instance()->request->base_url . trim($url, '/');
}