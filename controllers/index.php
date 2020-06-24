<?php
	class Index extends Controller
	{
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function index(){
	    	$this->view->render($this, 'index');
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
	 	function contactform(){

			$email = $_POST['inputemail'];
			$phone = $_POST['inputphone'];
			$name = $_POST['inputname'];
			$message = $_POST['inputmessage'];
 
			// After sanitization Validation is performed

			// To send HTML mail, the Content-type header must be set.
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From:' . $email. "\r\n"; // Sender's Email
			 
			$template = '<div style="padding:50px; color:white;">DATOS DEL CONTACTO :<br/><br/>'
 
			. 'Nombre :' . $name . '<br/>'
			. 'Email:' . $email . '<br/>'
			. 'Telefono:' . $phone . '<br/>'
			. 'Mensaje:' . $message . '<br/>'
 
			. '<br/>';
 
			$sendmessage = "<div style=\"background-color:#f47825; color:white;\">" . $template . "</div>";
			// Message lines should not exceed 70 characters (PHP rule), so wrap it.
			$sendmessage = wordwrap($sendmessage, 70);
			// Send mail by PHP Mail Function.
			if (mail("contacto@cleanenergy.com.mx","Contacto de mi pagina cleanenergy.com.mx", $sendmessage, $headers)) {
				echo 1;
			}else{
				echo 'Hubo un error, favor de intentar más tarde.';
			}

	 	}
	}
?>