<?php

function calcseven_calc4_shortcode( $atts )
{
	calcseven_register_assets();

	include ( dirname( __FILE__ ) . '/calcseven-calc4.php' );
}

add_shortcode( 'calcseven_calc4', 'calcseven_calc4_shortcode' );
?>

