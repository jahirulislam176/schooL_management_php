<?php
require 'header.php';
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
                <div class="col-lg-8 m-auto">
                    <h1 class="text-center m-auto" >Create A blog</h1>
                    
                    <form action="blog_post.php" method="post" enctype="multipart/form-data">
                        
                        
  
  <div class="form-group">
    <label>Blog_head</label>
    <input type="text" class="form-control" name="b_head"  placeholder="Enter blog head">
  </div>
      <div class="form-group">
    <label>font1</label>
    <input type="text" class="form-control" name="font1"  placeholder="font_1_class">
  </div> 
         
          <div class="form-group">
    <label>font2</label>
    <input type="text" class="form-control" name="font2"  placeholder="font_2_class">
  </div> 
                        
                        <div class="form-group">
    <label>date</label>
    <input type="date" class="form-control" name="date"  placeholder="Date">
  </div> 
            
                        
                        <div class="form-group">
    <label>Comments</label>
    <input type="text" class="form-control" name="comm"  placeholder="Blog comments">
  </div> 
                        
                        
                        
                        <div class="form-group">
    <label>blog_details</label>
    <input type="text" class="form-control" name="b_details"  placeholder="Blog_details">
  </div> 
                        
                        
            <div class="form-group">
    <label >Image</label>
    <input type="file" class="form-control" name="b_img"  >
  
  </div>            
                        
         
                        <select class="custom-select" size="3" class="form-control" name="role">
  <option selected>Open this select menu</option>
  <option value="1">Admin</option>
  <option value="2">Moderator</option>
  <option value="3">Author</option>
</select>                   
        
                        
                        
                        
                        
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    
                </div>
                
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

<?php
require 'footer.php';
?>
