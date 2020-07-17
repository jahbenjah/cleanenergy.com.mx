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
			
		function interconnection(){
	    	$this->view->render($this,'interconnection');
		}
		
		function product_int($id){
	    	$this->view->productDetails=$this->model->productDetails($id);
	    	$this->view->render($this,'product_int');
	    }


		function autonomous(){
	    	$this->view->render($this,'autonomous');
		}
		
		function product_auto($id){
	    	$this->view->productDetails=$this->model->productDetails($id);
	    	$this->view->render($this,'product_auto');
	    }

		function luminaires(){
	    	$this->view->render($this,'luminaires');
		}
		
		function product_lum($id){
	    	$this->view->productDetails=$this->model->productDetails($id);
	    	$this->view->render($this,'product_lum');
	    }

	}
?>