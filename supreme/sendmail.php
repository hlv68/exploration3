<?php
	error_reporting(0);
	require_once "Smtp.class.php";
	$smtpserver = "smtp.163.com";
	$smtpserverport =25;
	$smtpusermail = "joyxu39@163.com";
	$smtpemailto = $_POST['email'];
	$smtpuser = "joyxu39@163.com";
	$smtppass = "Aa123456";
	$mailtitle = "Come form ".$_POST['name'];
	$mailcontent = $_POST['message'];
	$mailtype = "HTML";
	$smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	$smtp->debug = false;
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

	if($state == ""){
		echo json_encode('email error?!');exit;
	}else{
		echo json_encode("Congratulations! Mail sent successfully!");exit;
	}
?>
