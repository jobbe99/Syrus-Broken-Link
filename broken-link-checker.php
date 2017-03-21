<?php
/*
Plugin Name: Syrus Link Checker
Plugin URI: https://wordpress.org/plugins/syrus-link-checker/
Description: Checks your blog for broken links and notifies you if any.
Version: 1.0
Author: Syrus Industry
Author URI: http://www.syrusindustry.com/
Text Domain: syrus-link-checker
*/

//Path to this file
if ( !defined('BLC_PLUGIN_FILE') ){
	define('BLC_PLUGIN_FILE', __FILE__);
}

//Path to the plugin's directory
if ( !defined('BLC_DIRECTORY') ){
	define('BLC_DIRECTORY', dirname(__FILE__));
}

//Load the actual plugin
require 'core/init.php';
