<?php
	class User extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }
	    function usuarios($value=''){
	    	if (Session::getValue('tipo')==1) {
	    		$this->view->users=$this->model->usuarios();
	    		$this->view->render($this, 'listadoUsuarios');
	    	}
	    	else{
	    		header('location: '.URL);
	    	}
	    }
	    function index(){
	    	$this->view->users=$this->model->users();
	    	$this->view->render($this, 'index');
	    }
	    function login(){
	    	$this->view->render($this,'userLogin');
	    }
	    function tryLogin(){
	    	if ($_POST) {
	    		$result=$this->model->login($_POST['inputcorreo']);
	    		if (isset($result[0]['correo'])) {
		    		$rPwd= $this->checkPwd($result[0]['contrasena'],$result[0]['salt']);
		 			$pwd =rtrim($rPwd);
		 			//$var=NULL;
			        if ($pwd == $_POST['inputcontrasena']) {
			        	$result=$result[0];
			        	foreach ($result as $key => $value) {
			        		if ($key=='contrasena' || $key=='salt') {			        			

			        		}else{
				    			$this->createSession($key,$value);
			        		}
				    	}
						echo 1;					}
					else {
						echo "Usuario o contraseña invalida";
					}
		    	}else{
		    		echo "Correo no registrado".$_POST['inputcorreo'];
		    	}
	    	}
	    }
	    function profile(){
	    	if (Session::exists()) {
	    		$this->view->perfil=$this->model->perfil(Session::getValue('id'));
	    		$this->view->render($this,'perfilUserForm');
	    	}
	    }
	    function editUser($id){
	    	$this->view->userData=$this->model->perfil($id);
	    	$this->view->render($this,'editUser');
	    }
	     function editUserForm(){
	    	// if ($this->checkSession() && Session::getValue('type')==1 && $_POST) {
	    	 	$this->view->userData=$this->model->perfil($_POST['id']);
	    	// 	$this->view->render($this,'userUpdtateForm');
	    	// }
	    	$this->view->render($this,'userUpdtateForm');
	    }
	    function updatingUser(){
	    	if (Session::exists() && $_POST) {
	    		if ($this->checkEmail($_POST['inputcorreo'], 'update')==Session::getValue('id')) {
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
	    function actualizarUser(){
	    	if (Session::exists() && $_POST) {
	    		foreach ($_POST as $key => $value) {
		    			$key=str_replace('input', '', $key);
	    				if (!empty($value) && $key!='contrasena') {
	    					$arr[$key]=$value;
	    				}
		    		}
		    		return $this->model->updateUser($_POST['inputid'],$arr);
	    	}
	    }
	    function delUser(){
	    	if (Session::getValue('type')==1 && $_POST) {
	    		return $this->model->delUser($_POST['id']);
	    	}else{
	    		echo "No tienes los privilegios para hacer esto";
	    	}
	    }
	    function userFormRegister(){
	    	$this->view->render($this,'userRegisterForm');
	    }
	    function addUserForm(){
	    	 $this->view->render($this,'addUserForm');
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
	    			// $this->model->createAccount($arr);
	    			// $arrid = $this->checkEmail($arr['correo']);
	    			// $this->createSession($arrid['id'],$arrid['type']);

	    		}else{
	    			echo "Este correo ya esta registrado";
	    		}
	    	}
	    	//return;
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
		function createSession($var, $val){
	 		Session::setValue($var, $val);
	 	}	 
	 	function destroySession(){
	 		Session::destroy();
	 		header("Location: ".URL);
	 	}
	}
?>