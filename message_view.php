<?php 
require 'header.php';
?>
<?php


$select_query = "SELECT * FROM messages";
$result = mysqli_query($db_connection,$select_query);
?>

 <div class="col-lg-12">
      <div class="text-center py-2 bg-primary text-white">
        <h2>Messages</h2>
        
       
        
      </div>
        <table class="table table-bordered bg-light">
          <tr class="bg btn-info  text-green">
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>SUBJECT</td>
            <td>MESSAGE</td>
            <td>ACTION</td>
          </tr>
          <?php
            foreach ($result as $value) {
           ?>
          <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['subject']; ?></td>
            <td><?php echo $value['message']; ?></td>
            <td>
              <a href="single_view.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-info">View</button>  </a>
               <?php
              if($_SESSION['role']==1 || $_SESSION['role']==2){
                  
              ?>
              <a href="edit.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-success">Edit</button>  </a>
              <?php } ?>
              <?php
              if($_SESSION['role']==1 || $_SESSION['role']==2 ){
                  
              ?>
              <a href="delete.php?id=<?php echo $value['id']; ?>"> <button type="button" class="btn btn-dark">Delete</button>  </a>
              <?php } ?>
            </td>
          </tr>
          <?php } ?>

        </table>
    </div>
<?php
require 'footer.php';
?>

