<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'assets/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer; 
    //Server settings
    // $mail->SMTPDebug = true;                      //Enable verbose debug output
    $mail->isSMTP();                       
    $mail->Host = "smtp.gmail.com";                 //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'genevabantiad04@gmail.com';                     //SMTP username
    $mail->Password   = 'ogjczcuqhsrzpdsi';                      
    $mail->SMTPSecure = 'ssl';          //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('genevabantiad04@gmail.com', 'Bag Of Hope');
    $mail->addAddress('jcmanabo@gmail.com', 'Address Name');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 

    


    $message = "

    <html>
        <head>
            <title>Email Verification for  donor email  </title>
        </head>
        <body>
            <p>Thank you for Signing up!</p>
            <table>
                <tr>
                    <th> Donor's name\n</th><br>
                    <th>Email Verification</th>
                </tr> 
            </table>
        </body>
    </html>
    ";


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Verification';
    $mail->Body    = $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent'; 