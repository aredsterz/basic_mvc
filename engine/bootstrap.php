<?php
require 'engine/model.php';
class Bootstrap
{
	private $url;
	function __construct()
	{
		
		if(isset($_GET['url']))
		{
			$this->url=$_GET['url'];
			$this->url=explode('/',$this->url);
			print_r($this->url);
			
			$path='controller/';
			
			require $path.$this->url[0].'.php';
			
			//$mtd =new $this->url[0]();
		}
	}
}
