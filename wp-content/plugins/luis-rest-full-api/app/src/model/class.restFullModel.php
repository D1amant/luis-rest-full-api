<?php


/**
* RestFull Model 
* classe para percistencia do bamco de dados.
*/
class RestFullModel 
{
	
	function __construct()
	{
		# code...
	}


	public function getPosts($args)
	{

		$posts_array = get_posts( $args );
		return $posts_array;

	}
}