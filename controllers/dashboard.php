<?php
	class Dashboard extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
	    	if ($this->checkSession()) {
	    		$this->view->interconexiones=$this->model->interconexiones();
	    		$this->view->render($this, 'index');
	    	}	    	
	    }
	    function autonomos(){
	    	if ($this->checkSession()) {
	    		$this->view->autonomos=$this->model->autonomos();
	    		$this->view->render($this, 'autonomos');
	    	}
	    }
	    function addProductAutonomos(){
	    	$this->view->render($this,'addProductFormAutonomos');
	    }
	    function addProductLuminarias(){
	    	$this->view->render($this,'addProductFormLuminarias');
	    }
	     function addingProductLuminarias(){
	    	error_reporting(0); //desactivar toda notificacion de error
    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=htmlentities($value);
    					//$arr[$key]=$value;
    				}
	    		}

	    		$filename=$this->uploadFileResize($_FILES['inputimage']);
	    		$ext = pathinfo($_FILES['inputimage']['name'] , PATHINFO_EXTENSION);
	    	    $arr['image']=$filename.".".$ext;
				return $this->model->addingProductLuminarias($arr);
	    }

	    function user(){
	    	if ($this->checkSession()) { 
	    		$this->view->users=$this->model->users();
	    		$this->view->render($this, 'user');
	    	}	
	    }
	    function editUser($id){
	    	if ($this->checkSession()) { 
	    		$this->view->userData=$this->model->perfil($id);
	    		$this->view->render($this, 'editUsersForm');
	    	}
	    }
	    // ************** INTERCONEXION producto ******//
	    function addBusiness(){
	    	$this->view->render($this,'addBusinessForm');
	    }
	    function addProduct(){
	    	$this->view->render($this,'addProductForm');
	    }
	    function addUsers(){
	    	$this->view->render($this,'addUsersForm');
	    }
	    function editProduct($id){
	    	if ($this->checkSession()) { 
	    		$this->view->userData=$this->model->getProduct($id);
	    		$this->view->render($this, 'editProductForm');
	    	}
	    }
	     function addingProductAutonomos(){
	    	error_reporting(0); //desactivar toda notificacion de error
    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=htmlentities($value);
    					//$arr[$key]=$value;
    				}
	    		}

	    		$filename=$this->uploadFileResize($_FILES['inputimage']);
	    		$ext = pathinfo($_FILES['inputimage']['name'] , PATHINFO_EXTENSION);
	    	    $arr['image']=$filename.".".$ext;
				return $this->model->addingProductAutonomos($arr);
	    }
	    function editProductAutonomos($id){
	    	if ($this->checkSession()) { 
	    		$this->view->userData=$this->model->getProductAutonomos($id);
	    		$this->view->render($this, 'editProductFormAutonomos');
	    	}
	    }
	    function updatingAutonomos(){
	    	error_reporting(0); //desactivar toda notificacion de error
	    	if (Session::exists() && $_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value) && $key!='id' && $key!='oldlogo') {
    					$arr[$key]=htmlentities($value);
    					//$arr[$key]=$value;
    				}
	    		}
	    		if ($_FILES && $_FILES['inputimage']['size']>0) {
					if (is_file(URL.'public/img/'.$_POST['oldlogo'])) {
						unlink(URL.'public/img/'.$_POST['oldlogo']);
		    		}
		    		$filename=$this->uploadFileResize($_FILES['inputimage']);
	    			$ext = pathinfo($_FILES['inputimage']['name'] , PATHINFO_EXTENSION);
	    	    	$arr['image']=$filename.".".$ext;
				}
	    		return $this->model->updateAutonomos($_POST['inputid'],$arr);
	    	}
	    }
	    function luminarias(){
	    	if ($this->checkSession()) {
	    		$this->view->luminarias=$this->model->luminarias();
	    		$this->view->render($this, 'luminarias');
	    	}
	    }
	    function editProductLuminarias($id){
	    	if ($this->checkSession()) { 
	    		$this->view->userData=$this->model->getProductLuminarias($id);
	    		$this->view->render($this, 'editProductFormLuminarias');
	    	}
	    }
	    function updatingLuminarias(){
	    	error_reporting(0); //desactivar toda notificacion de error
	    	if (Session::exists() && $_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value) && $key!='id' && $key!='oldlogo') {
    					$arr[$key]=htmlentities($value);
    					//$arr[$key]=$value;
    				}
	    		}
	    		if ($_FILES && $_FILES['inputimage']['size']>0) {
					if (is_file(URL.'public/img/'.$_POST['oldlogo'])) {
						unlink(URL.'public/img/'.$_POST['oldlogo']);
		    		}
		    		$filename=$this->uploadFileResize($_FILES['inputimage']);
	    			$ext = pathinfo($_FILES['inputimage']['name'] , PATHINFO_EXTENSION);
	    	    	$arr['image']=$filename.".".$ext;
				}
	    		return $this->model->updateLuminarias($_POST['inputid'],$arr);
	    	}
	    }

	    function registeringUser(){
	    	if ($_POST) {
	    		if ($this->checkEmail($_POST['inputcorreo'])) {
	    			foreach ($_POST as $key => $value) {
	    				$key=str_replace('input', '', $key);
	    				if (!empty($value) && $key!='contrasena') {
	    					$arr[$key]=$value;
	    					//
	    				}
	    			}
	    			$arr['salt']=$this->randomString(10);
	    			$arr['contrasena']=$this->encrypt($_POST['inputcontrasena'],$arr['salt']);
	    			return $this->model->createAccount($arr);
	    		}else{
	    			echo "Este correo ya esta registrado";
	    		}
	    	}
	    	//return;
	    }
	    function addingProduct(){
	    	error_reporting(0); //desactivar toda notificacion de error
    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=htmlentities($value);
    					//$arr[$key]=$value;
    				}
	    		}

	    		$filename=$this->uploadFileResize($_FILES['inputimage']);
	    		$ext = pathinfo($_FILES['inputimage']['name'] , PATHINFO_EXTENSION);
	    	    $arr['image']=$filename.".".$ext;
				return $this->model->addingProduct($arr);
	    }

	    function businessumit(){
    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=htmlentities($value);
    					//$arr[$key]=$value;
    				}
	    		}

	    		$filename=$this->uploadFileResize($_FILES['inputlogo']);
	    		$ext = pathinfo($_FILES['inputlogo']['name'] , PATHINFO_EXTENSION);
	    	    $arr['logo']=$filename.".".$ext;
				return $this->model->createBusiness($arr);
	    }
	    function delBusiness(){
	    	if (Session::getValue('type')==1 && $_POST) {
	    		if ($this->model->delBusiness($_POST['id'])) {
	    			echo 1;
	    			return;
	    		}
	    		return ;
	    	}else{
	    		echo "No tienes los privilegios para hacer esto";
	    	}
	    }
	    function checkEmail($email='', $type=''){
	    	$result=$this->model->checkEmail($email);
	 		if (count($result)==1) {
	 			if ($type=='update') {
	 				return $result[0]['id'];
	 			}else{
	 				return false;
	 			}
	 		}else{
	 			return true;
	 		}

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
		function encrypt($password, $data){
			// Set the method
		    $method = 'AES-128-CBC';
		    // Set the encryption key
		    $encryption_key = $data;
		    // Generet a random initialisation vector
		    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
		    // Define the date to be encrypted
		    // Encrypt the data
		    $encrypted = openssl_encrypt($password, $method, $encryption_key, 0, $iv);
		    // Append the vector at the end of the encrypted string
		    $encrypted = $encrypted . ':' . $iv;
		    // Explode the string using the `:` separator.
		    
            return $encrypted;

		}
		function checkPwd($password, $data){
            
			$parts = explode(':', $password);
			 
			// Set the method
		    $method = 'AES-128-CBC';
		    // Set the encryption key
		    $encryption_key = $data;
		    // Generet a random initialisation vector
		    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
		    $decrypted = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
            return $decrypted;

		}
 
	    function addPost(){
	    	//error_reporting(-1);
	    	if ($this->checkSession() && $_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=htmlentities($value);
    				}
	    		}
	    		//$filename=$this->moveFile($_FILES['image1']);
	    		//$arr['image1']=$filename;
	    		// $filename=$this->uploadFileResize($_FILES['image1']);
	    	 //    $ext = pathinfo($_FILES['image1']['name'] , PATHINFO_EXTENSION);
	    	 //    $arr['image1']=$filename.".".$ext;
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
			  $handle->process('public/img/');
			  if ($handle->processed) {
			    $handle->clean();
			    return $newNameFile;
			  } else {
			    echo $handle->error;
			  }
			}
	    }


	    function updatingUser(){
	    	if (Session::exists() && $_POST) {
	    		if ($this->checkEmail($_POST['inputcorreo'], 'update')) {
		    		foreach ($_POST as $key => $value) {
		    			$key=str_replace('input', '', $key);
	    				if (!empty($value) && $key!='contrasena') {
	    					$arr[$key]=$value;
	    				}
		    		}
		    		if (strlen($_POST['inputcontrasena'])>0) {
		    			$arr['salt']=$this->randomString(10);
		    			$arr['contrasena']=$this->encrypt($arr['salt'],$_POST['inputcontrasena']);
		    		}
		    		//echo 'asdfsdf sdfs';
	    			return $this->model->updateUser($_POST['inputid'],$arr);
	    		}elseif ($this->checkEmail($_POST['inputcorreo'])) {

		    		foreach ($_POST as $key => $value) {
		    			$key=str_replace('input', '', $key);
	    				if (!empty($value) && $key!='contrasena') {
	    					$arr[$key]=$value;
	    				}
		    		}
		    		if (strlen($_POST['inputcontrasena'])>0) {
		    			$arr['salt']=$this->randomString(10);
		    			$arr['contrasena']=$this->encrypt($arr['salt'],$_POST['inputcontrasena']);
		    		}
	    			return $this->model->updateUser(Session::getValue('id'),$arr);
	    		}else{
	    			echo "El correo ya esta registrado";
	    		}
	    	}
	    }
	    function updatingBusiness(){
	    	error_reporting(0); //desactivar toda notificacion de error
	    	if (Session::exists() && $_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value) && $key!='id' && $key!='oldlogo') {
    					$arr[$key]=htmlentities($value);
    					//$arr[$key]=$value;
    				}
	    		}
	    		if ($_FILES && $_FILES['inputimage']['size']>0) {
					if (is_file(URL.'public/img/'.$_POST['oldlogo'])) {
						unlink(URL.'public/img/'.$_POST['oldlogo']);
		    		}
		    		$filename=$this->uploadFileResize($_FILES['inputimage']);
	    			$ext = pathinfo($_FILES['inputimage']['name'] , PATHINFO_EXTENSION);
	    	    	$arr['image']=$filename.".".$ext;
				}
	    		return $this->model->updateBusiness($_POST['inputid'],$arr);
	    	}
	    }
	    function cargarImagen(){
	    	if (isset($_POST['btnSubmit'])) {
	    		$uploadfile = $_FILES["uploadImage"]["tmp_name"];
			    $folderRuta = "public/img/products/".$_POST['inputId'].'/';
			    if (is_dir($folderRuta)) {
			        }
			        else{
			            mkdir($folderRuta, 0777, true);
			        }
			    if (! is_writable($folderRuta) || ! is_dir($folderRuta)) {
			        echo "error";
			        exit();
			    }
			    // You should also check filesize here. 
			    if ($_FILES['uploadImage']['size'] > 8000000) {
			        throw new RuntimeException('Exceeded filesize limit.');
			    }

			    if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $folderRuta . $_FILES["uploadImage"]["name"])) {
			        echo '<img src="'.URL. $folderRuta . "" . $_FILES["uploadImage"]["name"] . '">';
			        exit();
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
	    		return false;
	    		echo '<script languaje="javascript">window.location.href = "'.URL.'";</script>';
	    	}
	    }
	    function destroySession(){
	 		Session::destroy();
	 		header("Location: ".URL);
	 	}
	}
?>