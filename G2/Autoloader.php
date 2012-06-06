<?php 

require_once 'autoload-register.php';


class G2_Autoloader
{
		
	public static function autoload( $class )
	{				
		if ( ( class_exists( $class ) ) || ( strpos( $class, 'G2' ) === false ) ) {
			return false;
		}
	
		$classFilePath = G2_ROOT .
						 str_replace( '_', DIRECTORY_SEPARATOR , str_replace( 'G2_', '', $class ) ) .
						 '.php';
					 
		if ( ( file_exists( $classFilePath ) === false ) || ( is_readable( $classFilePath ) === false ) ) {
			return false;
		}
		
		require_once( $classFilePath );
	}
	
	
	public static function register()
	{
		return spl_autoload_register( array( __CLASS__, 'autoload' ) );
	}
	
	
	public static function unregister()
	{
		return spl_autoload_unregister( array( __CLASS__, 'autoload' ) );
	}
}