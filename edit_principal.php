<?php
require 'header.php';
?>
   



<?php
require 'db.php';
$user_id = $_GET['id'];                                                                                                                                                                                     
$select_query = "SELECT * FROM principal WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>
 
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            
            
      <div class="text-center py-2 bg-primary text-white">
        <h2>Update principal</h2>
      </div>
            <form action="update_principal.php" method="post"  enctype="multipart/form-data">
      <div class="col-lg-12 ">
        <table class="table table-bordered bg-light ">
          <tr>
            <td>Status</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>" class="form-control">
              <select class="form-control" name="status">
                  <option value="0">--select status</option>
                  <option value="1">Active</option>
                    <option value="2">Deactive</option>
                     
              </select>
            </td>
          </tr>
          
         
         
          
        </table>
        <div class="col-lg-12 text-center">
          <button type="submit" class="btn btn-secondary">Update</button>
        </div>
      </div>
      </form>
    </div>
            
            
            
            
            
        </div>
    </body>
</html>
<?php
require 'footer.php';
?>
   


