<?php

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

// Instantiation and passing `true` enables exceptions
$mail = new \PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 3;
 
    $mail->Host = 'smtp.postmarkapp.com'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'f73d2f73-f2b6-476d-9515-8c60a199ba36';
    $mail->Password = 'f73d2f73-f2b6-476d-9515-8c60a199ba36'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 25;

    //Recipients
    $mail->setFrom('Support@applyvisausa.com', 'eVisa ESTA');
    $mail->addAddress($remail, $fname);     // Add a recipient
    $mail->addReplyTo('Support@applyvisausa.com', 'eVisa ESTA');

    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Application Submitted Successfully!';
    //$htmlContent = file_get_contents("wp-content/themes/industrial/formassets/emailtemplate.php");
    ob_start();
    include "wp-content/themes/industrial/formassets/emailtemplate.php";
    $htmlContent = ob_get_contents();
    ob_end_clean();
    
    $mail->Body    = $htmlContent;
    $mail->AltBody = '';

    if($mail->send()){
    echo 'Message has been sent';
    }else{
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>