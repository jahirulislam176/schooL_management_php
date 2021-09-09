<?php
require 'header.php';
?>

<?php
require 'db.php';
$select="SELECT * FROM blog";
$result=  mysqli_query($db_connection, $select);

?>


<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    
                    <table class="table table-dark">
  <thead>
      <tr class="mr-3  py-2">
      <th scope="col">id</th>
      <th scope="col">Font1</th>
      <th scope="col">Font2</th>
      <th scope="col">Blog head</th>
      <th scope="col">comments</th>
      <th scope="col">Date</th>
      <th scope="col">Blog Details</th>
      <th scope="col">Role</th>
      <th scope="col">image</th>
      
    </tr>
  </thead>
  <tbody>
      <?php
      foreach ($result as $value){
          
      
      ?>
    <tr>
      
      <td><?php echo $value['id']?></td>
      <td><?php echo $value['font1']?></td>
      <td><?php echo $value['font2']?></td>
      <td><?php echo $value['b_head']?>b head</td>
      <td><?php echo $value['comm']?></td>
      <td><?php echo $value['date']?></td>
      <td><?php echo $value['b_details']?></td>
      <td><?php echo $value['role']?></td>
      <td><img style="width: 50px" src="uploads/b_img/<?php echo $value['b_img'];?>"></td>
    </tr>
      <?php }?>
    
    
  </tbody>
</table>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                
            </div>
            
            
            
            
            
        </div>
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>










<?php
require 'footer.php';
?>


