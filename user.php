<?php
require 'header.php';
?>
<?php
$select_query = "SELECT * FROM users_info";
$result = mysqli_query($db_connection, $select_query);
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<div class="col-lg-12">
    <div class="text-center py-2 bg-primary text-white">
        <h2>All Users</h2>



    </div>
    <table class="table table-bordered bg-light" id="table_id">
        <thead>
        <tr class="bg btn-info  text-green">
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>role</td>
            <td>Photo</td>
            <td>ACTION</td>
        </tr>
        </thead>
        <tbody>
<?php
foreach ($result as $value) {
    ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td>
    <?php
    if ($value['role'] == 1) {
        echo 'Admin';
    } elseif ($value['role'] == 2) {
        echo 'Moderator';
    } elseif($value['role']==3) {
        echo 'Author';

    }
 else {

        echo 'General';

    }
    ?>
                </td>

                <td><img src="uploads/user/<?php echo $value['user_img']; ?>" alt="" width="50px"></td>

                <td>
                    <a href="single_user.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-info">View</button>  </a>
                    <a href="edit_user.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-success">Edit</button>  </a>
                    <a href="delete_user.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-dark">Delete</button>  </a>
                </td>
            </tr>
<?php } ?>

        </tbody>

    </table>
</div>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

<?php
require 'footer.php';
?>
<script>$(function(){
  $('#table_id').DataTable();
});
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
