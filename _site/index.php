<?php 
	include_once 'config.php';
	$url= (isset($_GET["url"])) ? $_GET["url"] : "index/index";
	$url=explode('/', $url);
	
	if (isset($url[0])) { $controller=$url[0];}
	if (isset($url[1])) { if ($url[1]!= '') { $method=$url[1]; }}
	if (isset($url[2])) { if ($url[2]!= '') { $params=$url[2]; }}

	spl_autoload_register(function($class){
		if (file_exists(LIBS.$class.'.php')) {
			include_once LIBS.$class.'.php';
		}
	});

	$path='./controllers/'.$controller.'.php';
	if (file_exists($path)) {
		include_once $path;
		$controller=new $controller();
		if (isset($method)) {
			if (method_exists($controller, $method)) {
				if (isset($params)) {
					$controller->{$method}($params);
				}
				else {
					$controller->{$method}();
				}
			}
		}
		else {
			$controller->index();
		}
	}
	else{
		header('Location: '.URL);
	}
?>