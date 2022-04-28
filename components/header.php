<?php


require_once './php/component.php';
require_once './php/fetchitems.php';
$database = new getData();
session_start();





?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fruits - eCommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/icofont.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/css/pogo-slider.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/validation.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   

    <header>
        <div class="header-bottom wrapper-padding-2 res-header-sm">
            <div class="container-fluid">
                <div class="header-bottom-wrapper">
                    <div class="logo-2 ptb-50">
                        <a href="index.html">
                            <img src="images/" alt="">
                        </a>
                    </div>
                    <div class="menu-style-2 handicraft-menu menu-hover">
                        <nav>
                            <ul>
                                <li><a href="index.php">home</a>
                                </li>
                                <li><a href="about.php">About</a>
                                </li>
                                <li><a href="shopgrid.php">Our Products</a>

                                </li>
                                <li><a href="faq.php">FAQ</a>

                                </li>
                                <li><a href="contact.php">contact</a></li>
                            </ul>

                        </nav>
                        
                        <div class='alert alert-success' id='success-alert' style='display:none'>item added to cart</div>
                            <div class='alert alert-danger' id='danger-alert' style='display:none'>item removed</div>
                    </div>
                    <div class="handicraft-search-cart">
                        <div class="handicraft-search">
                            <i class="search-toggle">
                                <i class="pe-7s-search s-open"></i>
                                <i class="pe-7s-close s-close"></i>
                            </i>
                            <div class="handicraft-content">
                                <form action="searchhandler.php" method="POST">
                                    <input name='search' placeholder="Search" type="text">
                                </form>
                            </div>
                        </div>
                        <div class='header-cart-4'>

                            <div class="col userbox">
                                <?php
                                if (isset($_SESSION['username'])) {
                                    echo '<div class="dropdown">
                            <button class="userbuttton" type="button" data-toggle="dropdown"><i class="icofont icofont-user-alt-3"></i>
                           </button> <span class="upcaret"></span>
                           <ul class="single-dropdownbox">
                           <li><a href="#">Hi,';
                                    echo $_SESSION['username'];
                                    echo '</a></li>
                           <li><a href="signup.php">My Account</a></li>
                           <li><a href="cart.php">My History</a></li>
                           <li><a href="wishlist.php">Call Manager</a></li>
                           <li><a href="./php/logout.php">Logout</a></li>
                           <li><a href="checkout.php">Checkout</a></li>
                           <li><a href="wishlist.php">Your wishlist</a></li>
                       </ul>
                          </div>';
                                } else {
                                    echo '<div class="dropdown">
                        <button class="userbuttton" type="button" data-toggle="dropdown"><i class="icofont icofont-user-alt-3"></i>
                       </button> <span class="upcaret"></span>
                       <ul class="single-dropdownbox">
                       <li><a href="login.php"> LOGIN</a></li>
                   </ul>
                       </div>';
                                }

                                ?>
                            </div>
                        </div>
                        <div class="header-cart-4">
                            <a class="icon-cart" href="#">
                            <i class="icofont icofont-cart-alt"></i>
                                            <span class="handicraft-count"></span>
                            </a>
                      
                            <ul class="cart-dropdown" id='cartmodall'>
                          
                             
                        </ul>
                       
                       
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="mobile-menu-area handicraft-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="index.php">HOME</a>
                                    </li>
                                    <li><a href="about.php">About</a>
                                    <li><a>Get Started</a>
                                        <ul>
                                            <li><a href="login.php">login</a></li>
                                            <li><a href="signup.php">register</a></li>
                                            <li><a href="cart.php">cart page</a></li>
                                            <li><a href="checkout.php">checkout</a></li>
                                            <li><a href="wishlist.php">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shopgrid.php">Our Products</a>

                                    </li>

                                    </li>
                                    <li><a href="contact.php"> Contact </a></li>
                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='overlayshare' id='overlayshare'>
            <div class='sharemodal' id='sharemodal'>
                <p>Share this item</p>
                <div class="buttonsdiv">
                    <button><i class="fa fa-facebook"></i></button>
                    <button><i class="fa fa-instagram"></i></button>
                    <button><i class="fa fa-twitter"></i></button>
                    <button><i class="fa fa-whatsapp"></i></button>
                </div>
            </div>

        </div>
        <!-- Button trigger modal -->


    </header>