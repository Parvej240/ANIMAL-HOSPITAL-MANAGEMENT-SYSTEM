<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ab98455d75c199';                     // SMTP username
    $mail->Password   = 'dcaabcecb0e36b';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sub = $_POST['sub'];
        $msg = $_POST['msg'];
        if(empty($name) || empty($email) || empty($sub) || empty($msg)){
          echo "Please Fillup all Fields";
        }else{
          //Recipients
    $mail->setFrom($email, 'Mailer');
    $mail->addAddress('parjav@mail.com');     // Add a recipient

    $mail->addReplyTo('Noreply@parjav.com', 'Contact');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $sub;
    $mail->Body    = $msg;


    $mail->send();
    if($mail){
        header("Location: contact.php?success=true");
    }else {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
        }
      }
   
