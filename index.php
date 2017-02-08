<?php


//set error displaying

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

//define where document root is
define('DOCROOT', __DIR__);

//start the bootstrapping
require_once(DOCROOT.'/system/project/config/bootstrap.php');



//start the application

$controller_name = router::getControllerName();

router::runController($controller_name);
