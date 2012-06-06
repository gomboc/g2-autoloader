<?php

class G2_AutoloaderTest extends PHPUnit_Framework_TestCase
{

	
	public function setUp()
	{
		G2_Autoloader::register();
	}
	
	
	public function tearDown()
	{
		G2_Autoloader::unregister();
	}

	
	public function testAutoload()
	{
		$class = new G2_Auto();
		
		$this->assertInstanceOf( 'G2_Auto', $class );
	}

	
	public function testAutoloadExistingClass()
	{
		new G2_Auto();
		
		$response = G2_Autoloader::autoload( 'G2_Auto' );
		
		$this->assertFalse( $response );
	}
	
	
	public function testAutoloadFileExists()
	{
		$response = G2_Autoloader::autoload( 'G2_Auto2' );
		
		$this->assertFalse( $response );
		
		$response = G2_Autoloader::autoload( 'T3_Auto' );
		
		$this->assertFalse( $response );
	}
	
	
	public function testRegister()
	{		
		$this->assertTrue( in_array( array( 'G2_Autoloader', 'autoload' ), spl_autoload_functions() ) );
	}
	
	
	public function testUnRegister()
	{		
		G2_Autoloader::unregister();
		
		$this->assertFalse( in_array( array( 'G2_Autoloader', 'autoload' ), spl_autoload_functions() ) );
	}
}