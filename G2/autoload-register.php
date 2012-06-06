<?php 

if ( !defined( 'G2_ROOT' ) ) {
	
	define( 'G2_ROOT', realpath( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR );

	G2_Autoloader::register();
}