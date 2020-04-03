<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'panCMS8@gmail.com';          // SMTP username
            $mail->Password = 'research2CMS'; // SMTP password
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                          // TCP port to connect to

            $mail->setFrom('research@noreply.com', 'research');

            $mail->isHTML(true);  // Set email format to HTML
            $bodyContent = '<p>Someone called '.$name.' just contacted me. <br>
            Their message said: <br> '.$message.'<br> If you want to contact them back email them at '.$email.'</p>';


            $mail->Subject = 'Contact From your Portfolio Website';
            $mail->addAddress('guilhermebueeno6@gmail.com');   // Add a recipient
            $mail->Body    = $bodyContent;

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
                
            }
?>