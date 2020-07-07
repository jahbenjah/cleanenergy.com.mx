<?php
	class Dashboard extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
	    	if ($this->checkSession()) {
	    		$this->view->allcategory=$this->model->allcategory();
	    		$this->view->products=$this->model->products();
	    		$this->view->render($this, 'index');
	    	}	    	
	    }
	    function result(){
	    	if ($this->checkSession()) {
	    		$this->view->allcategory=$this->model->allcategory();
	    		$this->view->products=$this->model->productsResult();
	    		$this->view->render($this, 'result');
	    	}	    	
	    }
	    function viewproduct(){
	    	$this->view->viewproduct=$this->model->viewproduct($_POST['id']);
	    	$this->view->render($this,'productviewForm');
	    }
	    function CategoryFilter(){
	    	$this->view->filterproducts=$this->model->FilterbyCategoryproducts($_POST['id']);
	    	$this->view->render($this, 'categoryFilter');

	    }

	    function products(){
	    	return $this->model->products();
	    	//$this->model->products();
	    }
	    function addProductForm(){
	    	// if ($this->checkSession() && is_numeric($tipo)) {
	    	// 	$permissions=$this->model->permissions(Session::getValue('id'))[0];
	    	// 	$permissions=$permissions['permissions'];
	    	// 	$this->view->permissions=explode( ',', $permissions );
	    	// 	$this->view->tipoPost=$tipo;
	    	// 	$this->view->render($this, 'addRestaurantForm');
	    	// }
	    	$this->view->allcategory=$this->model->allcategory();
	    	$this->view->render($this, 'addProductForm');
	    }

	    function randomString($length) {
	        $str = "";
	        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	        $max = count($characters) - 1;
	        for ($i = 0; $i < $length; $i++) {
	            $rand = mt_rand(0, $max);
	            $str .= $characters[$rand];
	        }
	        return $str;
	    }


	    function addPost(){
	    	error_reporting(0);
	    	if ($this->checkSession() && $_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=htmlentities($value);
    				}
	    		}
	    		$filename=$this->uploadFileResize($_FILES['image1']);
	    	    $ext = pathinfo($_FILES['image1']['name'] , PATHINFO_EXTENSION);
	    	    $arr['image1']=$filename.".".$ext;
	    		return $this->model->createPost($arr);
	    	}
	    }
	     function uploadFileResize($file1){
	    	$handle = new Upload($file1);
	    	$newNameFile = $this->randomName();
			if ($handle->uploaded) {
			  $handle->file_new_name_body   = $newNameFile;
			  $handle->image_resize         = true;
			  $handle->image_x              = 500;
			  $handle->image_ratio_y        = true;
			  $handle->process('public/img/products/');
			  if ($handle->processed) {
			    $handle->clean();
			    return $newNameFile;
			  } else {
			    echo $handle->error;
			  }
			}
	    }
	    function moveFile($namefile){
	    	error_reporting(0);
	        $data = $namefile;
	        $extension = 'jpg';
	       
	        $target = 'public/img/products/';
	        if (is_dir($target)) {
	        }
	        else{
	            mkdir($target, 0777, true);
	        }
	        
	        // if (move_uploaded_file($_FILES['fileToUpload']["tmp_name"], $target. $filename)) {       
	        //     return $filename;
	        // }else{
	        //     return "error uploading the file";
	        // }

	        $data = substr($data, 23);
	        $data = str_replace(' ', '', $data);
	        $data = base64_decode($data);

	        //$file = '../images/'.rand() . '.png';
	        $file = $this->randomString(10).".".strtolower($extension);
	        $success = file_put_contents($target.$file, $data);

	        $data = base64_decode($data); 

	        $source_img = imagecreatefromstring($data);

	        $rotated_img = imagerotate($source_img, 90, 0); 

	        //$file = randomString(10).".".strtolower($extension);

	        $imageSave = imagejpeg($rotated_img, $file, 10);

	        imagedestroy($source_img);
	        return $file;
	    }
	    function updateProduct($restaurant){
	    	$restaurant=explode('1-', $restaurant);	    	
	    	//if ($this->checkSession() &&  is_numeric($restaurant[1])) {
	    		$this->view->descPost=$this->model->getProduct($restaurant[1]);
	    		$this->view->allcategory=$this->model->allcategory();
	    		$this->view->render($this, 'editProductForm');
	    	//}
	    }
	    function updateGallery($restaurant){
	    	$restaurant=explode('1-', $restaurant);	    	
	    	//if ($this->checkSession() &&  is_numeric($restaurant[1])) {
	    		$this->view->descPost=$this->model->getProduct($restaurant[1]);
	    		$this->view->allcategory=$this->model->allcategory();
	    		$this->view->render($this, 'editGalleryForm');
	    	//}
	    }
	    function editPost(){
	    	error_reporting(0);
	    	if (!isset($_POST['inputimage1']) || $_POST['inputimage1']=="") {
	    			unset ($_POST['inputimage1']);
	    		}
	    	if ($this->checkSession() && $_POST AND is_numeric($_POST['inputid'])) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value) && $key!='id' && $key!='imgName' && $key!='_wysihtml5_mode') {
    					$arr[$key]=$value;
    				}
	    		}
 
		    	  if ($arr['image1']){
    					$filename=$this->moveFile($arr['image1']);
		    		    $arr['image1']=$filename;
    				}

	    		 

	    		/*Comentado por Simon*/
	    		/*if ($_FILES && $_FILES['inputpost_image']['size']>0) {
    				if (is_file('public/img/images/'.$_POST['inputimgName'])) {
    					unlink('public/img/images/'.$_POST['inputimgName']);
		    		}
		    		$filename=$this->uploadFile($_FILES['inputpost_image']);
				    $arr['post_image']=$filename;
	    		}
	    		return $this->model->updateNews($_POST['inputid'],$arr);*/
	    		$this->model->updateProduct($_POST['inputid'],$arr);
	    	}
	    }
	    function editGallery(){
	    	//error_reporting();
	    	   foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=$value;
    				}
	    		}
	    		//print_r($arr);
                if (isset($_POST['inputimage2'] )){

                	$filename=$this->uploadFileResize($_FILES['inputimagefile2']);
	    	    	$ext = pathinfo($_FILES['inputimagefile2']['name'] , PATHINFO_EXTENSION);
	    	    	$arr['image2']=$filename.".".$ext;
    			}
				if (isset($_POST['inputimage3'] )){
					$filename=$this->uploadFileResize($_FILES['inputimagefile3']);
	    	    	$ext = pathinfo($_FILES['inputimagefile3']['name'] , PATHINFO_EXTENSION);
	    	    	$arr['image3']=$filename.".".$ext;
				}
				if (isset($_POST['inputimage4'] )){
					$filename=$this->uploadFileResize($_FILES['inputimagefile4']);
	    	    	$ext = pathinfo($_FILES['inputimagefile4']['name'] , PATHINFO_EXTENSION);
	    	    	$arr['image4']=$filename.".".$ext;
				}
				if (isset($_POST['inputimage5'] )){
					$filename=$this->uploadFileResize($_FILES['inputimagefile5']);
	    	    	$ext = pathinfo($_FILES['inputimagefile5']['name'] , PATHINFO_EXTENSION);
	    	    	$arr['image5']=$filename.".".$ext;
				}
	    		$this->model->updateProduct($_POST['inputid'],$arr);
	    }
	    function delNoticia(){
	    	if ($this->checkSession() && $_POST AND is_numeric($_POST['noticia'])) {
	    		$this->view->post=array('id'=>$_POST['noticia'], 'noticia'=>$_POST['txt']);
	    		$this->view->render($this, 'delPost');
	    	}
	    }
	    function delProd(){
	    	if ($_POST) {
	    		return $this->model->delProd($_POST['id']);
	    	}else{
	    		echo "No tienes los privilegios para hacer esto";
	    	}
	    }

	    function delProduct($datos){
	    	print_r($datos);
	    	$this->view->datos=$datos;
	    	$this->view->render($this, 'delProd');
	    	 
	    	/*if ($_POST AND is_numeric($_POST['product'])) {
	    		$this->view->post=array('id'=>$_POST['product'], 'product'=>$_POST['txt']);
	    		$this->view->render($this, 'delPost');
	    	}*/
	    }
	    function deletingProduct($datos){

	    	print_r($_POST);
	    }
	    function delPost(){
	    	if ($_POST AND is_numeric($_POST['inputpost_section'])) {
	    		$descPost=$this->model->newsDetails($_POST['inputpost_section']);
	    		if (is_numeric($this->model->delPost($_POST['inputpost_section']))) {
		    		if (is_file('public/img/images/'.$descPost[0]['post_image'])) {
	    					if (unlink('public/img/images/'.$descPost[0]['post_image'])) {
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
							$target = 'public/img/products/';
							
							if (is_dir($target)) {
							}
							else{
								mkdir($target, 0777, true);
							}
				        	$filename = $section.$this->randomName().".".strtolower($extension);
				        	if (move_uploaded_file($_FILES['inputpost_image']["tmp_name"], $target. $filename)) {
				        		return $filename;   
				        	}else {
				        		echo "No se pudo subir la Imagen";
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
	    		return true;
	    		// echo '<script languaje="javascript">window.location.href = "'.URL.'";</script>';
	    	}
	    }
	    function destroySession(){
	 		Session::destroy();
	 		header("Location: ".URL);
	 	}
	}
?>