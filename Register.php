<?php
include 'index.php';
use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$otp = 0;
session_start();
if(!isset($_SESSION["login"])){
    $_SESSION["email"] = '';
    $_SESSION["uname"] = '';
    $_SESSION['date'] = '';
    $_SESSION['place'] = '';
    $_SESSION['persons'] = '';
    $_SESSION['login'] = FALSE;
}
if(isset($_POST['signup'])){
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pwds = $_POST['pwd'];
    $res = "SELECT EMAIL FROM register WHERE EMAIL='".$email."'";
    $query = mysqli_query($con,$res);
    echo mysqli_num_rows($query);
    if(mysqli_num_rows($query)==0){
        $sql = "INSERT INTO register(USERNAME,EMAIL,PWD) VALUES('$uname','$email','$pwds')";
        mysqli_query($con,$sql);
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'maggisrkr@gmail.com';                     //SMTP username
            $mail->Password   = 'vavkzdopwctavurl';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom('cammcamma4@gmail.com', 'TRAVEL LOG');
            $mail->addAddress($email, $uname);     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'TRAVEL LOG';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        echo '<script type="text/JavaScript"> 
        location.href = "http://localhost/travel-log/loginpage.php";
        </script>';
    }
    else{
        echo '<script type="text/JavaScript"> 
        alert("Email already Exits");
        location.href = "http://localhost/travel-log/signup.html";
        </script>';
    }
}
if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $pwds = $_POST['pwd'];
    $sql = "SELECT USERNAME,EMAIL FROM register WHERE EMAIL='".$email."'AND PWD='".$pwds."'";
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_array($query);
    if($result){
        $_SESSION["email"] = $result['EMAIL'];
        $_SESSION["uname"] = $result['USERNAME'];

        $_SESSION["login"] = TRUE;
        echo '<script type="text/JavaScript"> 
        location.href = "http://localhost/travel-log/home.php";
        </script>';
    }
    else{
        
        echo '<script type="text/JavaScript"> 
        alert("Invalid EmailId or Password");
        location.href = "http://localhost/travel-log/loginpage.php";
        </script>';

    }

}
    if(isset($_POST['book'])){
        if($_SESSION['login']){
            $_SESSION['date'] =$_POST['date'];
            $_SESSION['place']=$_POST['place'];
            echo "<script type='text/javascript'>
            location.href='tripdetails1.php';</script>";
            
        }
        else{
            echo "<script type='text/javascript'>
            alert('SignIn Required to Book Your Trip');
            location.href='signup.html';</script>";
            
        }
    }

if(isset($_POST['forgetpassword'])){
    $_SESSION['email'] = $_POST['email'];
    $sql = "SELECT EMAIL FROM register WHERE EMAIL='".$email."'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query)==0){
        echo "<script type='text/javascript'>
            alert('Email Not Found. Try Again');
            location.href='forgetpassword.php';</script>";
    }
    else{
    $sql = "SELECT USERNAME FROM register WHERE EMAIL='".$email."'";
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_array($query);
    $_SESSION['OTP'] = rand(100000,999999);
    if($result){
        $uname = $result['USERNAME'];
       }
        $mail = new PHPMailer(true);
        
        try {
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'maggisrkr@gmail.com';                     //SMTP username
            $mail->Password   = 'vavkzdopwctavurl';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom('cammcamma4@gmail.com', 'TRAVEL LOG');
            $mail->addAddress($email, $uname);     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'RESET PASSWORD';
            $mail->Body    = '<center>Hello,<br/> Please use the verification code below to reset your password of TRAVEL-LOG website:<br/><b>'.$_SESSION['OTP'].'</b> <br/>If you did not request this,you can ignore this email or let us know <br/> Thanks! <br><b>Team Travel-Log</b></center>';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        echo "<script type='text/javascript'>
            location.href='OTP.php';</script>";
    }

}

if(isset($_POST['otpckeck'])){
    $enteredotp = $_POST['otp'];
    global $otp;
    if($enteredotp == $_SESSION['OTP'] ){
        echo "<script type='text/javascript'>
            location.href='updatepwd.php';</script>";
    }
    else{
        echo "<script type='text/javascript'>
            location.href='forgetpassword.php';</script>";
    }
}

    if(isset($_POST['noOfPasengers'])){
        $_SESSION['persons']=$_POST['persons'];
        echo "<script type='text/javascript'>
            location.href='pass_details.php';</script>";
    }

    if(isset($_POST['passdetails'])){
        for($x=0;$x<$_SESSION['persons'];$x++){
            $_SESSION['pass_name'][$x] = $_POST['name'][$x];
            $_SESSION['pass_gender'][$x] = $_POST['gender'.$x];
            echo "<script type='text/javascript'>
            location.href='qr.php';</script>";
        }
    }


    if(isset($_POST['qrsubmit'])){
        $email = $_SESSION['email'];
        $bname = $_POST['bname'];
        $tid = $_POST['tid'];
        $place = $_SESSION['place'];
        $DOT = $_SESSION['date'];
        $NOP = $_SESSION['persons'];
        $sql = "SELECT * FROM tours WHERE PLACE='".$_SESSION['place']."'" ;
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query)>0)    
             while($result=mysqli_fetch_array($query)){
                $amount = $result['PRICE'] * $_SESSION['persons'];
        }
        $sql = "INSERT INTO booking(email,bankname,tid,place,dateoftravel,noofpass,amount) VALUES('$email','$bname','$tid','$place','$DOT','$NOP','$amount')";
        mysqli_query($con,$sql);
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'maggisrkr@gmail.com';                     //SMTP username
            $mail->Password   = 'vavkzdopwctavurl';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom('cammcamma4@gmail.com', 'TRAVEL LOG');
            $mail->addAddress($email, $_SESSION["uname"]);     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'TRAVEL LOG';
            $mail->Body    = 'Hello '.$_SESSION["uname"].'<br/> We are Happy to let your know that we have recevied your booking to trip '.$place.' on '.$DOT.'<br/>Once Checking all the transaction details we will send you an confirmation email.<br/>For any queries contact us through our website.<br/> We are here to help you. <br/><br/> Thank You !<br/><b>Team Travel Log.<b>';
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        echo '<script type="text/JavaScript"> 
        alert("You Have Successfully Booked Your Trip..");
        location.href = "http://localhost/travel-log/home.php";
        </script>';

    }
?>