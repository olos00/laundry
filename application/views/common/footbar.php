<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/cloth.png">
    <title>Laundry</title>


    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">

    <!-- Custom JS -->
    <script src="assets/js/common.js"></script>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader : if any-->

    <!-- (+) Main Wrapper : Header -->
    <div id="main-wrapper">
        <!-- (+) Header -->
        <nav class="navbar navbar-fixed-top navbar-expand-md navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#myNavbar">
                        <span class="fa fa-angle-down fa-lg"></span>
                    </button>

                    <a href="#">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="assets/icons/cloth.png" alt="homepage" class="header-icon" />
                            </div>

                            <div class=" col-xs-offset-1 col-md-8 navbar-brand"> Laundry </div>
                        </div>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active" id="sidebarToggle">
                            <a href="#">
                                <span class="fa fa-bars fa-lg"></span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <span class="fa fa-sign-out fa-lg"> &nbsp;</span> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- (-) Header -->

        <!-- (+) Sidebar -->
        <div class="nav-side-menu" id="sidebar">
            <div class="navbar-sidebar-block"></div>
            <div class="brand">                               
                <span class="fa fa-dashboard fa-lg"> &nbsp; Dashboard </span>  
                <i class="fa fa-angle-double-down fa-2x btn toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            </div>
                

            <!-- Item List -->
            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">

                    <!-- Itemlist - 1 -->
                    <li  data-toggle="collapse" data-target="#sidebar-add" class="collapsed active">
                        <a href="#"><i class="fa fa fa-plus fa-lg"></i>
                            Add  <span class="label label-rouded label-warning pull-right">3</span> 
                            <span class="arrow"></span>
                        </a>
                    </li>

                    <ul class="sub-menu collapse" id="sidebar-add">
                        <!-- Items -->
                        <li class="active"><a href="">Employee </a></li>
                        <li><a href="">Service </a></li>
                        <li><a href="">Item </a></li>
                    </ul>

                    <li>
                        <a href="#">
                        <i class="fa fa-user fa-lg"></i> View Employee
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fa fa-list-alt fa-lg"></i> View Item
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fa fa-book fa-lg"></i> View Order History
                        </a>
                    </li>
            
                    <!-- Itemlist - 3 -->
                    <li  data-toggle="collapse" data-target="#sidebar-chart" class="collapsed">
                    <a href="#"><i class="fa fa fa-bar-chart fa-lg"></i>
                            Charts  <span class="label label-rouded label-warning pull-right">2</span> 
                        <span class="arrow"></span>
                    </a>
                    </li>
                    <ul class="sub-menu collapse" id="sidebar-chart">
                        <!-- Items -->
                        <li class="active"><a href="">Report </a></li>
                        <li><a href="">Reviews </a></li>
                    </ul>
                </ul>
            </div>
        </div>
        <!-- (-) Sidebar -->

        <!-- (+) Footer -->
        <footer class="navbar-fixed-bottom">
            <div class="text-center jumbotron">  <span>&copy; 2018 | VRV Embassy | All rights reserved. </span> </div>
        </footer>
        <!-- (-) Footer -->
        
    </div> 
    <!-- (-) Main Wrapper -->
    
    <!-- (+) Page Wrapper : Container/Body -->
    <div class="page-wrapper">
        <div id="main" class="container">