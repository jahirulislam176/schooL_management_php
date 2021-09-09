<?php
require 'db.php';

$user_id = $_GET['id'];

$select_query="SELECT contact_img FROM messages WHERE id=$user_id";
$select_result=  mysqli_query($db_connection, $select_query);
$after_assoc=  mysqli_fetch_assoc($select_result);
$delete_from="uploads/".$after_assoc['contact_img'];
unlink($delete_from);



$delete_query = "DELETE FROM messages WHERE id=$user_id";
$result = mysqli_query($db_connection,$delete_query);
header("location:message_view.php");
?>
