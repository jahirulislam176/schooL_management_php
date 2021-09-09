<?php
require 'db.php';
//$id=$_GET['id'];
$select="SELECT * FROM un_info";
$result=mysqli_query($db_connection,$select);
?>



<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto ">
                    <h1 class="text-center">University Info</h1>

                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Font</th>
      <th scope="col">Total</th>
      <th scope="col">Type</th>
       <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      <?php
      foreach ($result as $value){


          ?>
    <tr>

        <td><?php echo $value['id']; ?></td>
      <td><?php echo $value['font']; ?></td>
      <td><?php echo $value['total']; ?></td>
      <td><?php echo $value['stafs']; ?></td>


       <td><a href="delete_un_info.php?id=<?php echo $value['id'];?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>

    <?php }?>


  </tbody>
</table>

                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
