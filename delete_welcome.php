<?php
require 'db.php';

$user_id = $_GET['id'];




$delete_query = "DELETE FROM welcome WHERE id=$user_id";
$result = mysqli_query($db_connection,$delete_query);
header("location:welcome.php");
?>



