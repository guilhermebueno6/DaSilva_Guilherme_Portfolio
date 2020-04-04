<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendEmail($name, $email, $message){


$mail = new PHPMailer(true);

            $mail->SMTPDebug = 2;
            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'tls://smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'thegsbs123@gmail.com';          // SMTP username
            $mail->Password = 'thegsbs456'; // SMTP password
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                          // TCP port to connect to

            $mail->setFrom('research@noreply.com', 'Contect Form from Portfolio');

            $mail->isHTML(true);  // Set email format to HTML
            $bodyContent = '<p>Someone called '.$name.' just contacted me. <br>
            Their message said: <br> '.$message.'<br> If you want to contact them back email them at '.$email.'</p>';


            $mail->Subject = 'Contact From your Portfolio Website';
            $mail->addAddress('guilhermebueno6@gmail.com');   // Add a recipient
            $mail->Body    = $bodyContent;

            if(!$mail->send()) {
                $mailMessage = 'Message could not be sent.';
                $mailMessage = $mailMessage.'   Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $mailMessage =  'Message has been sent';
                
            }
            return $mailMessage;
        }
?>