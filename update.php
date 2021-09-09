<?php

require 'db.php';

$user_id = $_POST['id'];
$name = $_POST['fname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$change_photo=$_FILES['contact_img'];

if($_FILES['contact_img']['name'] != ''){
    
    $select_query="SELECT contact_img FROM messages WHERE id=$user_id";
$select_result=  mysqli_query($db_connection, $select_query);
$after_assoc=  mysqli_fetch_assoc($select_result);
$delete_from="uploads/".$after_assoc['contact_img'];
unlink($delete_from);

$uploaded_file=$_FILES['contact_img'];
//print_r($uploaded_file);
//pic Break;
$after_explode=explode('.',$uploaded_file['name']);
$extention=end($after_explode);
//echo $extention;

$allowed_extention=array('jpg','jpeg','png','gif');

if(in_array($extention,$allowed_extention)){
   if($uploaded_file['size']<=200000000){
       

//echo $last_id;
$file_name=$user_id.'.'.$extention;
$new_location="uploads/".$file_name;
move_uploaded_file($uploaded_file['tmp_name'],$new_location);
$update_photo="UPDATE messages SET contact_img='$file_name' WHERE id=$user_id";
$photo_upload=  mysqli_query($db_connection, $update_photo);
$update = "UPDATE messages SET name='$name',email='$email',subject='$subject',message='$message' WHERE id=$user_id";
$result = mysqli_query($db_connection,$update);

header('location:message_view.php');


       
   }
 else {
       echo 'File size is Big';
   }
    
}
else{
    echo 'Format is Error';
    
}


    
    
}
 else {
$update = "UPDATE messages SET name='$name',email='$email',subject='$subject',message='$message' WHERE id=$user_id";
$result = mysqli_query($db_connection,$update);
header('location:message_view.php');

    
}



?>
