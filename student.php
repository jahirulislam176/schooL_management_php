
<?php
require 'header.php';
?>



<?php
require 'db.php';
//$user_id=$_GET['id'];
$select_query="SELECT * FROM `student_area`";
$result=mysqli_query($db_connection, $select_query);
?>





<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    
                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Font</th>
      <th scope="col">S1</th>
      <th scope="col">S2</th>
      <th scope="col">S3</th>
      <th scope="col">S4</th>
      <th scope="col">S5</th>
      <th scope="col">S6</th>
      <th scope="col">S7</th>
      <th scope="col">S8</th>
      <th scope="col">S9</th>
      <th scope="col">S10</th>
      <th scope="col">Status</th>
      
      
    </tr>
  </thead>
  <tbody>
      <?php 
      foreach ($result as $value){
          
      
      
      
      ?>
      
     
    <tr>
         
        <td>
            
          <?php 
          $font=explode(',',$value['font']);
          
          ?>  
            <i class="<?php echo $font[0];?>"></i>
             <i class="<?php echo $font[1];?>"></i>
              <i class="<?php echo $font[2];?>"></i>
               <i class="<?php echo $font[3];?>"></i>
                <i class="<?php echo $font[4];?>"></i>
                 <i class="<?php echo $font[5];?>"></i>
                  <i class="<?php echo $font[6];?>"></i>
                   <i class="<?php echo $font[7];?>"></i>
                    <i class="<?php echo $font[8];?>"></i>
                     <i class="<?php echo $font[9];?>"></i>
                      <i class="<?php echo $font[10];?>"></i>
            
        </td>
      <td><?php echo $value['s1'];?></td>
      <td><?php echo $value['s2'];?></td>
      <td><?php echo $value['s3'];?></td>
      <td><?php echo $value['s4'];?></td>
      <td><?php echo $value['s5'];?></td>
      <td><?php echo $value['s6'];?></td>
      <td><?php echo $value['s7'];?></td>
      <td><?php echo $value['s8'];?></td>
      <td><?php echo $value['s9'];?></td>
      <td><?php echo $value['s10'];?></td>
      <td><?php echo $value['status'];?></td>
       
      <td><a href="delete_student.php?id=<?php echo $value['id'];?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
  
   <?php }?>
   
  </tbody>
</table>
                    
                </div>
            </div>
        </div>
        
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

<?php
require 'footer.php';
?>
