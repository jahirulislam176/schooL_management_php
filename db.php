<?php
$hostname='localhost';
$username='root';
$password='';
$db_name='school';
$db_connection=  mysqli_connect($hostname,$username,$password,$db_name);
mysqli_errno($db_connection);
?>
