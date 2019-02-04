<?php
use Zend\ServiceManager\ServiceManager;

// Load configuration
$config = require __DIR__ . '/config.php';

$dependencies = $config['dependencies'];
$dependencies['services']['config'] = $config;

/*
// Common Services
$dependencies['services'] = [];

// Common Table Classes
$dependencies['factories'] = [];
*/

// Build container
return new ServiceManager($dependencies);
