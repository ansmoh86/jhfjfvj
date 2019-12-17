<?php

require '../wp-content/themes/industrial/formassets/PHPMailer-master/src/PHPMailer.php';
require '../wp-content/themes/industrial/formassets/PHPMailer-master/src/SMTP.php';
require '../wp-content/themes/industrial/formassets/PHPMailer-master/src/Exception.php';

// Instantiation and passing `true` enables exceptions
$mail = new \PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 3;
 
    $mail->Host = 'smtp.postmarkapp.com'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'e23e998c-8b15-4ed0-a7b1-d639cf255802';
    $mail->Password = 'e23e998c-8b15-4ed0-a7b1-d639cf255802'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 25;

    //Recipients
    $mail->setFrom('Support@evisa-esta.us.com', 'eVisa ESTA');
    $mail->addAddress($remail, $fname);     // Add a recipient
    $mail->addReplyTo('Support@evisa-esta.us.com', 'eVisa ESTA');

    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'eVisa Application Approved!';
    //$htmlContent = file_get_contents("wp-content/themes/industrial/formassets/emailtemplate.php");
    ob_start();
    include "completed-email-template.php";
    $htmlContent = ob_get_contents();
    ob_end_clean();
    
    $mail->Body    = $htmlContent;
    $mail->AltBody = '';

    if($mail->send()){
    echo 'Message has been sent to '.$remail.'';
    }else{
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>