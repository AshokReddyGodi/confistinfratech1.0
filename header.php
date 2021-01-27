<?php
    require_once("config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CONFIST INFRATECH Construction Company</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/settings.css" rel="stylesheet" type="text/css">
    <link href="css/layers.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <body>

        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header / Header Style Two-->
            <header class="main-header header-style-two">
                <!--Sticky Header-->
                <div class="sticky-header">
                    <!-- Header Top -->
                    <div class="header-top">
                        <div class="auto-container">
                            <div class="inner-container clearfix">

                                <!--Top Left-->
                                <div class="top-left">
                                    <ul class="links clearfix">
                                        <li><a href="tel:9686160289"><span class="icon fa fa-phone"></span>+ 91 9686160289</a></li>
                                        <li><a href="mailto:confistinfratech@gmail.com"><span class="icon fa fa-envelope-o"></span>confistinfratech@gmail.com</a></li>
                                    </ul>
                                </div>

                                <!--Top Right-->
                                <div class="top-right clearfix">
                                    <!--social-icon-->
                                    <div class="social-icon">
                                        <ul class="clearfix">
                                            <li>Stay Connected :</li>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- Header Top End -->
                    <div class="auto-container">
                        <div class="sticky-inner-container clearfix">
                            <!--Logo-->
                            <div class="logo pull-left">
                                <a href="<?php echo BASE_PATH;?>" class="img-responsive"><img src="images/confist-small.png" alt="" title=""></a>
                            </div>

                            <!--Right Col-->
                            <div class="right-col pull-right">
                                <!-- Main Menu -->
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a href="<?php echo BASE_PATH;?>">Home</a></li>
                                            <li class="dropdown"><a href="#">About Us</a>
                                                <ul>
                                                    <li><a href="<?php echo BASE_PATH."/about-us"?>">About Us</a></li>
                                                    <li><a href="<?php echo BASE_PATH."/about-us"?>">Company Overview</a></li>
                                                    <li><a href="<?php echo BASE_PATH."/about-us"?>">Team</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="<?php echo BASE_PATH."/services"?>">All Services</a></li>
                                                    <li><a href="#">Construction Work</a></li>
                                                    <li><a href="#">Solar Plants</a></li>
                                                    <li><a href="#">Heat Pumps</a></li>
                                                    <li><a href="#">Industrial RO Water Purifier</a></li>
                                                    <li><a href="#">Fabrication</a></li>
                                                    <li><a href="#">Real Estate</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="<?php echo BASE_PATH."/contact-us"?>">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->

                                <!--Outer Box-->
                                <div class="outer-box">
                                    <!--Search Box-->
                                    <div class="search-box-outer">
                                        <div class="dropdown">
                                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu4">
                                                <li class="panel-outer">
                                                    <div class="form-container">
                                                        <form method="post" action="blog.html">
                                                            <div class="form-group">
                                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End Sticky Header-->

            </header>
            <!--End Main Header -->
