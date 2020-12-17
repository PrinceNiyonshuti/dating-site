    <?php 

    $search_member_id=$_POST['search_member_id'];

    $sql5=" SELECT * from members where member_id='$search_member_id' ";
        $result5=$conn->query($sql5);

        $a=1;

        while ($row5 = $result5->fetch_assoc()) {
        $rec_member_id=$row5['member_id'];
        $rec_f_name=$row5['f_name'];
        $rec_dob=$row5['dob'];
        $rec_gender=$row5['gender'];
        $rec_country=$row5['country'];
        $rec_city=$row5['city'];
        $rec_email=$row5['email'];
        $rec_username=$row5['username'];
        $rec_programing=$row5['programing'];
        $rec_profile=$row5['profile'];

        if (empty($rec_profile)) {
            $fileName = "avatar-06.jpg";
        } else {
            $fileName = "$rec_profile";
        }

        $id1="Mine".$a;
        $id2="Mine1".$a;

        }

    ?>

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/16.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title"><?php echo $rec_username ?> Information</h2>
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
                <div class="col-12 col-lg-8">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img style="width: 100%;height: 500px;" src="client_profile_data/<?php echo $fileName ?>" alt="<?php echo $username ?>" class="d-block w-100" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Room Features -->
                        <div class="room-features-area d-flex flex-wrap mb-50">
                            <h6>Country : <span><?php echo $rec_country ?></span></h6>
                            <h6>City: <span><?php echo $rec_city ?></span></h6>
                            <h6>Gender: <span><?php echo $rec_gender ?></span></h6>
                            <h6>Date Of Birth: <span><?php echo $rec_dob ?> </span></h6>
                        </div>

                        <p><b> <?php echo $rec_f_name ?> </b> is <?php echo $rec_gender ?> who is passionated in the <b><?php echo $rec_programing ?></b> language to develop the carrier and is out looking for a match.
                        </p>
                        <p> <b> <?php echo $rec_f_name ?> </b> Personal Info
                            <br>
                            E-mail : <b> <?php echo $rec_email ?> </b>
                            <br>
                            Programing Language : <b> <?php echo $rec_programing ?> </b>
                            <br>
                            Gender : <b> <?php echo $rec_gender ?> </b>
                        </p>
                    </div>


                </div>

                <div class="col-12 col-lg-12">
                    <div class="roberto-contact-form mb-100">
                        <h3 for="checkInDate">Leave a message</h3>
                        <form action="index.php?review" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div style="display: none;">
                                       <input type="text" name="member_id" id="member_id" value="<?php echo $member_id ?>">
                                       <input type="text" name="email" id="email" value="<?php echo $email ?>">
                                       <input type="text" name="f_name" id="f_name" value="<?php echo $f_name ?>">
                                       <input type="text" name="city" id="city" value="<?php echo $city ?>">
                                       <input type="text" name="rec_member_id" id="rec_member_id" value="<?php echo $rec_member_id ?>">
                                       <input type="text" name="rec_email" id="rec_email" value="<?php echo $rec_email ?>">  
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="message" id="message" class="form-control mb-30" placeholder="Your love Message"></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" class="btn roberto-btn mt-10">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->