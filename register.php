<!DOCTYPE html>
<html lang="en">
<?php
include "config/connection.php";
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dating Site">
    <meta name="author" content="Dating Site">
    <meta name="keywords" content="Dating Site">
  <!-- Title -->
    <title>Dating - Site</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

    <script>
        function disableSubmit() {
        document.getElementById("submit").display = true;
        document.getElementById('cat').style.display = 'none';
        }

        function activateButton(element) {

            if(element.checked) {
            document.getElementById("submit").disabled = false;
            document.getElementById('cat').style.display = '';
            }
            else  {
            document.getElementById("submit").disabled = true;
            document.getElementById('cat').style.display = 'none';
            }
        }

    </script>

</head>

<body class="animsition" style="overflow:auto;" bgcolor="red" onload="disableSubmit()" >
    <div class="page-content--bge5">
        <div class="page-content">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="./img/core-img/logo.png" alt="">
                            </a>
                        </div>
                        
                        <div class="login-form">
                            <form action="#/" onsubmit="new_client();return false;" method="post">

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="au-input au-input--full" type="text" id="f_name" name="f_name" placeholder="Your Names" required autofocus >
                                </div>

                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input class="au-input au-input--full" type="date" id="dob" name="dob"  required autofocus >
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <select  id="gender" id="gender" class="form-control">
                                       <option value="">Please Select Gender </option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Country</label>
                                    <input class="au-input au-input--full" type="text" id="country" name="country" placeholder="Your Country" required autofocus >
                                </div>

                                <div class="form-group">
                                    <label>City</label>
                                    <input class="au-input au-input--full" type="text" id="city" name="city" placeholder="Your City" required autofocus >
                                </div>
                                
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="au-input au-input--full" type="text" id="email" name="email" placeholder="Your Email" required autofocus >
                                </div>

                                <div class="form-group">
                                    <label>Programing Language</label>
                                    <select  id="prog" id="prog" class="form-control">
                                       <option value="">Please Select Gender </option>
                                       <option value="C Programing">C Programing</option>
                                       <option value="Python">Python</option>
                                       <option value="Swift">Swift</option>
                                    </select>
                                </div>
        
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" id="username" name="username" placeholder="Your UserName" required autofocus >
                                </div>
                                
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password" required autofocus  >
                                </div>

                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">  I Agree <a href="index.php?Terms-And-Policy"> Terms and Policy</a>
                                    </label>   
                                </div>

                                <div id="new_client_message">
                                </div>
                                <div id="cat">
                                    <input class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="Register" id="submit">
                                </div>
                                 
                            </form>
                            <div class="register-link">
                                <p>
                                    Do you have account?
                                    <a href="login.php">Sign In</a>
                                </p>
                                <p>
                                    Go Back
                                    <a href="index.php">Home</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        var check = function() {
          if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Password Match';
          } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password is Not Matching';
          }
        }
    </script>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
<!-- end document-->