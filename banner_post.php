


<?php

require 'db.php';

$status = $_POST['status'];




$uploaded_file=$_FILES['banner'];
//print_r($uploaded_file);
//pic Break;
$after_explode=explode('.',$uploaded_file['name']);
$extention=end($after_explode);
//echo $extention;

$allowed_extention=array('jpg','jpeg','png','gif');

if(in_array($extention,$allowed_extention)){
   if($uploaded_file['size']<=2000000){
       $insert_query = "INSERT INTO banner ( status ) VALUES ('$status')";
$result = mysqli_query($db_connection,$insert_query);
$last_id=  mysqli_insert_id($db_connection);
//echo $last_id;
$file_name=$last_id.'.'.$extention;
$new_location="uploads/banner/".$file_name;
move_uploaded_file($uploaded_file['tmp_name'],$new_location);
$update_photo="UPDATE banner SET banner='$file_name' WHERE id=$last_id";
$photo_upload=  mysqli_query($db_connection, $update_photo);
$success = "Banner  Succesfully Added!";
header("location:add_banner.php?success=".$success);

   }
 else {
       echo 'File size is Big';
   }

}
else{
    echo 'Format is Error';

}
?>
