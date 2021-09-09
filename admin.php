<?php
require 'header.php';
?>
<?php
$select_query = "SELECT COUNT(*) as tahsan FROM messages";
$result = mysqli_query($db_connection, $select_query);
$after_assoc=  mysqli_fetch_assoc($result);
?>

<?php
$select_query = "SELECT COUNT(*) as jahid FROM users_info";
$result = mysqli_query($db_connection, $select_query);
$after_assoc1=  mysqli_fetch_assoc($result);
?>

<?php
$select_query = "SELECT COUNT(*) as hridoy FROM notice";
$result = mysqli_query($db_connection, $select_query);
$after_assoc2=  mysqli_fetch_assoc($result);
?>
<div class="row">
    <div class="col-lg-4">
        <div class="card text-center">
  <div class="card-header">

  </div>
  <div class="card-body">
    <h5 class="card-title h3 bg-primary text-white">Total Message</h5>
    <p class="card-text h2"><?php echo $after_assoc['tahsan']; ?></p>
    <a href="message_view.php" class="btn btn-primary">view message</a>
  </div>
</div>

    </div>

    <div class="col-lg-4">
        <div class="card text-center">
  <div class="card-header">

  </div>
  <div class="card-body">
    <h5 class="card-title h3 bg-primary text-white">Total Notice</h5>
    <p class="card-text h2"><?php echo $after_assoc2['hridoy'];?></p>
    <a href="notice.php" class="btn btn-primary">view Notice</a>
  </div>
</div>

    </div>

    <div class="col-lg-4">
        <div class="card text-center">
  <div class="card-header">

  </div>
  <div class="card-body">
    <h5 class="card-title h3 bg-primary text-white">Total users</h5>
    <p class="card-text h2"><?php echo $after_assoc1['jahid'];?></p>
    <a href="user.php" class="btn btn-primary">view users</a>
  </div>
</div>

    </div>

</div>
<?php
require 'footer.php';
?>
