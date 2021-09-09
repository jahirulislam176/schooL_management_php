<?php
require 'db.php';
$select_query1 = "SELECT * FROM banner WHERE status=1";
$result = mysqli_query($db_connection, $select_query1);
?>
<?php
require 'db.php';
$select_query = "SELECT * FROM department";
$result3 = mysqli_query($db_connection, $select_query)
?>
<?php
require 'db.php';
$select_query = "SELECT * FROM notice";
$result4 = mysqli_query($db_connection, $select_query);
?>

 <?php
// require 'db.php';
// $select_query = "SELECT * FROM logo WHERE status=1";
// $result5 = mysqli_query($db_connection, $select_query);
// $after_assoc2 = mysqli_fetch_assoc($result5);
?>
<?php
require 'db.php';
$select_query = "SELECT * FROM welcome";
$result6 = mysqli_query($db_connection, $select_query);
$after_assoc6 = mysqli_fetch_assoc($result6);
?>
<?php
require 'db.php';
$select_query = "SELECT * FROM principal WHERE status=1";
$result7 = mysqli_query($db_connection, $select_query);
$after_assoc7 = mysqli_fetch_assoc($result7);
?>
<?php
require 'db.php';
$select_query = "SELECT * FROM student_area";
$result8 = mysqli_query($db_connection, $select_query);
$after_assoc8 = mysqli_fetch_assoc($result8);
?>
<?php
require 'db.php';
$select_query = "SELECT * FROM img";
$result9 = mysqli_query($db_connection, $select_query);
?>
<?php
require 'db.php';
$select = "SELECT * FROM un_info";
$result10 = mysqli_query($db_connection, $select);
?>
<?php
require 'db.php';
$select = "SELECT * FROM news_l";
$result11 = mysqli_query($db_connection, $select);
$after_assoc11 = mysqli_fetch_assoc($result11);
?>
<?php
require 'db.php';
$select = "SELECT * FROM blog";
$result12 = mysqli_query($db_connection, $select);
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>polytechnic</title>
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800,900|Oxygen:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>

    <body>
        <div id="home">
            <!--  head part starts  -->

            <header id="head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-7 col-12 logo">
                            <a href="#">
                                <img src="uploads/logo/<?php echo $after_assoc2['logo']; ?>" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-7 col-sm-5 col-12 text-right">
                            <div class="row ">
                                <div class="co col-md-12 col-sm-12 col-12 text-right">
                                    <ul>
                                        <li><a href="tel:+880-1112-333-444"><i class="fa fa-phone"></i>+880-1112-333-444</a></li>
                                        <li><a href="mailto:Support@domain.com"><i class="fa fa-envelope"></i>Support@domain.com</a></li>

                                    </ul>
                                </div>

                                <div class="so col-md-12 col-sm-12 col-12 text-right">
                                    <ul>
                                        <li>
                                            <ul class="social">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-sign-in si"></i>sign in</a></li>
                                        <li><a href="#"><i class="fa fa-user-plus si"></i>register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!--  head part ends  -->
            <!-- menu part start -->
            <section id="menu">
                <div class="container text-center">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">about</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        academic
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="teacher.html">Teacher &amp; stuff</a>
                                        <a class="dropdown-item" href="student.html">student info</a>
                                        <a class="dropdown-item" href="lab.html">lab and workshop</a>
                                        <a class="dropdown-item" href="events.html">events</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admission.html">admission info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">department</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="no-record.html">examination</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="result.html">result</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gallary">gallary</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">contact us</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 mmd-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                                <button class="btn btn-outline-success my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>
            </section>
            <!-- menu part end -->
            <!--    marque starts -->
            <section id="marq">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 col-sm-2 pr-0">
                            <span>latest news</span>
                        </div>
                        <div class="col-md-11 col-sm-10">
                            <marquee><?php echo $after_assoc11['news'];?></marquee>
                        </div>
                    </div>
                </div>
            </section>
            <!--    marque ends -->
            <!--  banner starts  -->
            <section id="banner">

              <?php
              foreach ($result as $value) {
                  ?>

                <div class="slide">

                        <div class="bim-1">
                            <img src="uploads/banner/<?php echo $value['banner'];?>" alt="" class="img-fluid">
                        </div>


                </div>
                <?php } ?>


            </section>
            <!-- banner ends -->
        </div>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-12">
                        <div class="row">
                            <div class="welcome col-sm-12">
                                <h2><?php echo $after_assoc6['title']; ?></h2>
                                <p><?php echo $after_assoc6['desp']; ?></p>
                                <a href="#"><?php echo $after_assoc6['btn']; ?></a>
                            </div>
                            <!-- welcome ends -->
                        </div>
                        <div class="princi row">
                            <div class="col-md-12 col-sm-12 p-sm-0 col-12">
                                <h2><?php echo $after_assoc7['title']; ?></h2>
                            </div>
                            <div class="col-md-2 col-sm-3 p-sm-0 col-12">
                                <img class="img-fluid" src="uploads/principal/<?php echo $after_assoc7['p_img']; ?>" alt="">
                            </div>
                            <div class="message col-md-10 col-sm-9 col-12">
                                <p><?php echo $after_assoc7['mess']; ?> <a href="#">Read More...</a></p>
                                <?php
                                $p_info = explode(',', $after_assoc7['p_info']);
                                ?>
                                <h4><?php echo $p_info[0]; ?></h4>
                                <span><?php echo $p_info[1]; ?> <br>pathshala polytechnic institute</span>

                            </div>
                        </div>
                        <div class="department row">
                            <div class="col-md-12 col-sm-12 col-12 p-sm-0">


                                <h2>Our Departments</h2>
                            </div>
                            <?php
                            foreach ($result3 as $value) {
                                ?>
                                <div class="col-md-4 col-sm-4 col-6  p-0 dep">
                                    <i class="<?php echo $value['icon']; ?>"></i>
                                    <h5><?php echo $value['title']; ?></h5>
                                    <ul>
                                        <?php
                                        $info = explode(',', $value['info']);
                                        ?>
                                        <li><?php echo $info[0]; ?></li>
                                        <li><?php echo $info[1]; ?></li>
                                        <li><?php echo $info[2]; ?></li>
                                    </ul>
                                </div>
                            <?php } ?>





                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                        <div class="row m-0">
                            <div class="col-md-12 col-12 col-sm-4">
                                <div class="notice">
                                    <h3>notice board</h3>
                                    <div class="note-slick">
                                        <?php
                                        foreach ($result4 as $value) {
                                            ?>
                                            <div class="note col-md-12 col-sm-12 col-12">
                                                <div class="row">
                                                    <div class="col-md-1 col-1 col-sm-1 p-0">
                                                        <?php
                                                        $icon = explode(',', $value['icon']);
                                                        ?>
                                                        <i class="<?php echo $icon[0]; ?>"></i>
                                                    </div>
                                                    <div class="col-md-11 col-sm-11 col-11 p-0 n">
                                                        <h6 style="display: inline-block"> <?php echo $value['notice']; ?></h6>
                                                        <p><i class="<?php echo $icon[0]; ?>"></i> <?php echo $value['date'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>









                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-6 col-sm-4">
                                <div class="s-area">
                                    <h3>student area</h3>

                                    <ul>
                                        <?php
                                        $font = explode(',', $after_assoc8['font']);
                                        ?>
                                        <li><a href="#"><i class="<?php $font[0] ?>"></i><?php echo $after_assoc8['s1']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[1] ?>"></i><?php echo $after_assoc8['s2']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[2] ?>"></i><?php echo $after_assoc8['s3']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[3] ?>"></i><?php echo $after_assoc8['s4']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[4] ?>"></i><?php echo $after_assoc8['s5']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[5] ?>"></i><?php echo $after_assoc8['s6']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[6] ?>"></i><?php echo $after_assoc8['s7']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[7] ?>"></i><?php echo $after_assoc8['s8']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[8] ?>"></i><?php echo $after_assoc8['s9']; ?></a></li>
                                        <li><a href="#"><i class="<?php $font[9] ?>"></i><?php echo $after_assoc8['s10']; ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-6 col-sm-4">
                                <div class="link">
                                    <h3>useful links</h3>
                                    <ul>
                                        <li><a href="#">ministry of education</a></li>
                                        <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                        <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                        <li><a href="#">directorate of technical education board </a></li>
                                        <li><a href="#">skills &amp; Training enhancement project</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter part starts -->
        <section id="counter">
            <div class="count-overlay">
                <div class="container text-center">
                    <div class="row">
                        <?php
                        foreach ($result10 as $value) {
                            ?>
                            <div class="col-md-3 col-6 col-sm-3 county text-center">

                                <i class="<?php echo $value['font']; ?>"></i>
                                <div class="count num"><?php echo $value['total'] ?></div>
                                <p><?php echo $value['stafs']; ?></p>
                            </div>
<?php } ?>





                    </div>
                </div>
            </div>
        </section>
        <!-- counter part ends -->
        <!-- blog start -->
        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 text-center">
                        <h2>latest news</h2>
                    </div>
<?php
foreach ($result12 as $value) {
    ?>
                        <div class="col-md-4 col-sm-4 col-6 blog-item">
                            <div>
                                <img src="uploads/b_img/<?php echo $value['b_img'] ?>" alt="" class="img-fluid">
                            </div>
                            <div class="blog-d">
                                <h3><?php echo $value['b_head'] ?> </h3>
                                <i class="<?php echo $value['font1'] ?>"></i>
    <?php
    if ($value['role'] == 1) {
        echo 'Admin';
    } elseif ($value['role'] == 2) {
        echo 'Moderator';
    } else {
        echo 'Author';
    }
    ?>



                                <ul>
                                    <li><i class="<?php echo $value['font2'] ?>"></i><?php echo $value['date'] ?></li>
                                    <li><i class="fa fa-comment"></i><?php echo $value['comm'] ?></li>
                                </ul>
                                <p><?php echo $value['b_details'] ?></p>
                                <a href="#">cont inue reading <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
<?php } ?>





                </div>
            </div>
        </section>
        <!-- blog end -->
        <!-- gallary part ends -->
        <section id="gallary">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <h2>our gallary</h2>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <ul>
                            <li data-filter="all">all</li>
                            <li data-filter=".campus">campus</li>
                            <li data-filter=".events">events</li>
                            <li data-filter=".photo">photo gallary</li>
                            <li data-filter=".video">video gallary</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12 cont">
                        <div class="row">
<?php
foreach ($result9 as $value) {
    ?>
                                <div class="col-md-4 col-sm-4 col-6 mix campus photo ">
                                    <img src="uploads/img/<?php echo $value['img']; ?>" alt="">
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12 view">
                        <a href="#gallary">view more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallary part ends -->
        <!-- foot starts -->
        <section id="foot">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                        <img src="images/logo-small.png" alt="" class="img-fluid">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the best.</p>


                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>

                    </div>
                    <div class="col-md-1 offset-1 p-0 col-sm-5 col-5">
                        <h5>quick links</h5>
                        <ul>
                            <li><a href="#">admission</a></li>
                            <li><a href="#">results</a></li>
                            <li><a href="#">academics</a></li>
                            <li><a href="#">faculty</a></li>
                            <li><a href="#">news &amp; events</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 offset-md-1 col-sm-6 col-6 soci">
                        <h5>contact us</h5>
                        <div class="row soc">
                            <div class="col-md-2 col-sm-2 col-1">

                                <ul>
                                    <li><i class="fa fa-phone"></i></li>
                                    <li><i class="fa fa-envelope"></i></li>
                                    <li><i class="fa fa-location-arrow"></i></li>
                                </ul>
                            </div>
                            <div class="col-md-9 col-sm-8 col-8">
                                <ul>
                                    <li><a href="tel:+880-1112-333-444">+880-1112-333-444</a></li>
                                    <li><a href="mailto:Support@domain.com">Support@domain.com</a></li>
                                    <li><a href="#">Dhanmondi, Dhaka, Bangladesh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-1 col-sm-5 col-5">
                        <h5>find us</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.03694485038!2d90.36710723558421!3d23.747050044430356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2z4Kan4Ka-4Kao4Kau4Kao4KeN4Kah4Ka_LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1550813533531" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <footer id="copy">
            <div class="container text-center">
                <p>Copyright &copy; 2018 Pathshala Polytechnic Institute.Designed &amp; Developed by Creative IT Institute</p>
            </div>
        </footer>
        <!-- foot ends -->
        <!-- top to -->
        <div>
            <i class="fa fa-angle-up" id="return-to-top"></i>
        </div>


        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
    </body>

</html>
