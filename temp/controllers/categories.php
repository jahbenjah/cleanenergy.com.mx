<?php
	class Categories extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
	    	$this->view->categories=$this->model->categories();
	    	$this->view->render($this, 'index');    	
	    }
	    function addCategoriesForm(){
	    	 $this->view->render($this,'addCategoriesForm');
	    }
	    function registeringCat(){
	    	//alert('llegue aquyi');
			 if ($_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=htmlentities($value);
    				}
	    		}
	    		$filename=$this->moveFile($arr['image1']);
		    	$arr['image1']=$filename;

	    		return $this->model->createAccount($arr);
	    	}
	    }//function
        function delCat(){
	    	if (Session::getValue('type')==1 && $_POST) {
	    		return $this->model->delCat($_POST['id']);
	    	}else{
	    		echo "No tienes los privilegios para hacer esto";
	    	}
	    }
	    function updateCategories($categories){
	    	$categories=explode('1-', $categories);	    	
	    	//if ($this->checkSession() &&  is_numeric($restaurant[1])) {
	    		$this->view->descPost=$this->model->getCategories($categories[1]);
	    		$this->view->render($this, 'editCategoriesForm');
	    	//}
	    }
	    function editPost(){
	    	error_reporting(0);
	    	if ($_POST AND is_numeric($_POST['inputid'])) {
	    		if (!isset($_POST['inputimage1']) || $_POST['inputimage1']=="") {
	    			unset ($_POST['inputimage1']);
	    		}
	    		 	 
	    		foreach ($_POST as $key => $value) {

	    			$key=str_replace('input', '', $key);

    				if (!empty($value) && $key!='id' && $key!='imgName' && $key!='_wysihtml5_mode') {
    					if ($_POST['image1']!="") {
    						 $arr[$key]=$value;
    					}
    					$arr[$key]=$value;
    				}
    				if ($arr['image1']){
    					$filename=$this->moveFile($arr['image1']);
		    		    $arr['image1']=$filename;
    				}
    				

	    		}
 
	    		
	    		$this->model->updateCategories($_POST['inputid'],$arr);
	    	}
	    }
        function addPost(){
	    	//error_reporting(0);
	    	if ($_POST) {
	    		foreach ($_POST as $key => $value) {
	    			$key=str_replace('input', '', $key);
    				if (!empty($value)) {
    					$arr[$key]=htmlentities($value);
    				}
	    		}
	    		$filename=$this->moveFile($arr['image1']);
		    	$arr['image1']=$filename;
	    		return $this->model->createAccount($arr);
	    	}
	    }

	    function detalles($id){
	    	$this->view->allcategory=$this->model->allcategory();
	    	 $this->view->newsDetails=$this->model->newsDetails($id);
	    	 // $this->view->news=$this->model->news();
	    	// $this->view->banner=$this->model->banner();
	    	// $this->view->bannerCarousel=$this->model->bannerCarousel();
	    	$this->view->render($this, 'detalles');    	
	    }
	    function addRestaurantForm (){
	    	$this->model->news();
	    	$this->view->render($this,'addRestaurantForm');
	    }
	    function category($id){
	    	$this->view->allcategory=$this->model->allcategory();
	    	$this->view->pbycategory=$this->model->pbycategory($id);
	    	$this->view->render($this,'category');
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
	    function moveFile($namefile){
	    	error_reporting(0);
	        $data = $namefile;
	        $extension = 'png';
	       
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
	}
?>