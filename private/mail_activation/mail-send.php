<?php
require('phpmailer/class.phpmailer.php');


function mail_send(){

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port     = 587;  
	$mail->Username = "vastcrownsolution@gmail.com";
	$mail->Password = "Vastcrown@123";
	$mail->Host     = "smtp.gmail.com";
	$mail->Mailer   = "smtp";
	$mail->SetFrom("vastcrownsolution@gmail.com", "Uniseverything");
	$mail->AddAddress($_POST["email"], $_POST["fullname"]);
	$mail->Subject = "Welcome to Uniseverything Online Store";
	$mail->WordWrap   = 80;
	$mail->MsgHTML($_SESSION['message']);

	
	
	$mail->IsHTML(true);
	
	if(!$mail->Send()) {
		$_SESSION['error'] = "Error in Activating your Account.";
		redirect_to(url_for('/signup.php'));
	} else {
		header('location: ../public/success.php');
	}
}
	
?>
