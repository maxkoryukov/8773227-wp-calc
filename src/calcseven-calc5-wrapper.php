<?php

function calcseven_calc5_shortcode( $atts )
{
	$calcseven_settings = shortcode_atts(
		array('title' => NULL),
		$atts
	);

	calcseven_register_assets();

	include ( dirname( __FILE__ ) . '/calcseven-calc5.php' );
}

add_shortcode( 'calcseven_calc5', 'calcseven_calc5_shortcode' );
?>
