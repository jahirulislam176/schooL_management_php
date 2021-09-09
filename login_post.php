<?php

session_start();
require 'db.php';

$email=$_POST['email'];
$password=$_POST['password'];
$select="SELECT COUNT(*) as tahsan, role,name,email,user_img FROM users_info WHERE email='$email' and password='$password'";
$result=  mysqli_query($db_connection, $select);
$after_assoc=  mysqli_fetch_assoc($result);

if($after_assoc['tahsan']==1){
    $_SESSION['abul']=1;
    $_SESSION['role']=$after_assoc['role'];
     $_SESSION['name']=$after_assoc['name'];
     $_SESSION['email']=$after_assoc['email'];
     $_SESSION['user_img']=$after_assoc['user_img'];
    setcookie('kuddus','jorina');
    header('location:message_view.php');
}
 else {
     $invalid="email or password bul ache";
     header('location:login.php?invalid='. $invalid);
}


?>
