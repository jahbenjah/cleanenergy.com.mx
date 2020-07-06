<?php
// Check for empty fields
if(empty($_POST['contact_name'])  		||
   empty($_POST['contact_email']) 		||
   empty($_POST['contact_message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No se han dado datos!";
	return false;
   }
	
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$message = $_POST['contact_message'];
	
// Create the email and send the message
//$to = 'afernandez@alexsus.com.mx';
$to = 'alex@gixdigital.com';
$email_subject = "Formulario de Contacto PALAFOXNOTICIAS.COM de:  $name";
$email_body = "Mensaje de contacto de PALAFOXNOTICIAS.COM .\n\n"."Aqui estan los datos:\n\Nombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@palafoxnoticias.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo 'Pronto nos pondremos en contacto contigo!';
return true;			
?>