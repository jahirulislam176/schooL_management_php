<?php 
require 'header.php';
?>


<?php
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM messages WHERE id=$user_id";
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
            <td>Name</td>
            <td><?php echo $after_assoc['name']; ?></td>
          </tr>
          <tr>
            <td>Eamil</td>
            <td><?php echo $after_assoc['email']; ?></td>
          </tr>
          <tr>
            <td>subject</td>
            <td><?php echo $after_assoc['subject']; ?></td>
          </tr>
          <tr>
            <td>Message</td>
            <td><?php echo $after_assoc['message']; ?></td>
          </tr>
        </table>
      </div>
    </div>

<?php
require 'footer.php';
?>


  