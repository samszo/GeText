<?php
date_default_timezone_set('Europe/Paris');

define ("ROOT_PATH","/Applications/XAMPP/xamppfiles/htdocs");
define ("WEB_ROOT","http://localhost/GeText");
define ("ROOT_PATH_SITE",ROOT_PATH."/GeText");


// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', ROOT_PATH_SITE. '/application');

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));


set_include_path(ROOT_PATH.'/library');       
set_include_path(get_include_path().PATH_SEPARATOR.ROOT_PATH."/Zend/library");
set_include_path(get_include_path().PATH_SEPARATOR.ROOT_PATH."/Zend/extras/library");

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

// Désactivez le plugin ErrorHandler :
//$front = Zend_Controller_Front::getInstance();
//$front->throwExceptions(true);
// Désactivez le plugin ErrorHandler :
//$front->setParam('noErrorHandler', true);        
?>