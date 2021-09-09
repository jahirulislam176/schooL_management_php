<?php
require 'db.php';
$b_head=$_POST['b_head'];
$font1=$_POST['font1'];
$font2=$_POST['font2'];
$date=$_POST['date'];
$comm=$_POST['comm'];
$b_details=$_POST['b_details'];
$role=$_POST['role'];

$uploaded_file=$_FILES['b_img'];
$after_explode=explode('.',$uploaded_file['name']);
$extention=end($after_explode);
$allowed_extention= array('jpg','jpeg','png','gif');
if(in_array($extention,$allowed_extention)){
    if($uploaded_file['size']<=2000000){
        $insert_query="INSERT INTO blog (b_head,font1,font2,date,comm,b_details,role) VALUES ('$b_head','$font1','$font2','$date','$comm','$b_details','$role')";
        $result=  mysqli_query($db_connection, $insert_query);
        //header('location:add_blog.php');
        $last_id=  mysqli_insert_id($db_connection);
        $new_file=$last_id.'.'.$extention;
        $new_location='uploads/b_img/'.$new_file;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update="UPDATE blog SET b_img='$new_file' WHERE id=$last_id";
        $photo_upload=  mysqli_query($db_connection, $update);
        header('location:add_blog.php');
        
    }
 else {
        echo 'Image size is big';    
    }
 
     
        
    
}

?>