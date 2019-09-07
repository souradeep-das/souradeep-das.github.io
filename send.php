<?php
    if(isset($_POST['submit'])) {
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port =587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
    
        $mail->Username='sqlscreenshot@gmail.com';
        $mail->Password='tronisshit';
    
        $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress('dsouradeep2@gmail.com');
        $mail->addReplyTo($_POST['email'],$_POST['name']);
    
        $mail->isHTML(true);
        $mail->Subject = 'PHP Mailer Subject';
        $mail->Body='<h1 align=center>Name:'.$_POST['name'].'</h1>';
    
        if(!$mail->send()){
            echo "Message could not be sent!";
        }
        else {
            echo "Message has been sent!";
        }
    }
    

    ?>