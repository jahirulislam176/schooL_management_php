<?php
require 'db.php';

$user_id = $_GET['id'];




$delete_query = "DELETE FROM notice WHERE id=$user_id";
$result = mysqli_query($db_connection,$delete_query);
header("location:notice.php");
?>
