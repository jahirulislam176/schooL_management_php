<?php
require 'header.php';
?>
<?php
$select_query = "SELECT * FROM notice";
$result = mysqli_query($db_connection, $select_query);
?>

<div class="col-lg-12">
    <div class="text-center py-2 bg-primary text-white">
        <h2>All Notice</h2>



    </div>
    <table class="table table-bordered bg-light">
        <tr class="bg btn-info  text-green">
            <td>ID</td>
            
            <td>Icon</td>
            <td>Notice</td>
             <td>Date</td>
            
            <td>Status</td>
            <td>Action</td>
            
        </tr>
<?php
foreach ($result as $value) {
    ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                 
                 <td>
                     <?php
                     $icon=explode(',',$value['icon']);
                     ?>
                     <i class="<?php echo $icon[0]; ?>"></i>
                     <?php echo '--';?>
                      <i class="<?php echo $icon[1]; ?>"></i>
                     
                 </td>
                   <td><?php echo $value['notice']; ?></td>
                    <td><?php echo $value['date']; ?></td>
                    
                
                <td>
                 <?php
                 if($value['status']==1){
                     echo 'Active';
                 }
                 elseif ($value['status']==2){
                     echo 'Deactive';
                 }
                     
                 
                 
             
                 ?>
                </td>
                
               

                <td>
                    
                    <a href="delete_notice.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-dark">Delete</button>  </a>
                </td>
            </tr>
<?php } ?>

    </table>
</div>
<?php
require 'footer.php';
?>



