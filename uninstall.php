<?php
	if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit;
	if ( get_option( 'sticky_anything_tfc10r1_options' ) != false ) {
		delete_option( 'sticky_anything_tfc10r1_options' );
	}
?>
