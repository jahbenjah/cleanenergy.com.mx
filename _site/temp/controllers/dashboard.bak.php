<?php
	class Dashboard extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
	    	if ($this->checkSession()) {
	    		$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );
	    		$this->view->render($this, 'index');
	    	}	    	
	    }
	    function noticias(){
		    if ($this->checkSession()) {
		    	$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );	
		    	$this->view->noticias=$this->model->news(1);
		    	$this->view->render($this, 'noticias');
	    	}	    	
	    }
	    function deportes(){
	    	if ($this->checkSession()) {
		    	$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );	
		    	$this->view->noticias=$this->model->news(2);
		    	$this->view->render($this, 'deportes');
	    	}	    	
	    }
	    function espectaculos(){
		    if ($this->checkSession()) {
		    	$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );
		    	$this->view->noticias=$this->model->news(3);
		    	$this->view->render($this, 'espectaculos');
	    	}	    	
	    }
	    function novedades(){
		    if ($this->checkSession()) {
		    	$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );	
		    	$this->view->noticias=$this->model->news(4);
		    	$this->view->render($this, 'novedades');
	    	}	    	
	    }
	    function viral(){
	    	if ($this->checkSession()) {
		    	$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );	
		    	$this->view->noticias=$this->model->news(5);
		    	$this->view->render($this, 'viral');
	    	}	    	
	    }
	    function saber(){
		    if ($this->checkSession()) {
		    	$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );	
		    	$this->view->noticias=$this->model->news(6);
		    	$this->view->render($this, 'saber');
	    	}	    	
	    }
	    function videos(){
	    	if ($this->checkSession()) {
		    	$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );	
		    	$this->view->noticias=$this->model->news(7);
		    	$this->view->render($this, 'videos');
	    	}	    	
	    }
	    function usuarios(){
	    	if ($this->checkSession()) {
	    		$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );
		    	$this->view->users=$this->model->users();
		    	$this->view->render($this, 'usuarios');
	    	}	    	
	    }
	    function banner(){
	    	if ($this->checkSession()) {	
	    		$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );
		    	$this->view->banners=$this->model->banners();
		    	$this->view->render($this, 'banner');
	    	}	    	
	    }
	    function delBanner(){
	    	if ($this->checkSession() && $_POST AND is_numeric($_POST['id'])) {
	    		$descPost=$this->model->descBanners($_POST['id']);
	    		if (is_numeric($this->model->delBanner($_POST['id']))) {
		    		if (is_file('public/img/banners/'.$descPost[0]['img'])) {
	    					if (unlink('public/img/banners/'.$descPost[0]['img'])) {
	    						echo 1;
	    					}
		    		}else{
		    			echo 1;
		    		}
	    		}
	    		else{
	    			echo " No se pudo eliminar el registro, por favor intente nuevamente";
	    		}
	    		
	    	}
	    }
	    function addBanner(){
	    	if ($this->checkSession() && $_POST AND is_numeric($_POST['tipo'])) {
	    		$this->view->tipoPost=$_POST['tipo'];
	    		$this->view->render($this, 'addBanner');
	    	}
	    }
	    function addingBanner(){
	    	if ($this->checkSession() && $_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=$value;
    				}
	    		}
	    		$filename=$this->uploadFileBanner($_FILES['inputimg']);
	    		//echo $filename;
	    		$arr['img']=$filename;
	    		//print_r($arr);
	    		return $this->model->createBanner($arr);
	    	}
	    }
	    function updateBannerForm(){
	    	if ($this->checkSession() && $_POST AND is_numeric($_POST['id'])) {
	    		$this->view->banner=$this->model->descBanners($_POST['id']);
	    		$this->view->render($this, 'updateBannerForm');
	    	}
	    }
	    function updatingBanner(){
	    	if ($this->checkSession() && $_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value) && $key!='id' && $key!='imgName') {
    					$arr[$key]=$value;
    				}
	    		}
	    		if ($_FILES && $_FILES['inputimg']['size']>0) {
    				if (is_file('public/img/banners/'.$_POST['inputimgName'])) {
    					unlink('public/img/banners/'.$_POST['inputimgName']);
		    		}
		    		$filename=$this->uploadFileBanner($_FILES['inputimg']);
				    $arr['img']=$filename;
	    		}
	    		return $this->model->updateBanner($_POST['inputid'],$arr);
	    	}
	    }
	    function addNoticia($tipo){
	    	if ($this->checkSession() && is_numeric($tipo)) {
	    		$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );
	    		$this->view->tipoPost=$tipo;
	    		$this->view->render($this, 'addPostForm');
	    	}
	    }
	    function addPost(){
	    	if ($this->checkSession() && $_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value) && $key!='_wysihtml5_mode') {
    					$arr[$key]=htmlentities($value);
    				}
	    		}
	    		if ($_POST['inputpost_section']!=7) {
		    		$filename=$this->uploadFile($_FILES['inputpost_image'], $_POST['inputpost_section']);
		    		//echo $filename;
		    		$arr['post_image']=$filename;
	    		}
	    		//print_r($arr);
	    		return $this->model->createPost($arr);
	    	}
	    }
	    function updateNoticia($noticia){
	    	$noticia=explode('-', $noticia);	    	
	    	if ($this->checkSession() &&  is_numeric($noticia[1])) {
	    		$this->view->descPost=$this->model->newsDetails($noticia[1]);
	    		$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    		$permissions=$permissions['permissions'];
	    		$this->view->permissions=explode( ',', $permissions );
	    		$this->view->tipoPost=$noticia[0];
	    		$this->view->render($this, 'editPostForm');
	    	}
	    }
	    function editPost(){
	    	if ($this->checkSession() && $_POST AND is_numeric($_POST['inputid'])) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value) && $key!='id' && $key!='imgName' && $key!='_wysihtml5_mode') {
    					$arr[$key]=$value;
    				}
	    		}
	    		if ($_FILES && $_FILES['inputpost_image']['size']>0) {
    				if (is_file('public/img/news/'.$_POST['inputimgName'])) {
    					unlink('public/img/news/'.$_POST['inputimgName']);
		    		}
		    		$filename=$this->uploadFile($_FILES['inputpost_image']);
				    $arr['post_image']=$filename;
	    		}
	    		return $this->model->updateNews($_POST['inputid'],$arr);
	    	}
	    }
	    function delNoticia(){
	    	if ($this->checkSession() && $_POST AND is_numeric($_POST['noticia'])) {
	    		$this->view->post=array('id'=>$_POST['noticia'], 'noticia'=>$_POST['txt']);
	    		$this->view->render($this, 'delPost');
	    	}
	    }
	    function delPost(){
	    	if ($this->checkSession() && $_POST AND is_numeric($_POST['inputpost_section'])) {
	    		$descPost=$this->model->newsDetails($_POST['inputpost_section']);
	    		if (is_numeric($this->model->delPost($_POST['inputpost_section']))) {
		    		if (is_file('public/img/news/'.$descPost[0]['post_image'])) {
	    					if (unlink('public/img/news/'.$descPost[0]['post_image'])) {
	    						echo 1;
	    					}
		    		}else{
		    			echo 1;
		    		}
	    		}
	    		else{
	    			echo " No se pudo eliminar el registro, por favor intente nuevamente";
	    		}
	    		
	    	}
	    }
	    function uploadFile($array=array(), $section=0){
	 		if ($this->checkSession()){
		 		if (empty($_FILES['inputpost_image'])) {
			      return '';
			    }
			    
			    $allowedExts = array("jpg", "JPG", "png", "PNG");
			    $temp = explode(".", $_FILES['inputpost_image']["name"]);
			    $extension = end($temp);
			    //check if the file type is image and then extension
			    // store the files to upload folder
			    //echo '0' if there is an error
			    if (($_FILES['inputpost_image']["type"] == "image/jpeg")
				    || ($_FILES['inputpost_image']["type"] == "image/JPEG")
				    || ($_FILES['inputpost_image']["type"] == "image/png")
				    || ($_FILES['inputpost_image']["type"] == "image/PNG")


			    	&& in_array($extension, $allowedExts)) {
			    	if ($_FILES['inputpost_image']["size"]>=3118625) {
			    		return 'excede';
			    	}
			    	else {
			    		if ($_FILES['inputpost_image']["error"] > 0) {
				        	return 'no file';//echo "erro no hay archivo";
				      	} 
				      	else {
				        	//$target = URL.'public/img/'; 
							$target ='public/img/news/';
							
							if (is_dir($target)) {
							}
							else{
								mkdir($target, 0777, true);
							}
				        	$filename = $section.$this->randomName().".".strtolower($extension);
				        	if (move_uploaded_file($_FILES['inputpost_image']["tmp_name"], $target. $filename)) {
				        		return $filename;   
				        	}else {
				        		echo "No se pudo mover el archivo";
				        	}	        
				        	
				      	}
			    	}
			      	
			    } //if allowed extension
			    else {
			      return 'Archivo no permitido';//echo "Extension not allowed or file to big";
			    }// not allowed extension
			}
	 	}
	 	function uploadFileBanner($array=array()){
	 		if ($this->checkSession()){
		 		if (empty($_FILES['inputimg'])) {
			      return '';
			    }
			    
			    $allowedExts = array("jpg", "JPG", "png", "PNG", "gif", "GIF");
			    $temp = explode(".", $_FILES['inputimg']["name"]);
			    $extension = end($temp);
			    //check if the file type is image and then extension
			    // store the files to upload folder
			    //echo '0' if there is an error
			    if (($_FILES['inputimg']["type"] == "image/jpeg")
				    || ($_FILES['inputimg']["type"] == "image/JPEG")
				    || ($_FILES['inputimg']["type"] == "image/png")
				    || ($_FILES['inputimg']["type"] == "image/PNG")
				    || ($_FILES['inputimg']["type"] == "image/gif")
				    || ($_FILES['inputimg']["type"] == "image/GIF")
			    	&& in_array($extension, $allowedExts)) {
			    	if ($_FILES['inputimg']["size"]>=3118625) {
			    		return 'excede';
			    	}
			    	else {
			    		if ($_FILES['inputimg']["error"] > 0) {
				        	return 'no file';//echo "erro no hay archivo";
				      	} 
				      	else {
				        	//$target = URL.'public/img/'; 
							$target ='public/img/banners/';
							
							if (is_dir($target)) {
							}
							else{
								mkdir($target, 0777, true);
							}
				        	$filename = $this->randomName().".".strtolower($extension);
				        	if (move_uploaded_file($_FILES['inputimg']["tmp_name"], $target. $filename)) {
				        		return $filename;   
				        	}else {
				        		echo "No se pudo mover el archivo";
				        	}	        
				        	
				      	}
			    	}
			      	
			    } //if allowed extension
			    else {
			      return 'Archivo no permitido';//echo "Extension not allowed or file to big";
			    }// not allowed extension
			}
	 	}
	 	function randomName($length=10){
	 		$key = '';
		    $keys = array_merge(range(0, 9), range('a', 'z'));
		    for ($i = 0; $i < $length; $i++) {
		        $key .= $keys[array_rand($keys)];
		    }
		    return $key; 	
		}
	    function checkSession(){
	    	if (Session::exists()) {
	    		return true;
	    	}else{
	    		echo '<script languaje="javascript">window.location.href = "'.URL.'";</script>';
	    	}
	    }
	    function destroySession(){
	 		Session::destroy();
	 		header("Location: ".URL);
	 	}
	}
?>