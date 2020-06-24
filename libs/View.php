<?php
 	class View{
    function render($controller, $view){
      $controller = get_class($controller);
      include_once './views/'.$controller.'/'.$view.'.php';
    }
  }
?>