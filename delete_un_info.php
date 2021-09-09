<?php
require 'db.php';
$id=$_GET['id'];
$delete="DELETE  FROM un_info WHERE id=$id";
$result=mysqli_query($db_connection,$delete);
header('location:un_info.php');

?>