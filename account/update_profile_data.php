
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../asset/css/normalize.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/themify-icons.css">
    <link rel="stylesheet" href="../asset/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="../asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="../asset/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="../asset/css/bootstrap-select.less"> --> 
    <link rel="stylesheet" href="../asset/css/style.css"> 

    <script src="../asset/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../asset/js/popper.min.js"></script>
    <script src="../asset/js/plugins.js"></script>
    <script src="../asset/js/main.js"></script>

  
    <script src="../js/princeop.js"></script>

    <!--Flot Chart-->

    <script src="../asset/js/lib/flot-chart/jquery.flot.js"></script>
    <script src="../asset/js/lib/flot-chart/jquery.flot.spline.js"></script>

    <script src="../asset/js/widgets.js"></script>
 
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>


<body>

<?php
    include "../config/connection.php";

    $member_id = $_POST['member_id'];
    $f_name=$_POST['f_name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $prog=$_POST['prog'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    

if(empty($_FILES['profile']['name'])||empty($gender)||empty($username)||empty($member_id)||empty($prog)||empty($city)) {

    ?>
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            <span class="badge badge-pill badge-danger">Alert</span> You have not filled all fields .
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="" onclick="location.reload();">
            <span aria-hidden="true">&times;</span>
            </button>
            <br>
        </div>
    <?php  
}
else
{

    
    $profile=$_FILES['profile'];
    $file_name = $_FILES['profile']['name'];    
    $file_location = $_FILES['profile']['tmp_name'];
    $new_file_name = "$file_name";


    if(move_uploaded_file($file_location, "client_profile_data/" . $new_file_name)){
                        
        $sql=" UPDATE members SET f_name='$f_name',dob='$dob',gender='$gender',country='$country',city='$city',email='$email',username='$username',password='$password',programing='$prog',profile='$new_file_name' WHERE member_id='$member_id' ";

                if ($conn->query($sql)===TRUE) 
                {
                    ?>
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <a href="index.php?profile"><span class="badge badge-pill badge-success">Done</span> You have succeffuly update Your Data.
                        <button type="button" class="close"  aria-label="Close" style=""
                        >
                        <span aria-hidden="true">&times;</span>
                        </button></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <?php

                }
                else
                {
                        ?>
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        <a href="index.php?update_profile"><span class="badge badge-pill badge-danger">Alert</span> Something Went Wrong try to Reflesh the page .
                        
                        <button type="button" class="close"  style="" >
                        <span aria-hidden="true">&times;</span>
                        </button></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <?php
                }
    }
 }
                        
 ?>



 

</body>
</html>