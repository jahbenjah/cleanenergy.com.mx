<?php
	class Index extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
	    	if (Session::exists()) {
                    echo'<script>window.location.href ="'.URL.'dashboard/'.'"</script>';
            }
	    	$this->view->allcategory=$this->model->allcategory();
	    	$this->view->pbycategory=$this->model->pbycategory();
	    	$this->view->render($this, 'index');

	    }
	    function result(){
    		$this->view->searchProduct=$this->model->searchProduct($_POST['searchp']);
    		$this->view->category=$this->model->allcategory();
    		$this->view->render($this, 'result');	
	    }
	}
?>