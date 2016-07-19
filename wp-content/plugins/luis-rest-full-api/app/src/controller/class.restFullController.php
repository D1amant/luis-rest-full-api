<?php

/**
* Restfull Controller;
*/
class RestFullController 
{


	private static $key = '8076e1d0dcb90e0fd32a179973ff8cc731de3fde' /* hash sh1*/;
	private $arguments;
	private $retunrType;
	private $model;
	private $args = array(
			'posts_per_page'   => 5,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'author'	   	   => '',
			'author_name'	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
			);
	
	function __construct()
	{
		$this->model = new RestFullModel();
	}


	public function getPosts($key)
	{
		if($this->checKey($key)){
			return $this->model->getPosts($this->args);
		}else{
			return ['error' => "not key"];
		}
	}

	public function setArgs($args)
	{
		$this->args = $args;
	}

	public function getArgs()
	{
		return $this->args;
	}


    /**
     * check the value of key.
     *
     * @param mixed $key the key
     *
     * @return self
     */
    private function checKey($key)
    {	
        return (RestFullController::$key == $key) ;
    }

    /**
     * Gets the value of retunrType.
     *
     * @return mixed
     */
    public function getRetunrType()
    {
        return $this->retunrType;
    }

    /**
     * Sets the value of retunrType.
     *
     * @param mixed $retunrType the retunr type
     *
     * @return self
     */
    private function _setRetunrType($retunrType)
    {
        $this->retunrType = $retunrType;

        return $this;
    }
}