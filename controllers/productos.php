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
}
?>