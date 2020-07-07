<?php

	class En extends Controller

	{
	    function __construct()
	    {
	        parent::__construct();
	    }
	    function index(){			
		    $this->view->render($this, 'index'); 		
	    }
	    function about(){
	    	$this->view->render($this,'about');
	    }
	    function contact(){
	    	$this->view->render($this,'contact');
	    }

	}
?>