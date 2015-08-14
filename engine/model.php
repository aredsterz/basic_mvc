<?php

class model
{
	function __construct()
	
	{
		$this->sqlrun=pg_query($this->syntax)or die(pg_last_error());
	}
}