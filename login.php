<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
       
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="text-center py-2">
                            <h2>
                                Login
                            </h2>
                            
                        </div>
                        <form class="" action="login_post.php" method="post">
                            <div class="">
                              <?php
                              if(isset($_GET['invalid'])){
                                  echo $_GET['invalid'];
                              }
                              ?>
                                
                            </div>
                            
                            
                             <div class="form-group">
                                 <input type="email" name="email" placeholder="Enter your email" class="form-control">
                                
                             </div>
                             <div class="form-group">
                                 <input type="password" name="password" placeholder="Enter your password" class="form-control">
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">
                                    Login                         
                                </button>                               
                            </div>                          
                        </form>                        
                    </div>
                </div>
            </div>
        </section>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
