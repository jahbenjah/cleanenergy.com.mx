<?php
	class Controller{
		function __construct(){
			Session::init();
			$this->view= new View();
			$this->loadModel();
		}

		function loadModel(){
			$model=get_class($this).'_model';
			/*$model='User_model';*/
			$path='models/'.$model.'.php';
			if (file_exists($path)) {
				include_once $path;
				$this->model = new $model();
			}
		}
	}
?>