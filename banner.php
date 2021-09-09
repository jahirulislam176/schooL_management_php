<?php
require 'header.php';
?>
<?php
$select_query = "SELECT * FROM banner  ";
$result = mysqli_query($db_connection, $select_query);
?>

<div class="col-lg-12">
    <div class="text-center py-2 bg-primary text-white">
        <h2>All Banner</h2>



    </div>
    <table class="table table-bordered bg-light">
        <tr class="bg btn-info  text-green">
            <td>ID</td>
            <td>Status</td>
           
            <td>Photo</td>
            <td>ACTION</td>
        </tr>
<?php
foreach ($result as $value) {
    ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                
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
                
                <td><img src="uploads/banner/<?php echo $value['banner_img']; ?>" alt="" width="50px" class="img-fluid"></td>

                <td>
                    <a href="single_banner.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-info">View</button>  </a>
                    <a href="edit_banner.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-success">Edit</button>  </a>
                    <a href="delete_user.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-dark">Delete</button>  </a>
                </td>
            </tr>
<?php } ?>

    </table>
</div>
<?php
require 'footer.php';
?>

