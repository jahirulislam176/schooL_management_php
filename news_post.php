<?php
require 'db.php';

$news=$_POST['news'];
$insert_query="INSERT INTO news_l (news) VALUES ('$news')";
$result=  mysqli_query($db_connection, $insert_query);
header('location:add_news.php');
?>
