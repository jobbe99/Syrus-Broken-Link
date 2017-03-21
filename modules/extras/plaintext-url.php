<?php
/*
Plugin Name: Plaintext URLs 
Description: Parse plaintext URLs as links
Version: 1.0
Author: Syrus Industry

ModuleCategory: parser
ModuleClassName: blcPlaintextURL
ModuleContext: on-demand
ModuleLazyInit: true

ModulePriority: 800
*/

if ( !class_exists('blcPlaintextUrlBase') ) {
	require_once 'plaintext-url-parser-base.php';
}

class blcPlaintextURL extends blcPlaintextUrlBase {

}