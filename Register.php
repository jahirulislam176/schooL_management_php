       
<?php
require 'header.php';
?>     

<div class="col-lg-12 m-auto">
    <div class="text-center py-2 mb-3 bg-primary text-white">
        <h2>
            Register
        </h2>

    </div>
    <form class="" action="register_post.php" method="post" class="bg-light" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="fname" placeholder="Enter your name" class="form-control">

        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Enter your email" class="form-control">

        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Enter your password" class="form-control">
        </div>
        <div class="form-group">
            <select class="form-control" name="role">
                <option value="0">select</option>
                <option value="1">Admin</option>
                 <option value="2">Moderator</option>
                  <option value="3">Author</option>
                
            </select>
        </div>
         <div class="form-group">
             <input type="file" name="user_img">
        </div>
        <div class="">
            <div class="alert alert-primary" role="alert">
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

            </div>

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

