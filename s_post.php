<?php
require 'db.php';

$font=$_POST['font1'].','.$_POST['font2'].','.$_POST['font3'].','.$_POST['font4'].','.$_POST['font5'].','.$_POST['font6'].','.$_POST['font7'].','.$_POST['font8'].','.$_POST['font9'].','.$_POST['font10'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
$s6=$_POST['s6'];
$s7=$_POST['s7'];
$s8=$_POST['s8'];
$s9=$_POST['s9'];
$s10=$_POST['s10'];
$status=$_POST['status'];
$insert_query="INSERT INTO student_area(font,s1,s2,s3,s4,s5,s6,s7,s8,s9,s10,status) VALUES ('$font','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$status')";

$result=mysqli_query($db_connection, $insert_query);
header('location:s_add.php');

?>

