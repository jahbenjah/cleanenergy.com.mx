<?php
	class Autonomos extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
            $this->view->autonomos=$this->model->autonomos('Panales Autonomos');
            
	    	$this->view->render($this, 'index');	    	
	    }
	    function Categoria($cat){
	    	$this->view->autonomos=$this->model->autonomos($cat);
	    	$this->view->render($this, 'index');
	    }
	    function producto($id){
	    	$this->view->productDetails=$this->model->productDetails($id);
	    	$this->view->render($this,'producto');
	    }
	}
?>