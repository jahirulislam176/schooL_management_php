<?php
require 'session_view.php';
require 'cookie_check.php';
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="dashboard_asset/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="uploads/user/<?php echo $_SESSION['user_img'];?>" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo  $_SESSION['name'];?></p>
          <p class="app-sidebar__user-designation">
              <?php
              if( $_SESSION['role']==1){
                  echo 'Admin';
              }
              elseif ($_SESSION['role']==2) {
                  echo 'Moderator';

          }
           else{
                  echo 'Author';
              }

              ?>





          </p>
        </div>
      </div>
      <ul class="app-menu">
          <li><a class="app-menu__item active" href="admin.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Logo</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item" href="logo.php"><i class="icon fa fa-circle-o"></i> View logo</a></li>
              <li><a class="treeview-item" href="add_logo.php" rel="noopener"><i class="icon fa fa-circle-o"></i> Add Logo</a></li>

          </ul>
        </li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Gallery images</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">

              <li><a class="treeview-item" href="img_add.php" rel="noopener"><i class="icon fa fa-circle-o"></i> Add image</a></li>
              <li><a class="treeview-item" href="image.php"><i class="icon fa fa-circle-o"></i> view images</a></li>

          </ul>

             <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">PRINCIPAL Work</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">

             <li><a class="treeview-item" href="add_p.php" rel="noopener"><i class="icon fa fa-circle-o"></i> Add principal</a></li>
             <li><a class="treeview-item" href="principal.php"><i class="icon fa fa-circle-o"></i> view principal</a></li>

          </ul>

                   <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">STUDENT AREA</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">

             <li><a class="treeview-item" href="s_add.php" rel="noopener"><i class="icon fa fa-circle-o"></i> Add student</a></li>
             <li><a class="treeview-item" href="student.php"><i class="icon fa fa-circle-o"></i> view student</a></li>

          </ul>


        <li><a class="app-menu__item" href="message_view.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Messages</span></a></li>
        <?php
        if($_SESSION['role']==1 || $_SESSION['role']==2){



        ?>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>

          <ul class="treeview-menu">
              <li><a class="treeview-item" href="user.php"><i class="icon fa fa-user-o"></i> view</a></li>
              <li><a class="treeview-item" href="Register.php"><i class="icon fa fa-user-plus"></i> Add user</a></li>
               <?php } ?>



            <!--<li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
            -->
          </ul>


        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">Banner</span><i class="treeview-indicator fa fa-photo"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item" href="add_banner.php"><i class="icon fa fa-camera"></i> Add Banner</a></li>
              <li><a class="treeview-item" href="banner.php"><i class="icon fa fa-file-img-o"></i> view banner</a></li>
          </ul>
        </li>


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">Department</span><i class="treeview-indicator fa fa-photo"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item" href="add_department.php"><i class="icon fa fa-camera"></i> Add Department</a></li>
              <li><a class="treeview-item" href="view_banner.php"><i class="icon fa fa-file-img-o"></i> view Department</a></li>
          </ul>
        </li>


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">University Info</span><i class="treeview-indicator fa fa-photo"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item" href="add_u_info.php"><i class="icon fa fa-camera"></i> Add Department</a></li>
              <li><a class="treeview-item" href="un_info.php"><i class="icon fa fa-file-img-o"></i> view Department</a></li>
          </ul>
        </li>



        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">News</span><i class="treeview-indicator fa fa-photo"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item" href="add_news.php"><i class="icon fa fa-camera"></i> Add News</a></li>
              <li><a class="treeview-item" href="banner.php"><i class="icon fa fa-file-img-o"></i> View News</a></li>
          </ul>
        </li>



        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Welcome post</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item" href="welcome.php"><i class="icon fa fa-circle-o"></i> view post</a></li>
              <li><a class="treeview-item" href="addwelcome.php"><i class="icon fa fa-circle-o"></i> Add post</a></li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Department</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item" href="dept.php"><i class="icon fa fa-circle-o"></i> View Department</a></li>
              <li><a class="treeview-item" href="add_dept.php" rel="noopener"><i class="icon fa fa-circle-o"></i> Add Department</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>

         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Notice</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
              <li><a class="treeview-item" href="notice.php"><i class="icon fa fa-circle-o"></i> View Notice</a></li>
              <li><a class="treeview-item" href="add_notice.php" rel="noopener"><i class="icon fa fa-circle-o"></i> Add Notice</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>


          </ul>
        </li>
        <li><a class="app-menu__item" href="logout.php"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Logout</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
