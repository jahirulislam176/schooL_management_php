<?php
require 'db.php';
$id=$_GET['id'];
$delete_query="DELETE  FROM principal WHERE id=$id";
$result=  mysqli_query($db_connection, $delete_query);
header('location:principal.php');



?>