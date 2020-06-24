<?php
	class Products extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
	    	header('location: '.URL);	    	
	    }
	    function detalles($id){
	    	$this->view->allcategory=$this->model->allcategory();
	    	 $this->view->newsDetails=$this->model->newsDetails($id);
	    	 // $this->view->news=$this->model->news();
	    	// $this->view->banner=$this->model->banner();
	    	// $this->view->bannerCarousel=$this->model->bannerCarousel();
	    	$this->view->render($this, 'detalles');    	
	    }
	    function addRestaurantForm (){
	    	$this->model->news();
	    	$this->view->render($this,'addRestaurantForm');
	    }
	    function category($id){
	    	$this->view->allcategory=$this->model->allcategory();
	    	$this->view->pbycategory=$this->model->pbycategory($id);
	    	$this->view->render($this,'category');
	    }
	}
?>