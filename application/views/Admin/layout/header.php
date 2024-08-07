<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>ADMIN PANEL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?=base_url('Assets/Admin/css/bootstrap.min.css')?>" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?=base_url('Assets/Admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?=base_url('Assets/Admin/css/style-responsive.css')?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?=base_url('Assets/Admin///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')?>' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?=base_url('Assets/Admin/css/font.css')?>" type="text/css"/>
<link href="<?=base_url('Assets/Admin/css/font-awesome.css')?>" rel="stylesheet"> 
<link rel="stylesheet" href="<?=base_url('Assets/Admin/css/morris.css')?>" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?=base_url('Assets/Admin/css/monthly.css')?>">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?=base_url('Assets/Admin/js/jquery2.0.3.min.js')?>"></script>
<script src="<?=base_url('Assets/Admin/js/raphael-min.js')?>"></script>
<script src="<?=base_url('Assets/Admin/js/morris.js')?>"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="<?=base_url('Admin_controller/home')?>" class="logo">
ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="<?=base_url('Admin_controller/home')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
               
                
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('Admin_controller/addcat')?>">Add Categories</a></li>
                        <li><a href="<?=base_url('Admin_controller/managecat')?>">Manage Categories</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>Product</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('Admin_controller/add_product')?>">Add Product</a></li>
                        <li><a href="<?=base_url('Admin_controller/manage_product')?>">Manage Product</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>User</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('Admin_controller/total_users')?>">User Details</a></li>
                        <li><a href="<?php echo base_url('Admin_controller/all_payments_details') ?>">Payment Details</a></li>
                    </ul>
                </li>
               
             <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>Complaints</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('Admin_controller/pending_complaints')?>">Pending Complaints</a></li>
                        <li><a href="<?=base_url('Admin_controller/all_complaints')?>">All Complaints</a></li>
                    </ul>
                </li>
            
                  <li class="sub-menu">
                    <a href="">
                        <i class=" fa fa-cog"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=base_url('Admin_controller/profile')?>">MY Profile</a></li>
                        <li><a href="<?=base_url('Admin_controller/logout')?>">Log Out</a></li>
                    </ul>
                </li>
                
               
               
               
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">












































