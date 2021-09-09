<?php 
require 'header.php';
?>


<?php
require 'db.php';
$user_id = $_GET['id'];                                                                                                                                                                                     
$select_query = "SELECT * FROM welcome WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>
 
      
    <div class="col-lg-12">
      <div class="text-center py-2 bg-primary text-white">
        <h2>Update welcome</h2>
      </div>
        <form action="update_welcome.php" method="post"  enctype="multipart/form-data">
      <div class="col-lg-12 ">
        <table class="table table-bordered bg-light ">
          
           
          <tr>
            <td>Title</td>
            <td> <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>" class="form-control">
            <input type="text" name="title" value="<?php echo $after_assoc['title']; ?>"  class="form-control" placeholder="Title"> </td>
          </tr>
          
          
           <tr>
            <td>Description</td>
            <td><textarea class="form-control" name="desp"><?php echo $after_assoc['desp'];?></textarea></td>
          </tr>
          
           <tr>
            <td>Button</td>
            <td> <input type="text" name="btn" value="<?php echo $after_assoc['btn']; ?>" class="form-control"> </td>
          </tr>
         
         
        </table>
        <div class="col-lg-12 text-center">
          <button type="submit" class="btn btn-secondary">Update</button>
        </div>
      </div>
      </form>
    </div>
     
 <?php
require 'footer.php';
?>
     
 

