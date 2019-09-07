<?php
   require 'vendor/autoload.php';

   $API_KEY = "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";
   if(isset($_POST['submit']))
   {
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $message = $_POST['message'];

	   $email = new \SendGrid\Mail\Mail(); 
	   $email->setFrom("sqlscreenshot@gmail.com", "Example User");
	   $email->setSubject("Sending with Twilio SendGrid is Fun");
	   $email->addTo("dsouradeep2@gmail.com", "Example User");
	   $email->addContent("text/plain", $message);
	//    $email->addContent(
	// 	   "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
	//    );
	   $sendgrid = new \SendGrid(getenv($API_KEY));

	   if($sendgrid->send($email))
	   {
		   echo "success";
	   }
	//    try {
	// 	   $response = $sendgrid->send($email);
	// 	   print $response->statusCode() . "\n";
	// 	   print_r($response->headers());
	// 	   print $response->body() . "\n";
	//    } catch (Exception $e) {
	// 	   echo 'Caught exception: '. $e->getMessage() ."\n";
	//    }
   }
  

?>