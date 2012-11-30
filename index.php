<?php
//
// PHASE: BOOTSTRAP
//
define('LANAYA_INSTALL_PATH', dirname(__FILE__));
define('LANAYA_SITE_PATH', LANAYA_INSTALL_PATH . '/site');

require(LANAYA_INSTALL_PATH.'/system/CLanaya/bootstrap.php');

$lanaya = CLanaya::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$lanaya->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$lanaya->ThemeEngineRender();