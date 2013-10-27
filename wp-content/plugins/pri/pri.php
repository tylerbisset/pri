<?php
/*
Plugin Name: Pri
Plugin URI: 
Description: 
Author: 
Version: 
Author URI: 
*/

register_activation_hook(__FILE__, 'pri_activate');
register_deactivation_hook(__FILE__, 'pri_deactivate');

function pri_activate() {
	require_once dirname(__FILE__).'/pri_loader.php';
	$loader = new PriLoader();
	$loader->activate();
}

function pri_deactivate() {
	require_once dirname(__FILE__).'/pri_loader.php';
	$loader = new PriLoader();
	$loader->deactivate();
}

?>