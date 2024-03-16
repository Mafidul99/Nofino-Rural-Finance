<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

//$alert = '';

	if(isset($_POST['form_submit'])) {	
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$email=$_POST['email'];
	$birthdate=$_POST['birthdate'];
	$mobile=$_POST['mobile'];
	$pancard=$_POST['pancard'];
	$aadhaarcard=$_POST['aadhaarcard'];
	$bankcnumber=$_POST['bankcnumber'];
	$ifsc=$_POST['ifsc'];
	$bankbranch=$_POST['bankbranch'];
	$gender=$_POST['gender'];
	$qualification=$_POST['qualification'];
	$martialstatus=$_POST['martialstatus'];
	$category=$_POST['category'];
	$spname=$_POST['spname'];
	$houseno=$_POST['houseno'];
	$street=$_POST['street'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$jobes=$_POST['jobes'];
	$declaration=$_POST['declaration'];

	$attachment = $_FILES['image']['tmp_name'];
	$attachment1 = $_FILES['simage']['tmp_name'];


	$html= "<h3> 								
				
				Your Name : $name <br>
				Father Name : $fname <br>
				Mother Name : $mname <br>
				Email Id : $email <br>
				Birth Date : $birthdate <br>
				Mobile Number : $mobile <br>
				Pan Card Number : $pancard <br>
				Aadhaar Card Number : $aadhaarcard <br>
				Bank Account Number : $bankcnumber <br>
				IFSC Code : $ifsc <br>
				Bank Name & Branch : $bankbranch <br>
				Gender : $gender <br>
				Qualification  : $Qualification <br>
				Marital Status : $martialstatus <br>
				category : $category <br>
				Spose Name : $spname <br>
				House No/Name : $houseno <br>
				Street  : $street <br>
				City  : $city <br>
				State : $state <br>
				PIN Code : $pincode <br>
				jobes Name : $jobes <br>
				Declaration : $declaration <br>
			</h3>";


		try{
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'mafidul.peindia@gmail.com'; // Gmail address which you want to use as STMP server//
			$mail->Password = 'wifugpjsqtbzxawa';
			$mail->SMTPSecure = 'tls';
			$mail->Port = '587';

			$mail->setFrom('mafidul.peindia@gmail.com', 'Job Nofino Rural Finance'); // Gmail address which you want to use as STMP server//
			$mail->addAddress('mafidul.peindia@gmail.com');

			$mail->addAttachment($attachment, $_FILES['image']['name']);    // Optional name
			$mail->addAttachment($attachment1, $_FILES['simage']['name']);    // Optional name

			$mail->isHTML(true);
			$mail->Subject = "Jobes Application Request (NFRF)";
			$mail->Body = $html;
			$mail->SMTPOptions=array('ssl'=>array(
					'verify_peer'=>false,
					'verify_peer_name'=>false,
					'allow_self_signed'=>false
				));								

			$mail->send();
			//$alert ='<div class="alert-success"> <span> Registration Successfully ! Thank you for Contacting Us. </span> </div>';
			$_SESSION['status'] = "Jobes Application Request Successfully ! Our team will contact with you very soon";
			$_SESSION['status_code'] = "success";
		}catch (Exception $e){
			//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
			$_SESSION['status'] = "Jobes Application Request Not Successfull ! Plaese try again";
			$_SESSION['status_code'] = "success";
		}
	}
?>