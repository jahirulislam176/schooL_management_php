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
        <div class="row ">
            <div class="col-lg-12">
                <div class="text-center py-3 bg-primary text-white">
        <h2>Single View</h2>
      </div>
                
            </div>
            
        </div>
      <div class="col-lg-12 bg-light">
        <table class="table table-bordered">
            <tr>
            <td>ID</td>
            <td><?php echo $after_assoc['id']; ?></td>
          </tr>
            
            
          <tr>
            <td>Name</td>
            <td><?php echo $after_assoc['name']; ?></td>
          </tr>
          <tr>
            <td>Eamil</td>
            <td><?php echo $after_assoc['email']; ?></td>
          </tr>
         
           <tr>
            <td>Role</td>
            <td><?php
    if ($after_assoc['role'] == 1) {
        echo 'Admin';
    } elseif ($after_assoc['role'] == 2) {
        echo 'Moderator';
    } elseif($after_assoc['role']==3) {
        echo 'Author';
        
    }
 else {
     
        echo 'General';
     
    }
    ?>
            </td>
          </tr>
          <tr>
            <td>photo</td>
            <td><img src="Dashboard_part/uploads/user/<?php echo $after_assoc['user_img'];?>" alt='' width="50px"></td>
          </tr>
         
         
        </table>
      </div>
    </div>

<?php
require 'footer.php';
?>


  