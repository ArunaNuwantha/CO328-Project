<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="<?php echo e(url('/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(url('/assets/vendor/fonts/circular-std/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('/assets/libs/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/assets/vendor/charts/chartist-bundle/chartist.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/assets/vendor/charts/morris-bundle/morris.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/assets/vendor/charts/c3charts/c3.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
    .navbar-custom {
        color: #FFFFFF;
        background-color: #1399C6;
    }
    </style>
</head>
<body>
    <div style="background-image: url('assets/images/uoj.jpg');background-repeat:no-repeat;
background-position: center center; background-attachment: fixed; background-size: cover;">
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper p-3 mb-2  text-white" id="app">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img class="logo-img" style="width:30px; height:36px; float:left; border-radius:55%; " src="../assets/images/BMS.png" >
                        <p class="text-dark">BMS</p> 

                 
                    </a>
                </div>




                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav"> </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>"><p class="text-white">Login</p></a></li>
                            <li><a href="<?php echo e(route('register')); ?>"><p class="text-white">Register</p></a></li>
                     
                        <?php else: ?>
                        <?php if(Auth::user()->admin == 1): ?>
                        <li><a href="/home"><p class="text-white">Home</p></a></li>
                        <li><a href="<?php echo e(url('/Profile')); ?>"><p class="text-white">Profile</p></a></li>
                        <?php else: ?>
                        <li><a href="/home" ><p class="text-white">Home</p></a></li>
                        <li><a href="<?php echo e(url('/Profile')); ?>"  v-pre style="position:relative; padding-left:50px;"><p class="text-white"><img src="/uploads/profilepics/<?php echo e(Auth::user()->profilepic); ?>" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"><?php echo e(Auth::user()->name); ?></p></a></li>
                        <!-- <li><a class="nav-link" href="/home"><p class="text-white">&nbspHome</p></a></li>
                        <li><a class="nav-link" href="<?php echo e(url('/Profile')); ?>"><p class="text-white">&nbspProfile</p></a></li> -->
                        
                        <?php endif; ?>
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            
                                            <p class="text-white">Logout</p>
                                        </a>
                                        

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li> 
                             <!-- <li class="dropdown">
                                <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre style="position:relative; padding-left:50px;">
                                    <img src="/uploads/profilepics/<?php echo e(Auth::user()->profilepic); ?>" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                    <p class="text-white"><?php echo e(Auth::user()->name); ?></p>
                                </a>

                                <ul class="dropdown-menu">
                                
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li> -->
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div>
            
                <div class="container-fluid dashboard-content">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="ml-auto col-xl-6 col-lg-6 col-md-6-center col-sm-12 col-28">
                             Copyright ?? 2018 Concept. All rights reserved.Created by team X</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-28">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="<?php echo e(url('/aboutUs')); ?>">About</a>
                                <a href="<?php echo e(url('/contactUs')); ?>">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</div>
</body>
</html>
