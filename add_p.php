       
<?php
require 'header.php';
?>     

<div class="col-lg-12 m-auto">
    <div class="text-center py-2 mb-3 bg-primary text-white">
        <h2>
           PRINCIPAL
        </h2>

    </div>
    <form class="" action="post_p.php" method="post" class="bg-light" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="title" placeholder="Enter principal title" class="form-control">

        </div>

        <div class="form-group">
            <input type="text" name="mess" placeholder="Enter your mess" class="form-control">

        </div>
        <div class="form-group">
            <input type="text" name="pinfo" placeholder="Enter your pinfo" class="form-control">
        </div>
        
         <div class="form-group">
            <input type="text" name="pinfo1" placeholder="Enter your pinfo1" class="form-control">
        </div>
        
        <div class="form-group">
             <input type="file" name="p_img" class="form-control">
        </div>
        
        <div>
            <select  class="form-group form-control" name="status">
                <option value="0">
                   Select status
                </option>
                <option value="1">
                    Active
                    
                </option>
                <option value="2">
                    Deactive
                </option>
                
            </select>
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                Submit                          
            </button>                               
        </div>                          
    </form>  
</div>
    <?php
    require 'footer.php';
    ?>

