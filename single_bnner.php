<?php 
require 'header.php';
?>


<?php
require 'db.php';
$user_id = $_GET['id'];
$select_query = "SELECT * FROM banner WHERE id=$user_id";
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
            <td>Status</td>
            <td>
                <?php
    if ($after_assoc['status'] == 1) {
        echo 'Active';
    } elseif ($after_assoc['status'] == 2) {
        echo 'Deactive';
    } 
        
    
 
    ?>
            </td>
          </tr>
          <tr>
            <td>photo</td>
            <td><img src="Dashboard_part/uploads/banner/<?php echo $after_assoc['banner_img'];?>" alt='' width="50px"></td>
          </tr>
         
         
        </table>
      </div>
    </div>

<?php
require 'footer.php';
?>


  