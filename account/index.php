<!DOCTYPE html>

<?php

include "../config/connection.php";

session_start();

// For logout

if(isset($_GET["sign"]))
{
    $sign=$_GET["sign"];
    if($sign=="out")
    {
        unset($_SESSION["Member_Data_2020"]);
        
        header("location:../login.php");}
    }
    

// For checking if the user logged in

if(isset($_SESSION['Member_Data_2020']) == false){
    header("Location:../login.php");
}else{
    ?>


                                <?php

                                $sql5="SELECT * from members where username='$_SESSION[Member_Data_2020]'";
                                $result5=$conn->query($sql5);


                                while ($row5 = $result5->fetch_assoc()) {
                                $member_id=$row5['member_id'];
                                $f_name=$row5['f_name'];
                                $dob=$row5['dob'];
                                $gender=$row5['gender'];
                                $country=$row5['country'];
                                $city=$row5['city'];
                                $email=$row5['email'];
                                $username=$row5['username'];
                                $password=$row5['password'];
                                $programing=$row5['programing'];
                                $profile=$row5['profile'];

                                }

                                ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Dating - Site :: My Account</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

    <style type="">
        .try {
                float:  left;
                width:  100px;
                height: 100px;
                background-size: cover;
            }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php?home"><img src=".././img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="index.php"><button type="submit" class="form-control btn roberto-btn w-100"><?php echo $username ?> </button></a></li>
                                    <li><a href="index.php?home">Home</a></li>
                                    <li><a href="index.php?matches">Matches</a></li>
                                    <li><a href="#">My Account</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php?profile">- Profile</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">My Request</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php?Request">- Sent</a></li>
                                            <li><a href="index.php?inbox">- Inbox</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="?sign=out" id="logout">Log Out</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <?php
        if(isset($_GET['home']))
        {
            include("home.php");
        }

        elseif(isset($_GET['matches']))
        {           
            include("matches.php");
        }

        elseif(isset($_GET['inbox']))
        {           
            include("inbox.php");
        }

        elseif(isset($_GET['Request']))
        {           
            include("request.php");
        }

        elseif(isset($_GET['match_view']))
        {           
            include("user-view.php");
        }

        elseif(isset($_GET['about']))
        {           
            include("about.php");
        }

        elseif(isset($_GET['review']))
        {           
            include("new_review.php");      
        }

        elseif(isset($_GET['profile']))
        {           
            include("profile.php");
        }

        elseif(isset($_GET['update_profile']))
        {           
            include("update_profile.php");
        }
        
        elseif(isset($_GET['update_profile_data']))
        {           
            include("update_profile_data.php");  
        }

        elseif(isset($_GET['search_data']))
        {           
            include("user_search.php");  
        }

        elseif(isset($_GET['']))
        {           
            include("");  
        }
         
                
        else
        {
            include("home.php");
        }

    ?> 



    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="../img/core-img/logo.jpg" alt=""></a>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="index.php?about"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter gor get notification about new updates.</span>

                            <!-- Newsletter Form -->
                            <form action="index.html" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="#" target="_blank">Green Apartments</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="../js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>

</body>

</html>
                            <?php

                                }

                            ?>