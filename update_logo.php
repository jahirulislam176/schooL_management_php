<?php

require 'db.php';

$user_id = $_POST['id'];
$status=$_POST['status'];

if($_POST['status']==1){
    $update = "UPDATE logo SET status=2";
$result = mysqli_query($db_connection,$update);


$update = "UPDATE logo SET status='$status' WHERE id=$user_id";
$result = mysqli_query($db_connection,$update);
header('location:logo.php');

    
    
}



$update = "UPDATE logo SET status='$status' WHERE id=$user_id";
$result = mysqli_query($db_connection,$update);
header('location:logo.php');

    




?>

