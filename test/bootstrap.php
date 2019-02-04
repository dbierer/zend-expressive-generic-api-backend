<?php
declare(strict_types=1);
ini_set('display_errors', 'on');

function error_handle($errCode, $errInfo) {
    error_log("Code : $errCode : Info : $errInfo\n");
}

set_error_handler('error_handle');

// Delegate static file requests back to the PHP built-in webserver
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

use Zend\ServiceManager\ServiceManager;

// Load merged config from all *Provider sources + /config/autoload/*(global|local).php
$config = require 'config/config.php';

$dependencies = $config['dependencies'];
$dependencies['services']['config'] = $config;

// Override Services
$dependencies['services'] = require 'test/test.db.local.php';

// Override Factories
//$dependencies['factories'] = [];

// Build container
$container = new ServiceManager($dependencies);
unset($dependencies,$config);
