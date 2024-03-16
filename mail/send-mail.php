<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$Mobile = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

try{
	//$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'mafidul.peindia@gmail.com'; // Gmail address which you want to use as STMP server//
	$mail->Password = 'wifugpjsqtbzxawa';
	$mail->SMTPSecure = 'tls';
	$mail->Port = '587';

	$mail->setFrom('mafidul.peindia@gmail.com'); // Gmail address which you want to use as STMP server//
	$mail->addAddress('mafidul.peindia@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = "Contact Us From Jibika Finance";
	$mail->Body = "<h3> Name : $name <br> Mobile Number : $Mobile <br> Email ID : $email <br> Subject : $subject  <br> Message : $message</h3>";


	$mail->send();
	//$alert ='<div class="alert-success"> <span> Registration Successfully ! Thank you for Contacting Us. </span> </div>';
	$_SESSION['status'] = "Thank you for contact us, our team will contact with you very soon";
	$_SESSION['status_code'] = "success";
}catch (Exception $e){
	//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
	$_SESSION['status'] = "Registration Not Successfull ! Plaese try again";
	$_SESSION['status_code'] = "success";
}
}

?>