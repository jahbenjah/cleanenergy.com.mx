<?php
	class Luminarias extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
            $this->view->luminarias=$this->model->luminarias();
	    	$this->view->render($this, 'index');	    	
	    }
	    function producto($id){
	    	$this->view->productDetails=$this->model->productDetails($id);
	    	$this->view->render($this,'producto');
	    }
	}
?>