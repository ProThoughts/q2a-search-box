<?php
/*
	Plugin Name: Search box widget
	Plugin URI: 
	Plugin Description: add search box wiget
	Plugin Version: 0.3
	Plugin Date: 2015-06-21
	Plugin Author:
	Plugin Author URI:
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.7
	Plugin Update Check URI: 
*/
if (!defined('QA_VERSION')) {
	header('Location: ../../');
	exit;
}

qa_register_plugin_module('widget', 'qa-search-box-widget.php', 'qa_search_box_widget', 'Search Box Widget');

