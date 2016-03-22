<?php

function calcseven_calc6_shortcode( $atts )
{
	$calcseven_settings = shortcode_atts(
		array('title' => NULL),
		$atts
	);
	calcseven_register_assets();

	include ( dirname( __FILE__ ) . '/calcseven-calc6.php' );
}

add_shortcode( 'calcseven_calc6', 'calcseven_calc6_shortcode' );
?>
