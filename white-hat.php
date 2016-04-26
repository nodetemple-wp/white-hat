<?php
/*
	Plugin Name: White Hat
	Description: Tiny hacks to tune-up and protect your WordPress website.
	Version: 0.0.1
	Author: NodeTemple
	Author URI: https://nodetemple.com
*/
if(!class_exists('WP_Git_Updater')) {
	include_once(plugin_dir_path(__FILE__).'updater.php');
}

$updater = new WP_Git_Updater(__FILE__);
$updater->set_username('nodetemple-wp');
$updater->set_repository('white-hat');
//$updater->authorize('');

$updater->initialize();
