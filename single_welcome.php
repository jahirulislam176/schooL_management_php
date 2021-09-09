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
            <td>Title</td>
            <td><?php echo $after_assoc['title'];?></td>
            <td>
        </td>
          </tr>
          
          
           <tr>
            <td>Description</td>
            <td><?php echo $after_assoc['desp'];?></td>
            <td>
        </td>
          </tr>
          
          <tr>
              <td>Button</td>
              <td><?php echo $after_assoc['btn'];?></td>
          </tr>
          
        
         
         
        </table>
      </div>
    </div>

<?php
require 'footer.php';
?>


  