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

                    
                        <div class="row" id="loader_general_admin2">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-responsive table-responsive-data">
                                    <div id="Message2"></div>
                            

                                <div class="col-lg-12">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2"><b><?php echo $username ?></b> Update your profile</h3>
                                        </div>
                                        <div id="profile_complete_message">
                                        </div>
                                        <hr>
                                        <form action="index.php?update_profile_data" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <?php
                                                            if (empty($profile)) {
                                                                $fileName = "avatar-06.jpg";
                                                            } else {
                                                                $fileName = "$profile";
                                                            }
                                                            
                                                        ?>
                                                        <img class="align-self-center  mr-3" src="client_profile_data/<?php echo $fileName ?>" alt="<?php echo $username ?>" id="blah" alt="Card image cap" width="400px" height="400px">
                                                        <br><br>
                                                        <input type='file' id="profile" name="profile" onchange="readURL(this);" />
                                                    </div>
                                                    <input id="member_id" name="member_id" type="text" class="form-control cc-cvc" value="<?php echo $member_id ?>" style="display: none;" >
                                                </div>
                                                <div class="col-lg-7">

                                                    <label for="x_card_code" class="control-label mb-1">First Name</label>
                                                    <div class="input-group">
                                                        <input id="f_name" name="f_name" type="text" class="form-control cc-cvc" value="<?php echo $f_name ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Date Of Birth</label>
                                                    <div class="input-group">
                                                        <input id="dob" name="dob" type="date" class="form-control cc-cvc" value="<?php echo $dob ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Country</label>
                                                    <div class="input-group">
                                                        <input id="country" name="country" type="text" class="form-control cc-cvc" value="<?php echo $gender ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">City</label>
                                                    <div class="input-group">
                                                        <input id="city" name="city" type="text" class="form-control cc-cvc" value="<?php echo $country ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Gender</label>
                                                    <div class="input-group">
                                                        <select  id="gender" name="gender" class="form-control">
                                                            <option value="<?php echo $gender ?>"><?php echo $gender ?> </option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Programing</label>
                                                    <div class="input-group">
                                                        <input id="prog" name="prog" type="text" class="form-control cc-cvc" value="<?php echo $programing ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Email</label>
                                                    <div class="input-group">
                                                        <input id="email" name="email" type="email" class="form-control cc-cvc" value="<?php echo $email ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Username</label>
                                                    <div class="input-group">
                                                        <input id="username" name="username" type="text" class="form-control cc-cvc" value="<?php echo $username ?>" data-val="true">
                                                    </div>

                                                    <label for="x_card_code" class="control-label mb-1">Password</label>
                                                    <div class="input-group">
                                                        <input id="password" name="password" type="text" class="form-control cc-cvc" value="<?php echo $password ?>" data-val="true">
                                                    </div>

                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save Changes</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                         <script>

                                                 function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#blah')
                                                        .attr('src', e.target.result)
                                                        .width(400)
                                                        .height(400);
                                                };

                                                reader.readAsDataURL(input.files[0]);
                                            }
                                                }
                                            
                                            </script>
                            <br>
                            <!-- Hotel Reservation Area -->
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Rooms Area End -->
    