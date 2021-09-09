<?php
session_start();
require 'db.php';

$icon =$_POST['icon1'].','.$_POST['icon2'];
$notice = $_POST['notice'];
$date = $_POST['date'];
$status = $_POST['status'];
//print_r($_POST);
//$insert_query = "INSERT INTO department( title,info,icon,status ) VALUES ('$title','$info','$icon',$status')";

$insert_query="INSERT INTO notice(icon,notice,date,status) VALUES ('$icon','$notice','$date','$status')";


$result = mysqli_query($db_connection, $insert_query);
$_SESSION['success'] = "Notice  Succesfully Added!";
header('location:add_notice.php');
?>
