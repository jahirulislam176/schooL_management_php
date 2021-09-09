<?php
require 'header.php';
?>



<?php
require 'db.php';
$select = "SELECT * FROM img";
$result = mysqli_query($db_connection, $select);
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="m-auto text-center bg-light">All images</h1>

                    <table class="table table-light">
                        <thead>

                        <td>ID</td>
                        <td>photo</td>
                        </thead>
                        <tbody>





                            <?php
                            foreach ($result as $value) {
                                ?>
                                <tr>
                                    <td><?php echo $value['id']; ?>  </td>
                                    <td> <img src="uploads/img/<?php echo $value['img']; ?>" alt="" width="100px" class="img-fluid">  </td>

                                </tr>
                            <?php } ?>
                            </tr>
                        </tbody>
                    </table>






                </div>

            </div>

        </div>







        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>
<?php
require 'footer.php';
?>