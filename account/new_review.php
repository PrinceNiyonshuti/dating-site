
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
    $email = $_POST['email'];
    $f_name = $_POST['f_name'];
    $city = $_POST['city'];
    $rec_member_id = $_POST['rec_member_id'];
    $rec_email = $_POST['rec_email'];
    $rec_message = $_POST['message'];
    $reg_date = date("Y-m-h h:i:s A");
    

if(empty($member_id)||empty($rec_member_id)||empty($email)||empty($rec_email)) {

    ?>
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        <a href="index.php?room"><span class="badge badge-pill badge-danger">Alert</span> You have not filled all fields .
                        
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
else
{


    $sql=" INSERT INTO request( sender_id, receiver_id, message, created_date)
            VALUE('$member_id','$rec_member_id','$rec_message','$reg_date')";

                if ($conn->query($sql)==TRUE) 
                {

                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = $email;
                $to = $rec_email;
                $subject = "Requesting Friendship";
                $message = $rec_message;
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);

                    ?>
                    <div class="roberto-rooms-area section-padding-100-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    <form action="index.php?room_view" method="post">
                                    <span class="badge badge-pill badge-success">Done</span> You have sent your message  .
                                        <input style="display: none;" type="text" name="search_member_id" value="<?php echo $rec_member_id ?>">
                                            <button  type="submit" class="close"  aria-label="Close" >
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </form>
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
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">Error</span>
                            Sorry Something went wrong. Please try again .
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <?php
                }
}
                        
 ?>



 

</body>
</html>