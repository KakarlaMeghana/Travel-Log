<?php
include 'index.php';
use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['message'];
echo $email." ".$name." ".$msg;
if(isset($_POST['contactus'])){
$sql="INSERT INTO contact(UNAME,EMAIL,MSG) VALUES('$name','$email','$msg')";
$query=mysqli_query($con,$sql);
$mail = new PHPMailer(true);
        try {
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'maggisrkr@gmail.com';                     //SMTP username
            $mail->Password   = 'vavkzdopwctavurl';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->setFrom($email, $name);
            $mail->addAddress('cammcamma4@gmail.com', 'TRAVEL LOG');     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'ISSUE OF '.$name;
            $mail->Body    = $msg;
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
$mail1 = new PHPMailer(true);
        // auto Relply
        try {
            $mail1->isSMTP();                                            //Send using SMTP
            $mail1->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail1->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail1->Username   = 'maggisrkr@gmail.com';                     //SMTP username
            $mail1->Password   = 'vavkzdopwctavurl';                               //SMTP password
            $mail1->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail1->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail1->setFrom('cammcamma4@gmail.com','TRAVEL LOG');
            $mail1->addAddress($email, $uname);     //Add a recipient
            $mail1->isHTML(true);                                  //Set email format to HTML
            $mail1->Subject = 'THANKS FOR CONTACTING US '.$name;
            $mail1->Body    = 'HELLO '.$name.'<br/>Thank you so much for reaching out! This auto-reply is just to let you know…<br/>
            We received your email and will get back to you as soon as possible. During 10:00AM to 05:00PM that’s usually within a couple of hours. Evenings and weekends may take us a little bit longer.<br/>If you have any additional information that you think will help us to assist you,<br/> please feel free to reply to this email.<br/>

            We look forward to chatting soon!<br/>
            
            Cheers,<br/><br/><b>TRAVEL LOG</b>';
            // $mail->AltBody = $msg;
            $mail1->send();
            echo 'Message has been sent';
            echo '<script type="text/JavaScript"> 
        location.href = "http://localhost/travel-log/contact.html";
        </script>';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
}
?>