<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


if(isset($_POST["onsubmit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   


$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();										 
	$mail->Host	 = ' smtp.gmail.com;';				 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'dev.cespl@gmail.com';				 
	$mail->Password = 'rumxmscbafsxzzhf';					 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('dev.cespl@gmail.com', 'Name');		 
	$mail->addAddress('dev7.cespl@gmail.com');
	$mail->addAddress('dev7.cespl@gmail.com', 'Name');
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Subject';
	$mail->Body =   $name. $email.$subject. $message ;
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
