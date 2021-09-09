<?php
require 'db.php';

$user_id = $_GET['id'];

$select_query="SELECT banner_img FROM banner WHERE id=$user_id";
$select_result=  mysqli_query($db_connection, $select_query);
$after_assoc=  mysqli_fetch_assoc($select_result);
$delete_from="uploads/banner".$after_assoc['banner_img'];
unlink($delete_from);



$delete_query = "DELETE FROM banner WHERE id=$user_id";
$result = mysqli_query($db_connection,$delete_query);
header("location:banner.php");
?>
