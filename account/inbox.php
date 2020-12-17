    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/16.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Your Inbox (Received request)</h2>
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
                        <?php
                            $sql5=" SELECT * FROM request,members WHERE request.receiver_id=members.member_id AND request.receiver_id='$member_id' ";
                                $result5=$conn->query($sql5);

                                    $a=1;

                                    while ($row5 = $result5->fetch_assoc()) {
                                    $username=$row5['username'];
                                    $f_name=$row5['f_name'];
                                    $programing=$row5['programing'];
                                    $country=$row5['country'];
                                    $city=$row5['city'];
                                    $gender=$row5['gender'];
                                    $dob=$row5['dob'];
                                    $profile=$row5['profile'];
                                    $created_date=$row5['created_date'];

                                        $id1="Mine".$a;
                                        $id2="Mine1".$a;

                                        
                        ?>
                    <div class="card">
                      <div class="card-header">
                         Request Received on <strong><?php echo $created_date ?></strong> 
                      </div>
                      <div class="card-body row">
                        <div class="col-4">
                            <div class="room-thumbnail">
                                <img style="width: 100%;height: 200px" src="client_profile_data/<?php echo $profile ?>" alt="<?php echo $username ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            
                            <p><strong>Username </strong> : <?php echo $username ?></p>
                            <p><strong>First Name </strong> : <?php echo $f_name ?></p>
                            <p><strong>Programing</strong> : <?php echo $programing ?> </p>
                            <p><strong>Gender</strong> : <?php echo $gender ?> </p>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p><strong>Country</strong> : <?php echo $country ?></p>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>City</strong> : <?php echo $city ?></p>
                                </div>
                            </div>
                        </div>                 
                      </div>
                    </div>
                    <br>
                    <?php 
                      }
                      ?>
                    <!-- Hotel Reservation Area -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Rooms Area End -->
    