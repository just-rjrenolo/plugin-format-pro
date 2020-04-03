<?php 
/**
* @package Plugin Formatting
*/
/*
Plugin Name: Plugin Formatting
Plugin URI: 
Description: 
Version: 1.0.0
Author: Nero
Author URI : 
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ){
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


function activate_bidi_recycle_plugin(){
	Includes\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_bidi_recycle_plugin' );

// Initialize Deactivation, The code that runs during plugin deactivation
function deactivate_bidi_recycle_plugin(){
	Includes\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_bidi_recycle_plugin' );


// Include the Init folder, Initialize all the core classes of the plugin
if ( class_exists( 'Includes\\Init' ) ) {
	Includes\Init::register_services();
}
