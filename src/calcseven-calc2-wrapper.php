<?php

function calcseven_calc2_shortcode( $atts )
{
	calcseven_register_assets();

	include ( dirname( __FILE__ ) . '/calcseven-calc2.php' );
}

add_shortcode( 'calcseven_calc2', 'calcseven_calc2_shortcode' );
?>

