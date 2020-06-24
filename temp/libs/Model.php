<?php
	
	class Model{
	    
	    function __construct(){
	 		//$this->db= new connectionManager(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	 		$this->db= new Database(DB_TYPE, DB_HOST, DB_USER, DB_PASS, DB_NAME);
	    }

	}
?>