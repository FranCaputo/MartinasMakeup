<?php

if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	

$to = 'francocaputo@hotmail.es'; 
$email_subject = "Consulta desde Martina's Makeup de:  $name";
$email_body = "Recibiste un mensaje del formulario de contacto de tu página.\n\n"."Acá están los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@martinasmakeup.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

