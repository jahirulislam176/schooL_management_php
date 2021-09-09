<?php
require 'db.php';

$uploaded_file=$_FILES['img'];
$after_explode=explode('.',$uploaded_file['name']);
$extention=  end($after_explode);
$allowed_extention=  array('jpg','jpeg','png','gif');
if(in_array($extention,$allowed_extention)){
    if($uploaded_file['size']<=20000000){
        $insert_query = "INSERT INTO img ( img ) VALUES ('$img')";
        $result = mysqli_query($db_connection,$insert_query);
        $last_id=  mysqli_insert_id($db_connection);
        $new_file=$last_id.'.'.$extention;
        $new_location="uploads/img/".$new_file;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update_photo="UPDATE img SET img='$new_file' WHERE id=$last_id";
        $photo_upload=  mysqli_query($db_connection, $update_photo);
        $success = "img  Succesfully Added!";
        header("location:img_add.php?success=".$success);
        
        
        
    }
 else {
        echo 'File size is Big';
        
    }
}
?>