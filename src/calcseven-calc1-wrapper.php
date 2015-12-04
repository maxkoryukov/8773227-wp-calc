<?php

function calcseven_calc1_shortcode( $atts )
{
	$calcseven_settings = shortcode_atts(
		array('title' => NULL),
		$atts
	);
	calcseven_register_assets();

	include ( dirname( __FILE__ ) . '/calcseven-calc1.php' );
}

add_shortcode( 'calcseven_calc1', 'calcseven_calc1_shortcode' );
?>
