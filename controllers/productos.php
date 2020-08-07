<?php
class Productos extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->productos = $this->model->interconexion('Paneles Solares');
		$this->view->render($this, 'index');
	}
	function Categoria($cat)
	{
		$this->view->productos = $this->model->interconexion($cat);
		$this->view->render($this, 'index');
	}
	function producto($id)
	{
		$this->view->productDetails = $this->model->productDetails($id);
		$this->view->render($this, 'producto');
	}
}
?>