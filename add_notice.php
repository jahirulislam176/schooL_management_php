<?php 
require 'header.php';
?>
<div class="col-lg-12">
    <div class="bg-primary text-center text-white py-2">
        <h2>
            Add Notice
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
        <form action="notice_post.php" method="post" enctype="multipart/form-data">
            <div class="my-2">
                <input type="text" name="icon1" class="form-control" placeholder="add your icon 1">
                </div>
             <div class="my-2">
                <input type="text" name="icon2" class="form-control" placeholder="add your icon 2">
                </div>
             <div>
                <input type="text" name="notice" class="form-control" placeholder="add your notice">
                </div>
             <div class="my-2">
                 <input type="date" name="date" placeholder="Your Date" class="form-control">
                </div>
            
             
            
        
        
    
    <div class="my-2">
        <select class="form-control" name="status">
            <option value="">--Select-status-- </option>
             <option value="1">Active </option>
              <option value="2">Deactive </option>
               
           
        </select>
        
        
    </div>
    
    <div class="">
        <button type="submit" class="btn btn-primary">Add Notice</button>
        
    </div>
                 

        
     
     </form>

    </div>
</div>
<?php
require 'footer.php';
?>


