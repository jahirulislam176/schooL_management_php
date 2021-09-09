<?php
require 'header.php';
?>
<?php
$select_query = "SELECT * FROM logo";
$result = mysqli_query($db_connection, $select_query);
?>

<div class="col-lg-12">
    <div class="text-center py-2 bg-primary text-white">
        <h2>All Logo</h2>



    </div>
    <table class="table table-bordered bg-light">
        <tr class="bg btn-info  text-green">
            <td>ID</td>
            <td>Logo</td>
            <td>Status</td>
           
            
            <td>ACTION</td>
        </tr>
<?php
foreach ($result as $value) {
    ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                
                <td><img src="uploads/logo/<?php echo $value['logo']; ?>" alt="" width="50px" class="img-fluid"></td>
                
                <td>
                 <?php
                 if($value['status']==1){
                     ?>
                 
                    <button type="button" class="btn btn-success">Active</button>
                     
                 
                 <?php } ?>
                    
                    <?php
               if($value['status']==2){
                     ?>
                 
                    <button type="button" class="btn btn-warning">Deactive</button>
                     
                 
                 <?php } ?>
                 
             
                
                </td>
                
              

                <td>
                   
                    <a href="edit_logo.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-success">Edit</button>  </a>
                    <a href="delete_user.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-dark">Delete</button>  </a>
                </td>
            </tr>
<?php } ?>

    </table>
</div>
<?php
require 'footer.php';
?>

