<?php
/**
 * Plugin Name: WP-CalcSeven
 * Description: Financial calculators for WP
 * Author: MaxKoryukov
 * Author URI: https://github.com/maxkoryukov
 * Version: 0.0.2
 * Plugin URI: https://github.com/maxkoryukov
 */

function calcseven_register_assets()
{
	wp_enqueue_style( 'twitter-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css', array(), '3.3.5' );
	wp_enqueue_style( 'calcseven-css', plugins_url('style.min.css', __FILE__ ) , array('twitter-bootstrap') );

	wp_enqueue_script( 'knockout-js', 'https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js', array(), '3.3.0', true );
}

include_once( dirname( __FILE__ ) . '/calcseven-calc2-wrapper.php' );
include_once( dirname( __FILE__ ) . '/calcseven-calc5-wrapper.php' );

?>

