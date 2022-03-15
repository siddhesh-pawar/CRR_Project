<?php
session_start();
?>
<div class="container header-top">
    <div class="logo">
        <img src="assets/images/h3_logo.png">
    </div>

    <div class="row social-parent">
        <div class="col-6">
            <div class="top-social">
                <ul>

                    <li>Follow</li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-6 header-buttons">
            <?php
            if (!isset($_SESSION['user_name'])) {
            ?>
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="ml-4"> <button class="btn" type="button"><i class="fa fa-edit mr-2"></i><a href="sign_in">Sign
                                in</a></button>
                    </div>
                    <div class="ml-4">
                        <p>Or</p>
                    </div>
                    <div class="ml-4"><button class="btn " type="button"><i class="fa fa-edit mr-2"></i><a href="sign_up">Register</a></button>
                    </div>

                </div>
            <?php
            } else {
            ?>
                <div class="d-flex flex-row-reverse bd-highlight">

                    <div class="ml-3">
                        <div class="dropdown">

                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i style="color:#ffffff" class="fa fa-user fa-2x" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <p class="dropdown-item" style="font-size: 15px;text-transform: lowercase;color:#ff4800;padding:none"><?php echo ($_SESSION['user_email']) ?></p>
                                <a style="font-size: 15px;color:#ff4800;" class="dropdown-item" href="php/logout.php">Logout</a>

                            </div>
                        </div>
                        <!-- <p style="font-size: 17px;">Hello! <span style="text-transform: lowercase;color:#ff4800"><?php echo ($_SESSION['user_email']) ?></span><button class="btn ml-2" type="button"><i class="fa fa-edit mr-2"></i><a href="logout">logout</a></button> -->
                    </div>


                </div>
            <?php
            }
            ?>





        </div>
        <hr style="border-top:#828282 1px solid;width:100%;">
    </div>
    <div class="row header-two">
        <div class="col-6 justify-content-left">
            <ul style="padding-left: 68px">
                <li><a href="index_1">Home</a></li>
                <li><a href="#">HOW IT WORKS</a></li>
                <li><a href="about_us">ABOUT US</a></li>

            </ul>
        </div>
        <div class="col-6 justify-content-right">
            <ul style="float:right;">
                <li><a href="create">Create event</a></li>
                <li><a href="live">Live events</a></li>
                <li><a href="#">Dashboard</a></li>

            </ul>
        </div>

    </div>


</div>


<!-- <div class="header-bottom bg"></div> -->