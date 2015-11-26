<?php
/**
 * Plugin Name: WP-CalcSeven
 * Description: Financial calculators for WP
 * Author: MaxKoryukov
 * Author URI: https://github.com/maxkoryukov
 * Version: 0.0.4
 * Plugin URI: https://github.com/maxkoryukov
 */

function calcseven_register_assets()
{
	wp_enqueue_style( 'twitter-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css', array(), '3.3.5' );
	wp_enqueue_style( 'calcseven', plugins_url('style.min.css', __FILE__ ) , array('twitter-bootstrap') );

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '1.11.1', true );
	wp_enqueue_script( 'twitter-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
	wp_enqueue_script( 'knockout-js', 'https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js', array('jquery'), '3.3.0', true );
	wp_enqueue_script( 'momentjs', 'http://momentjs.com/downloads/moment.min.js', array(), '2.10.6', true );

	wp_enqueue_script( 'calcseven-4', plugins_url('calcseven-calc4.js', __FILE__ ) , array('momentjs', 'knockout-js', 'jquery') );
}

calcseven_register_assets();

include_once( dirname( __FILE__ ) . '/calcseven-calc1-wrapper.php' );
include_once( dirname( __FILE__ ) . '/calcseven-calc2-wrapper.php' );
include_once( dirname( __FILE__ ) . '/calcseven-calc4-wrapper.php' );
include_once( dirname( __FILE__ ) . '/calcseven-calc5-wrapper.php' );

?>

