<?php
require 'db.php';
$id=$_GET['id'];
$delete="DELETE FROM news_l WHERE id=$id";
$result=  mysqli_query($db_connection, $delete);
header('location:news.php');
?>
