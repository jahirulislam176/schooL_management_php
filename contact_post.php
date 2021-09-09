<?php

require 'db.php';

$name = $_POST['fname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];




$uploaded_file=$_FILES['contact_img'];
//print_r($uploaded_file);
//pic Break;
$after_explode=explode('.',$uploaded_file['name']);
$extention=end($after_explode);
//echo $extention;

$allowed_extention=array('jpg','jpeg','png','gif');

if(in_array($extention,$allowed_extention)){
   if($uploaded_file['size']<=200000000){
       $insert_query = "INSERT INTO messages (name, email, subject,message) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($db_connection,$insert_query);
$last_id=  mysqli_insert_id($db_connection);
//echo $last_id;
$file_name=$last_id.'.'.$extention;
$new_location="uploads/".$file_name;
move_uploaded_file($uploaded_file['tmp_name'],$new_location);
$update_photo="UPDATE messages SET contact_img='$file_name' WHERE id=$last_id";
$photo_upload=  mysqli_query($db_connection, $update_photo);
$success = "Data Succesfully Sent!";
header("location:contact.php?success=".$success);

   }
 else {
       echo 'File size is Big';
   }

}
else{
    echo 'Format is Error';

}
?>
