<?php
class Productos extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->productos = $this->model->productos();
		$this->view->render($this, 'index');
	}
	function producto($id)	
	{	
		$this->view->productDetails = $this->model->productDetails($id);	
		$this->view->render($this, 'producto');	
	}

	function categorias()	
	{	
		$this->view->productos = $this->model->productos();
		$this->view->render($this, 'categorias');
	}
}
?>