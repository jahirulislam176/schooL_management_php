<?php 
require 'header.php';
?>


<?php
require 'db.php';
$user_id = $_GET['id'];                                                                                                                                                                                     
$select_query = "SELECT * FROM users_info WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>
 
      
    <div class="col-lg-12">
      <div class="text-center py-2 bg-primary text-white">
        <h2>Update User</h2>
      </div>
        <form action="update_user.php" method="post"  enctype="multipart/form-data">
      <div class="col-lg-12 ">
        <table class="table table-bordered bg-light ">
          <tr>
            <td>Name</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>" class="form-control">
              <input type="text" name="fname" value="<?php echo $after_assoc['name']; ?>" class="form-control">

            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td> <input type="email" name="email" value="<?php echo $after_assoc['email']; ?>" class="form-control"> </td>
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
     
 