    
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/bg-img/16.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Searched User </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Search</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
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
                    <!-- Single Room Area -->

                    <?php
                        $s_username=$_POST['s_username'];

                        if (empty($s_username)) {
                            ?>
                            <h2>No User Available</h2>
                            <?php
                        }else{
                                                

                            $limit = 5;  
                            if (isset($_GET["pagination"])) { $pagination  = $_GET["pagination"]; } else { $pagination=1; };  
                            $start_from = ($pagination-1) * $limit;

                            $sql5="SELECT * from members where programing='$programing' and member_id!='$member_id' and username LIKE '%$s_username%' LIMIT $start_from, $limit ";
                            $result5=$conn->query($sql5);

                            $a=1;

                            while ($row5 = $result5->fetch_assoc()) {
                            $member_id=$row5['member_id'];
                            $username=$row5['username'];
                            $f_name=$row5['f_name'];
                            $programing=$row5['programing'];
                            $country=$row5['country'];
                            $city=$row5['city'];
                            $gender=$row5['gender'];
                            $dob=$row5['dob'];
                            $profile=$row5['profile'];

                            if (empty($profile)) {
                                $fileName = "avatar-06.jpg";
                            } else {
                                $fileName = "$profile";
                            }

                            $id1="Mine".$a;
                            $id2="Mine1".$a;

                        ?> 
                        <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Room Thumbnail -->
                            <div class="room-thumbnail">
                                <img style="width: 100%;height: 270px" src="client_profile_data/<?php echo $fileName ?>" alt="<?php echo $username ?>">
                            </div>
                            <!-- Room Content -->
                            <div class="room-content">
                                <h2><?php echo $username ?></h2>
                                <h4><?php echo $programing ?></h4>
                                <div class="room-feature">
                                    <h6>Country: <span><?php echo $country ?></span></h6>
                                    <h6>city: <span><?php echo $city ?></span></h6>
                                    <h6>Gender: <span><?php echo $gender ?></span></h6>
                                    <h6>DOB: <span><?php echo $dob ?></span></h6>
                                </div>
                                <form action="index.php?match_view" method="post">
                                    <input style="display: none;" type="text" name="search_member_id" id="search_member_id" value="<?php echo $member_id ?>">
                                    <button class="btn " type="submit" >View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <?php $a++; } } ?>

                        <!-- Pagination -->
                        <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                                <?php  
                                    $sql = "SELECT COUNT(member_id) FROM members where programing='$programing' and username='$s_username' and member_id!='$member_id' ";  
                                    $rs_result = mysqli_query($conn, $sql);  
                                    $row = mysqli_fetch_row($rs_result);  
                                    $total_records = $row[0];  
                                    $total_pages = ceil($total_records / $limit);  
                                    $pagLink = "<ul class='pagination'>";  
                                    for ($i=1; $i<=$total_pages; $i++) {  
                                                 $pagLink .= "<li class='page-item'><a class='page-link' href='index.php?room&pagination=".$i."'>".$i."</a></li>";  
                                    };  
                                    echo $pagLink . "</ul>";  
                                ?>
                        </nav>

                     
                                                                    
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="index.php?search_data" method="post">
                            <div class="form-group mb-30">
                                <label for="guests">Guests</label>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="s_username" id="s_username" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn roberto-btn w-100">Search </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Rooms Area End -->