<?php 
/*
Plugin Name: IC Scroll To Top
Plugin URI: http://www.icanyon.cf/
Description: A simple jquery scroll to top plugin for wordpress
Author: iCanyonDesign
Author URI: http://www.icanyon.cf/
Version: 1.2
*/

// Direct Access Restrictions
defined( 'ABSPATH' ) or die( 'No Direct Access, Please' );
// Ready all Scripts and Styles
function init(){
	// Add Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jqueryScrollUp', plugin_dir_url( __FILE__ ) . '/js/jquery.scrollUp.min.js', array( 'jquery' ), 1.0, 'all' );
	wp_enqueue_script( 'icore_main_js', plugin_dir_url( __FILE__ ) . '/js/main.js', array( 'jqueryScrollUp' ), 1.0, 'all' );

	// Add Styles
	wp_enqueue_style( 'fontAwesome', plugin_dir_url( __FILE__ ) . '/css/font-awesome.min.css', false, 1.0, 'all' );
	wp_enqueue_style( 'scrollUpCss', plugin_dir_url( __FILE__ ) . '/css/scrollUp.css', false, 1.0, 'all' );
}

// Add all Scripts & Styles
add_action('init','init');		
