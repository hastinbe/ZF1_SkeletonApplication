<?php
// Define path to application directory
defined('APP_PATH')
    || define('APP_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APP_ENV')
    || define('APP_ENV', (getenv('APP_ENV') ? getenv('APP_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(APP_ENV, APP_PATH . '/configs/application.ini');
$application->bootstrap()->run();