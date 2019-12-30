<?php
$myemail="wakoderenu@gmail.com";
$mypass="123";
if(isset($_POST['login']))
{
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $rem=$_POST['rem'];
 if($email== $myemail and $pass== $mypass)
 {
    //$rem=$_POST['rem'];
    if(isset($_POST['rem']))
    {
        //setcookie('email',$email,time()+60*60*7);
        session_start();
        $_SESSION['email']=$email;
        header("location: welcome2.php");
    }
    
 }
 else{
     echo"email is invalid";
 }
}
else
header("location: login.html");
?>