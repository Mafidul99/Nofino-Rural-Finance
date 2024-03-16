<?php
include('config/database.nic.php');
$msg="";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$phone=mysqli_real_escape_string($con,$_POST['phone']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	
	mysqli_query($con,"insert into contact_us(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')");
	
	$msg="Thanks message ! Our team will contact with you very soon";

		
		include('phpmailer/PHPMailerAutoload.php');	
		
			$mail = new PHPMailer(true);	
			$mail->isSMTP();			
			$mail->Host = "smtp.hostinger.com";
			$mail->SMTPAuth = true;
			$mail->Username = "support@nofinofinance.com"; 
			$mail->Password = "#India@123";
			$mail->SMTPSecure = "ssl";
			$mail->Port = 465;

			$mail->setFrom("support@nofinofinance.com", "Contact Nofino Rural Finance"); 
			$mail->addAddress("support@nofinofinance.com");
			$mail->isHTML(true);
			$mail->Subject = "Contact Us Request (NFRF)";
			$mail->Body = "<h3> 								
								
								Your Name : $name <br>
								Email Id : $email <br>
								Mobile Number : $phone <br>
								Subject : $subject <br>
								Message : $message <br>

							</h3>";
			$mail->SMTPOptions=array('ssl'=>array(
				'verify_peer'=>false,
				'verify_peer_name'=>false,
				'allow_self_signed'=>false
			));		

		if($mail->send()){

			//$alert ='<div class="alert-success"> <span> Registration Successfully ! Thank you for Contacting Us. </span> </div>';
			//$_SESSION['status'] = "Loan Application Request Successfully ! Our team will contact with you very soon";
			//$_SESSION['status_code'] = "success";
		}
		else {
			//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
			//$_SESSION['status'] = "Loan Application Request Not Successfull ! Plaese try again";
			//$_SESSION['status_code'] = "success";
		}
		echo $msg;
	}
?>