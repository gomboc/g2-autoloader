<?php

	error_reporting( E_ALL | E_STRICT );
	ini_set( 'display_errors', 1 ); 
	
	date_default_timezone_set( 'Europe/Belgrade' ); 
	
	// Ensure library/ is on include_path
	set_include_path( implode( PATH_SEPARATOR, array(
	    realpath( dirname( __FILE__ ) . '/../' ), 
	    get_include_path(),
	) ) );
	
	define( 'G2_ROOT', realpath( dirname( __FILE__ ) . '/stubs/G2' ) . DIRECTORY_SEPARATOR );
	
	require_once 'G2/Autoloader.php';
