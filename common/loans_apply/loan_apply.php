<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

//$alert = '';

if (isset($_POST['form_submit'])) {
	$loanamount = $_POST['loanamount'];
	$income = $_POST['income'];
	$purposeloan = $_POST['purposeloan'];
	$loanmonths = $_POST['loanmonths'];
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$email = $_POST['email'];
	$birthdate = $_POST['birthdate'];
	$phone = $_POST['phone'];
	$pcn = $_POST['pcn'];
	$acn = $_POST['acn'];
	$vcn = $_POST['vcn'];
	$ban = $_POST['ban'];
	$ifsc = $_POST['ifsc'];
	$bnb = $_POST['bnb'];
	$gender = $_POST['gender'];
	$category = $_POST['category'];
	$Qualification = $_POST['Qualification'];
	$martialstatus = $_POST['martialstatus'];
	$spname = $_POST['spname'];
	$houseno = $_POST['houseno'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pin = $_POST['pin'];
	$shopname = $_POST['shopname'];
	$tlnumber = $_POST['tlnumber'];
	$btype = $_POST['btype'];
	$baddress = $_POST['baddress'];
	$bmobilen = $_POST['bmobilen'];
	$bemailid = $_POST['bemailid'];
	$declaration = $_POST['declaration'];

	$attachment = $_FILES['pcimage']['tmp_name'];
	$attachment1 = $_FILES['acimage']['tmp_name'];
	$attachment2 = $_FILES['vimage']['tmp_name'];
	$attachment3 = $_FILES['bpimage']['tmp_name'];
	$attachment4 = $_FILES['trlimage']['tmp_name'];
	$attachment5 = $_FILES['spoimage']['tmp_name'];
	$attachment6 = $_FILES['ypimage']['tmp_name'];
	$attachment7 = $_FILES['simage']['tmp_name'];

	$html = "	<h3 align='center'> Loan Application Details </h3>
				<table border='1' width='100%' cellpadding='5' cellspacing='5'>
					<tr>
						<th width='30%'> Loan Amount :</th>
						<td width='70%'> $loanamount </td>
					</tr>
					<tr>
						<th width='30%' > Monthly Income : </th>
						<td width='70%'> $income  </td>
					</tr>
					<tr>
						<th width='30%'> Purpose of Loan : </th>
						<td width='70%'> $purposeloan  </td>
					</tr>
					<tr>
						<th width='30%'> Loan Months : </th>
						<td width='70%'>$loanmonths </td>
					</tr>
					<tr>
						<th width='30%'> Your Name : </th>
						<td width='70%'>$name  </td>
					</tr>
					<tr>
						<th width='30%'> Father Name : </th>
						<td width='70%'>$fname </td>
					</tr>
					<tr>
						<th width='30%'> Mother Name : </th>
						<td width='70%'> $mname</td>
					</tr>
					<tr>
						<th width='30%'> Email Id : </th>
						<td width='70%'> $email </td>
					</tr>
					<tr>
						<th width='30%'> Birth Date : </th>
						<td width='70%'> $birthdate </td>
					</tr>
					<tr>
						<th width='30%'> Mobile Number : </th>
						<td width='70%'> $phone </td>
					</tr>
					<tr>
						<th width='30%'> Pan Card Number :  </th>
						<td width='70%'> $pcn </td>
					</tr>
					<tr>
						<th width='30%'> Mobile Number : </th>
						<td width='70%'> $phone </td>
					</tr>
					<tr>
						<th width='30%'> Aadhaar Card Number : </th>
						<td width='70%'> $acn </td>
					</tr>
					<tr>
						<th width='30%'> Voter Card Number : </th>
						<td width='70%'> $vcn  </td>
					</tr>
					<tr>
						<th width='30%'> Bank Account Number : </th>
						<td width='70%'> $ban </td>
					</tr>
					<tr>
						<th width='30%'> IFSC Code : </th>
						<td width='70%'> $ifsc </td>
					</tr>
					<tr>
						<th width='30%'> Bank Name & Branch : </th>
						<td width='70%'> $bnb</td>
					</tr>
					<tr>
						<th width='30%'> Gender : </th>
						<td width='70%'> $gender </td>
					</tr>
					<tr>
						<th width='30%'> Category : </th>
						<td width='70%'> $category </td>
					</tr>
					<tr>
						<th width='30%'> Qualification  : </th>
						<td width='70%'> $Qualification </td>
					</tr>
					<tr>
						<th width='30%'> Marital Status : </th>
						<td width='70%'> $martialstatus </td>
					</tr>
					<tr>
						<th width='30%'> Spose Name : </th>
						<td width='70%'> $spname </td>
					</tr>
					<tr>
						<th width='30%'> House No/Name : </th>
						<td width='70%'> $houseno </td>
					</tr>
					<tr>
						<th width='30%'> Street  : </th>
						<td width='70%'> $street </td>
					</tr>
					<tr>
						<th width='30%'> City  : </th>
						<td width='70%'>  $city </td>
					</tr>
					<tr>
						<th width='30%'> State : </th>
						<td width='70%'> $state </td>
					</tr>
					<tr>
						<th width='30%'> PIN Code : </th>
						<td width='70%'> $pin </td>
					</tr>
					<tr>
						<th width='30%'> Shop Name : </th>
						<td width='70%'> $shopname </td>
					</tr>
					<tr>
						<th width='30%'> Trade License Number : </th>
						<td width='70%'> $tlnumber </td>
					</tr>
					<tr>
						<th width='30%'> Business Type : </th>
						<td width='70%'> $btype </td>
					</tr>
					<tr>
						<th width='30%'> Business Address : </th>
						<td width='70%'> $baddress </td>
					</tr>
					<tr>
						<th width='30%'> Business Mobile Number : </th>
						<td width='70%'> $bmobilen </td>
					</tr>
					<tr>
						<th width='30%'> Business Email Id : </th>
						<td width='70%'> $bemailid </td>
					</tr>
			</table>";

	try {
		//$mail->isSMTP();
		$mail->Host = 'smtp.hostinger.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'support@nofinofinance.com'; // Gmail address which you want to use as STMP server//
		$mail->Password = '#India@123';
		$mail->SMTPSecure = 'ssl'; 
		$mail->Port = '465';

		$mail->setFrom('support@nofinofinance.com', '(LOAN) Nofino Rural Finance'); // Gmail address which you want to use as STMP server//
		$mail->addAddress('support@nofinofinance.com');
		$mail->addCC($email, $name);

		$mail->addAttachment($attachment, $_FILES['pcimage']['name']);    // Optional name
		$mail->addAttachment($attachment1, $_FILES['acimage']['name']);    // Optional name
		$mail->addAttachment($attachment2, $_FILES['vimage']['name']);    // Optional name
		$mail->addAttachment($attachment3, $_FILES['bpimage']['name']);    // Optional name
		$mail->addAttachment($attachment4, $_FILES['trlimage']['name']);    // Optional name
		$mail->addAttachment($attachment5, $_FILES['spoimage']['name']);    // Optional name
		$mail->addAttachment($attachment6, $_FILES['ypimage']['name']);    // Optional name
		$mail->addAttachment($attachment7, $_FILES['simage']['name']);    // Optional name

		$mail->isHTML(true);
		$mail->Subject = "Loan Application Request (NFRF)";
		$mail->Body = $html;
		$mail->SMTPOptions = array('ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => false
		));

		$mail->send();
		//$alert ='<div class="alert-success"> <span> Registration Successfully ! Thank you for Contacting Us. </span> </div>';
		$_SESSION['status'] = "Loan Application Request Successfully ! Our team will contact with you very soon";
		$_SESSION['status_code'] = "success";
	} catch (Exception $e) {
		//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
		$_SESSION['status'] = "Loan Application Request Not Successfull ! Plaese try again";
		$_SESSION['status_code'] = "warning";
	}
}
