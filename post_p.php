<?php
require 'db.php';
$title=$_POST['title'];

$mess=$_POST['mess'];
$p_info=$_POST['pinfo'].','.$_POST['pinfo1'];
$status=$_POST['status'];


$uploaded_file=$_FILES['p_img'];
$after_explode= explode('.',$uploaded_file['name']);
$extention=end($after_explode);
$allowed_extention=array('jpg','jpeg','png','gif');
if(in_array($extention,$allowed_extention)){
    if($uploaded_file['size']<=20000000){
        $insert_query="INSERT INTO principal(title,p_img,mess,p_info,status) VALUES ('$title','$p_img','$mess','$p_info','$status')";
        $result=  mysqli_query($db_connection, $insert_query);
        $last_id=  mysqli_insert_id($db_connection);
        $file_name=$last_id.','.$extention;
        $new_location="uploads/principal/".$file_name;
        move_uploaded_file($uploaded_file['tmp_name'],$new_location);
        $update_photo="UPDATE principal SET p_img='$file_name' WHERE id=$last_id";
        $photo_upload=  mysqli_query($db_connection, $update_photo);
        $success = "Logo  Succesfully Added!";
           header('location:add_p.php?success='.$success);
        
    }
 else {
        echo 'File size is Big';
        
    }
    echo 'Format is Error';
    
}
?>