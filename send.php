<?php
    $msg = "";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/Exception.php";
	include_once "PHPMailer/SMTP.php";

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$message = $_POST['message'];

		

		$mail = new PHPMailer(true);

		//if we want to send via SMTP
		$mail->Host = "smtp.gmail.com";
		//$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Username = "sqlscreenshot@gmail.com";
		$mail->Password = "tronisshit";
		$mail->SMTPSecure = "ssl"; //TLS
		$mail->Port = 465; //587

		$mail->addAddress('dsouradeep2@gmail.com');
		$mail->setFrom($email);
		$mail->isHTML(true);
		$mail->Body = $message;

		if ($mail->send())
		    $msg = "Your email has been sent, thank you!";
		else
		    $msg = "Please try again!";

		
	}
?>