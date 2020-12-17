 <style type="text/css">
    .input-group p{
        padding: 5px;
        font-size: 17px;
    }
</style>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/16.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">My Profile Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <div class="col-lg-12 ">
                    <!-- Hotel Reservation Area -->

                    <div id="Message2" style="position:fixed;z-index:500;margin-top:-2%;"></div>
                        <div id="loader_agenda_data_post"></div>
                        <div class="row" id="loader_agenda_data">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"> Profile Card</h3>
                                        </div>
                                        <div id="profile_complete_message">
                                        </div>
                                        <hr>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        
                                                        <?php
                                                            if (empty($profile)) {
                                                                $fileName = "avatar-06.jpg";
                                                            } else {
                                                                $fileName = "$profile";
                                                            }
                                                            
                                                        ?>
                                                        <img class="align-self-center  mr-3" style="height:400px;" src="client_profile_data/<?php echo $fileName ?>" alt="<?php echo $username ?>" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-group">
                                                        <p><strong>First Name</strong>: <?php echo $f_name ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Date Of Birth</strong>: <?php echo $dob ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Country</strong>: <?php echo $country ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>City</strong>: <?php echo $city ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Gender</strong>: <?php echo $gender ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Programing </strong>: <?php echo $programing ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Username</strong>: <?php echo $username ?></p>
                                                    </div>

                                                    <div class="input-group">
                                                        <p><strong>Email</strong>: <?php echo $email ?></p>
                                                    </div>
                                                    
                                                    <a href="index.php?update_profile">
                                                        <div class="au-message__item-time">
                                                            <p>Edit Profile</p>
                                                        </div>
                                                    </a>


                                                </div>
                                            </div>
                                        <div>
                                     </div>
                                </div>
                            <br>
                            <!-- Hotel Reservation Area -->
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Rooms Area End -->
    