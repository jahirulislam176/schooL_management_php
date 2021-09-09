<?php 
require 'header.php';
?>
<div class="col-lg-12">
    <div class="bg-primary text-center text-white py-2">
        <h2>
            Add Department
        </h2>
        
    </div>
    <div class="">
        <?php
        if(isset($_SESSION['success'])){
            
        
        ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['success'];
                unset($_SESSION['success']);
  ?>
</div>
  <?php }?>      
        
    </div>
    <div >
        <form action="dept_post.php" method="post" enctype="multipart/form-data">
            <div class="my-2">
                <input type="text" name="title" class="form-control" placeholder="add your department title">
                </div>
             <div class="my-2">
                <input type="text" name="info1" class="form-control" placeholder="add your department info1">
                </div>
             <div>
                <input type="text" name="info2" class="form-control" placeholder="add your department info2">
                </div>
             <div class="my-2">
                <input type="text" name="info3" class="form-control" placeholder="add your department info3">
                </div>
            
             <div class="my-2">
                <input type="text" name="icon" class="form-control" placeholder="add your department icon">
                </div>
            
        
        
    
    <div class="my-2">
        <select class="form-control" name="status">
            <option value="">--Select-status-- </option>
             <option value="1">Active </option>
              <option value="2">Deactive </option>
               
           
        </select>
        
        
    </div>
    
    <div class="">
        <button type="submit" class="btn btn-primary">Add Department</button>
        
    </div>
                 

        
     
     </form>

    </div>
</div>
<?php
require 'footer.php';
?>


