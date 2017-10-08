<?php

require_once("database.php");
class DbClass 
{
	
	function __construct()
	{
		$this->db=new Database();
	}
}
?>