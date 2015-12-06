<?php

function calcseven_calc3_shortcode( $atts )
{
	$calcseven_settings = shortcode_atts(
		array('title' => NULL),
		$atts
	);
	calcseven_register_assets();

	include ( dirname( __FILE__ ) . '/calcseven-calc3.php' );
}

add_shortcode( 'calcseven_calc3', 'calcseven_calc3_shortcode' );
?>
