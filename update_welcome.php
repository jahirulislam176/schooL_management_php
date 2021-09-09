<?php

require 'db.php';

$user_id = $_POST['id'];
$title = $_POST['title'];
$desp = $_POST['desp'];
$btn=$_POST['btn'];



$update = "UPDATE welcome SET title='$title',desp='$desp' btn='$btn' WHERE id=$user_id";
$result = mysqli_query($db_connection,$update);
header('location:welcome.php');

    




?>



