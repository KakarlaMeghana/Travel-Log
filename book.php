<?php 
include 'index.php';
include 'Register.php';

if(isset($_POST['book'])){
    if($_SESSION['login']){
        $_SESSION['date'] =$_POST['date'];
        $_SESSION['place']=$_POST['place'];
        echo $_SESSION['date']. " ". $_SESSION['place'];
        // echo "<script type='text/javascript'>
        // location.href='tripdetails1.php';</script>";
        
    }
    else{
        echo "<script type='text/javascript'>
        alert('SignIn Required to Book Your Trip');
        location.href='signup.html';</script>";
        
    }
}
?>