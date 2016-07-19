<?php

/**
* Restfull Controller;
*/
class RestFullController 
{

	private $url;
	private $key;
	private $arguments;
	private $retunrType;
	
	function __construct()
	{
		# code...
	}


	public static function getPosts()
	{
		echo '{"teste" : "teste"}';

	}
}