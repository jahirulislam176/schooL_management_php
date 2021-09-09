<?php
session_start();
require 'db.php';
$title = $_POST['title'];
$desp = $_POST['desp'];
$btn=$_POST['btn'];

$insert_query = "INSERT INTO welcome(title,desp,btn) VALUES ('$title','$desp','$btn')";
    $result = mysqli_query($db_connection, $insert_query);
    $_SESSION['success']="welcome post sent successfully";
    header("location:addwelcome.php");
  ?>


















































