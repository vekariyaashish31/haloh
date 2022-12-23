<?php
// Version
define('VERSION', '3.0.3.2');
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');