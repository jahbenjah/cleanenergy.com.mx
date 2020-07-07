<?php
// Check for empty fields
if(empty($_POST['contact_name'])  		||
   empty($_POST['contact_email']) 		||
   empty($_POST['contact_message']))
   {
	echo "No se han dado datos!";
	return false;
   }
	
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$message = $_POST['contact_message'];
$phone = $_POST['contact_phone'];
	
// Create the email and send the message
$to = 'alex@gixdigital.com ';
$email_subject = "Formulario de Contacto PALAFOXNOTICIAS.COM de:  $name";
$email_body = "Mensaje de contacto de PALAFOXNOTICIAS.COM. Aqui estan los datos:. Nombre:  $name    Email:  $email_address   Telefono:  $phone   Mensaje:  $message";
$headers = "From: noreply@palafoxnoticias.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;
?>