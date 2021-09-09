<?php
require 'header.php';
?>
<?php
$select_query = "SELECT * FROM principal";
$result = mysqli_query($db_connection, $select_query);
?>

<div class="col-lg-12">
    <div class="text-center py-2 bg-primary text-white">
        <h2>Principal work</h2>



    </div>
    <table class="table table-bordered bg-light">
        <tr class="bg btn-info  text-green">
            <td>ID</td>
            <td>Title</td>
           
            <td>Photo</td>
            <td>Message</td>
             <td>P_info</td>
              <td>Status</td>
            
            
        </tr>
<?php
foreach ($result as $value) {
    ?>
            <tr>
                <?php
                        if($value['status']==1){
                            
                     ?>
                
                <td><?php echo $value['id']; ?></td>
                 <td><?php echo $value['title']; ?></td>
                
               
                
                 <td><img src="uploads/principal/<?php echo $value['p_img']; ?>" alt="" width="50px" class="img-fluid"></td>
                    <td><?php echo $value['mess']; ?></td>
                    <td><?php 
                    $p_info=  explode(',', $value['p_info']);
                    
                    ?>
                        <?php 
                    echo $p_info[0];
                        ?>
                        <?php 
                    echo $p_info[1];
                        ?>
                    </td>
                    <td>
                        
                        
                        
                        
                        <button class="btn btn-success">Active</button>
                        <?php }?>
                        
                        <?php
                        if($value['status']==2){
                            ?>
                            
                             <td><?php echo $value['id']; ?></td>
                 <td><?php echo $value['title']; ?></td>
                
               
                
                 <td><img src="uploads/principal/<?php echo $value['p_img']; ?>" alt="" width="50px" class="img-fluid"></td>
                    <td><?php echo $value['mess']; ?></td>
                    <td><?php 
                    $p_info=  explode(',', $value['p_info']);
                    
                    ?>
                        <?php 
                    echo $p_info[0];
                        ?>
                        <?php 
                    echo $p_info[1];
                        ?>
                    </td>
                    <td>
                        
                        
                            
                            
                        
                        
                        <button class="btn btn-danger">Deactive</button>
                        <?php } ?>
                        
                       
                    </td>
                <td>
                    
                    <a href="edit_principal.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-success">Edit</button>  </a>
                    <a href="delete_principal.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-dark">Delete</button>  </a>
                </td>
            </tr>
<?php } ?>

    </table>
</div>
<?php
require 'footer.php';
?>

