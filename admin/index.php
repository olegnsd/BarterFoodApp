<?php
//ini_set('display_errors', 1);
// Version
define('VERSION', '2.3.0.2');

//ini_set('display_errors', 1);
// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

//ini_set('display_errors', 1);
// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: ../install/index.php');
	exit;
}
//ini_set('display_errors', 1);
// Startup
require_once(DIR_SYSTEM . 'startup.php');

//ini_set('display_errors', 1);
start('admin');

//ini_set('display_errors', 1);
