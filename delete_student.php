<?php
require 'db.php';
$id=$_GET['id'];
$delete_query="DELETE  FROM student_area WHERE id='$id'";
$result=  mysqli_query($db_connection, $delete_query);
header('location:student.php');
?>

