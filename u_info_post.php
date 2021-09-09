<?php
require 'db.php';
$font=$_POST['font'];
$total=$_POST['total'];
$stafs=$_POST['stafs'];
$insert_query="INSERT INTO un_info (font,total,stafs) VALUES ('$font','$total','$stafs')";
$result=  mysqli_query($db_connection, $insert_query);
header('location:add_u_info.php');
?>
