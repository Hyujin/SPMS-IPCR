<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="shortcut icon" href="<?php echo e(url('images/Logo.png')); ?>">

  <title>IPCR</title>
  
<!-- <?php echo e(asset('images/logos/trace_logo.ico')); ?> -->
  <!-- Bootstrap CSS -->
  <link href="<?php echo e(asset('theme/nice/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo e(asset('theme/nice/css/bootstrap-theme.css')); ?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo e(asset('theme/nice/css/elegant-icons-style.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('theme/nice/css/font-awesome.min.css')); ?>" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo e(asset('theme/nice/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('theme/nice/assets/fullcalendar/fullcalendar/fullcalendar.css')); ?>" rel="stylesheet" />
  <!-- easy pie chart-->
  <!-- <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" /> -->
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo e(asset('theme/nice/css/owl.carousel.css')); ?>" type="text/css">
  <link href="<?php echo e(asset('theme/nice/css/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo e(asset('theme/nice/css/fullcalendar.css')); ?>">
  <link href="<?php echo e(asset('theme/nice/css/widgets.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/nice/css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/nice/css/style-responsive.css')); ?>" rel="stylesheet" />
  <!-- <link href="css/xcharts.min.css" rel=" stylesheet"> -->
  <link href="<?php echo e(asset('theme/nice/css/jquery-ui-1.10.4.min.css')); ?>" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

 
  <?php echo $__env->yieldContent('after-styles'); ?>

  <style>
  #content-wrapper {
    margin-left: 200px;
  }
  </style>

  <?php echo $__env->yieldContent('scripts'); ?>
  <script type="text/javascript">
      

  </script>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo"><span class="lite">Human Resource</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo e(asset('profile/no-user-photo.png')); ?>" width="30" height="30">
                            </span>
                            <span class="username">Sukarno</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?php echo e(URL::to('/home')); ?>"><i class="fa fa-edit"> </i> Test Form</a></li>
              <li><a class="" href="<?php echo e(URL::to('/ipcr')); ?>"> <i class="fa fa-user"></i> <span>IPCR</span></a></li>
              <li><a class="" href="#">Blank Page</a></li>
              <li><a class="" href="#">404 Error</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->