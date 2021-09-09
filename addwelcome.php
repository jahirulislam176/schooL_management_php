<?php
require 'header.php';
?>     

<div class="col-lg-12 m-auto">
    <div class="text-center py-2 mb-3 bg-primary text-white">
        <h2>
            Add Welcome
        </h2>

    </div>
     <?php 
                if (isset($_SESSION['success'])) 
                {
                
                    ?>
                    <div class="alert alert-primary" role="alert"> 
                    </div>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>


                <?php } ?>
    <form class="" action="welcome_post.php" method="post" class="bg-light" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="title" placeholder="Welcome title" class="form-control">

        </div>

        <div class="form-group">
            <textarea class="form-control" name="desp" placeholder="description"> </textarea>

        </div>
      
         <div class="form-group">
             <input type="text" name="btn" class="form-control" placeholder="button name">
        </div>
        <div class="">
            <div class="alert alert-primary" role="alert">
               

            </div>

        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                Submit                          
            </button>                               
        </div>                          
    </form>  
    <?php
    require 'footer.php';
    ?>


