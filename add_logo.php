<?php 
require 'header.php';
?>
<div class="col-lg-12">
    <div class="bg-primary text-center text-white py-2">
        <h2>
            Add Logo
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
    <div class="my-2">
        <form action="logo_post.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="file" name="logo" class="form-control" value="">
                </div>
            
              <div class="my-2">
        <select class="form-control" name="status">
            <option value="">--Select-status-- </option>
             <option value="1">Active </option>
              <option value="2">Deactive </option>
               
           
        </select>
        
        
    </div>
            
            <div class="">
        <button type="submit" class="btn btn-primary">Add Logo</button>
        
    </div>
            
            
        </form>
        
    </div>
  
    
    
    
</div>
<?php
require 'footer.php';
?>


