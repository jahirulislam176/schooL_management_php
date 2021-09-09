<?php
session_start();
require 'db.php';
$name = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role=$_POST['role'];

$select = "SELECT COUNT(*) as tahsan FROM users_info WHERE email='$email'";
$result = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($result);

if ($after_assoc['tahsan'] == 1) {
    $exist = "Email Already Exist ";
    header("location:Register.php?exist=" . $exist);
} else {

    $uploaded_file=$_FILES['user_img'];
//print_r($uploaded_file);
//pic Break;
$after_explode=explode('.',$uploaded_file['name']);
$extention=end($after_explode);
//echo $extention;

$allowed_extention=array('jpg','jpeg','png','gif');

if(in_array($extention,$allowed_extention)){
   if($uploaded_file['size']<=2000000000){
        $insert_query = "INSERT INTO users_info(name,email,password,role) VALUES ('$name','$email','$password','$role')";
    $result = mysqli_query($db_connection, $insert_query);

$last_id=  mysqli_insert_id($db_connection);
//echo $last_id;
$file_name=$last_id.'.'.$extention;
$new_location="uploads/user".$file_name;
move_uploaded_file($uploaded_file['tmp_name'],$new_location);
$update_photo="UPDATE users_info SET user_img='$file_name' WHERE id=$last_id";
$photo_upload=  mysqli_query($db_connection, $update_photo);
 $success = 'Data is sent!';
    header('location:Register.php?success=' . $success);
   }
 else {
       echo 'File size is Big';
   }

}
else{
    echo 'Format is Error';

}





    //$insert_query = "INSERT INTO users_info(name,email,password) VALUES ('$name','$email','$password')";
    //$result = mysqli_query($db_connection, $insert_query);
    //$success = 'Data is sent!';
    //header('location:Register.php?success=' . $success);
}
?>
