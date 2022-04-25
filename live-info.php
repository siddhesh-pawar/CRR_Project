<?php
session_start();
require_once('php/link.php');
$event_slug =  $_GET['event'];;
// $event_slug =  "IPL-2022";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Enter a proper page title here -->
    <base href="<?php echo $baseurl; ?>">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Kriyata</title>


    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- css to include style.css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- required meta tags essential for seo and link sharing -->

    <!-- Enter a proper description for the page in the meta description tag -->
    <meta name="description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter a keywords for the page in tag -->
    <meta name="Keywords" content="ENTER_KEYWORDS_HERE">

    <!-- Enter Page title -->
    <meta property="og:title" content="ENTER_PAGE_TITLE" />

    <!-- Enter Page URL -->
    <meta property="og:url" content="ENTER_PAGE_URL" />

    <!-- Enter page description -->
    <meta property="og:description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
    <meta property="og:image" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:secure_url" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:type" content="website" />


    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <link rel="icon" href="assets/images/f_logo_temp_mob.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: rgb(25, 29, 38);
            color: white;
            font-family: Oxanium-Regular !important;
        }

        @font-face {
            font-family: grind;
            src: url(../fonts/grind_demolished-webfont.woff2);
            font-display: swap;
        }

        #content {
            height: fit-content;
            /* margin-top: 11%; */
            padding-bottom: 5%;
            background-color: #ffffff;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.7)), url("assets/images/R (4).jfif");
            background-size: cover;
        }

        #content .container {
            padding-top: 60px;
            padding-bottom: 50px;
        }

        #content h1 {
            font-family: grind;
            color: #ffffff;
        }

        #content span {
            color: #ff5817;
        }

        .container {
            font-family: Oxanium-Bold;
            font-size: 20px;
        }

        #content .container .row {
            margin-top: 10em;
            height: 30vh;
            padding-top: 5%;
        }

        .col-6 img {
            height: 150px;
        }

        section h2 {
            font-family: Oxanium-Bold !important;
            font-size: 45px;
            text-transform: uppercase;
        }

        section {
            position: relative;
            width: 100%;
            min-height: fit-content;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper {
            width: 900px;
            height: 250px;
            padding: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }

        .swiper-button-prev,
        .swiper-button-next {
            color: #ff5817 !important;
        }

        /* Hover box */
        .tlinfow {

            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            /* border-bottom: 0px !important; */
            background: transparent;
            /* border-top-color: transparent !important; */
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            position: relative;
            padding: 20px;
            transition: all 0.35s ease;
            -webkit-transition: all 0.35s ease;
            -moz-transition: all 0.35s ease;
            border: 1px solid rgba(255, 255, 255, 0);
            border-bottom: 0px;
        }

        .tlinfow .tlist-info {
            padding: 0px 22px;
            flex-grow: 1;
        }

        ul.tournaments-list li .tlinfow .tlist-join {
            min-width: 27%;
        }

        .tlinfoextra {
            padding: 13px 0px 33px 40px;
            display: flex;
            background: transparent;
            flex-wrap: wrap;
            position: absolute;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-top: 0px !important;
            margin-top: 14px;
            width: 100%;
            z-index: 10;
            visibility: hidden;
            opacity: 0;
            transition: all 0.35s ease;
            -webkit-transition: all 0.35s ease;
            -moz-transition: all 0.35s ease;
            top: 95%;
            left: 15px;
        }

        .swiper-slide:hover .tlinfoextra {
            opacity: 1;
            visibility: visible;
            border-top: 0px !important;
            top: 90%;
            background: rgba(255, 255, 255, 0.1);
            height: 100px !important;
        }



        /* .elementor img {
            height: auto;
            max-width: 100%;
            border: none;
            -webkit-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        } */
        .place {
            margin-bottom: 15px;
        }

        #content .btn {
            background-color: #ff5817 !important;
            color: white !important;

        }

        .tlinfow a {
            text-decoration: none !important;
            font-size: 16px;
            color: #ffffff;

        }


        /* Text animation */
        .text p {
            text-transform: uppercase;
            letter-spacing: .5em;
            display: inline-block;
            border: 4px double rgba(255, 255, 255, .25);
            border-width: 4px 0;
            text-align: center;
            margin-top: 15%;
            ;
        }

        .text span {
            font: 700 4em/1 "grind", sans-serif;
            letter-spacing: 0;
            padding: .25em 0 .325em;
            display: block;
            margin: 0 auto;
            text-shadow: 0 0 80px rgba(255, 255, 255, .5);
            background: url(https://i.ibb.co/RDTnNrT/animated-text-fill.png) repeat-y;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-animation: aitf 50s linear infinite;
            -webkit-transform: translate3d(0, 0, 0);
            -webkit-backface-visibility: hidden;

        }


        @-webkit-keyframes aitf {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        /* Mobile view */
        @media only screen and (max-width: 992px) {}
    </style>
</head>

<body style="background-color: rgb(25,29,38); color: #ffffff;">

    <div class="d-none d-lg-block">
        <div class="header fixed-top"></div>
        <div id="content" class="container-fluid">
            <div class="container text-center">
                <?php
                $result = mysqli_query($link, "SELECT * FROM `events` WHERE `event_slug` = '$event_slug' ");
                ?>
                <?php
                if (mysqli_num_rows($result) != 0) {
                    while ($row = mysqli_fetch_array($result)) {




                ?>
                        <div class="text d-flex justify-content-center">
                            <p>
                                <span>
                                    <?php echo ($row['event_name']); ?>
                                </span>
                            </p>
                        </div>

                        <!-- <img src="assets/images/section_line.png"> -->
                        <div class="row mt-5">
                            <div class="col-6">
                                <img src="assets/images/uploads/<?php echo ($row['logo']); ?>">
                            </div>
                            <div class="col-6" style="text-align: left;">

                                <p>Start date: <span><?php echo (date("d/m/Y", strtotime($row['start_date']))); ?></span></p>
                                <p>End date: <span><?php echo (date("d/m/Y", strtotime($row['end_date']))); ?></span></p>
                                <p>Organized By: <span> K.C.College</span></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <div style="margin-top: 5em;" class="container-fluid">
                <section>
                    <div class="text-center">
                        <h2>Tourna<span>ments</span></h2>
                        <img src="assets/images/section_line.png">
                    </div>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php

                            $result = mysqli_query($link, "SELECT * FROM `events` WHERE `event_slug` = '$event_slug' ");
                            $row = mysqli_fetch_array($result);
                            $event_id = $row['event_id'];
                            $result = mysqli_query($link, "SELECT * FROM `tournaments` WHERE `event_id` = '$event_id' ");

                            ?>
                            <?php
                            if (mysqli_num_rows($result) != 0) {
                                while ($row = mysqli_fetch_array($result)) {





                            ?>
                                    <div class="swiper-slide">
                                        <div class="tlinfow">
                                            <div class="tlist-info">
                                                <div class="place">
                                                    <a href="#" class="ptour-title"><?php echo ($row['tour_name']); ?>
                                                    </a>
                                                </div>
                                                <div>
                                                    <p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        </svg> 3 Teams Registered
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="tlist-join">
                                                <p>Start date:<strong><?php echo (date("d/m/Y", strtotime($row['start_tour_date']))); ?></strong></p>
                                                <p>End date:<strong><?php echo (date("d/m/Y", strtotime($row['end_tour_date']))); ?></strong></p>
                                            </div>
                                            <div class="tlinfoextra row">
                                                <div class="tlist-join col">
                                                    <div class="place tournament">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-branch">
                                                            <line x1="6" y1="3" x2="6" y2="15"></line>
                                                            <circle cx="18" cy="6" r="3"></circle>
                                                            <circle cx="6" cy="18" r="3"></circle>
                                                            <path d="M18 9a9 9 0 0 1-9 9"></path>
                                                        </svg>
                                                        <small>Tournament type:</small><strong> Knockout</strong>
                                                    </div>
                                                    <div class="tlist-join">
                                                    </div>
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor">
                                                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                                            <line x1="8" y1="21" x2="16" y2="21"></line>
                                                            <line x1="12" y1="17" x2="12" y2="21"></line>
                                                        </svg>
                                                        <small>Veneu:</small><strong> Ground</strong>
                                                    </div>

                                                </div>
                                                <div class="tlist-join col text-right">
                                                    <div class="place">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crosshair">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="22" y1="12" x2="18" y2="12"></line>
                                                            <line x1="6" y1="12" x2="2" y2="12"></line>
                                                            <line x1="12" y1="6" x2="12" y2="2"></line>
                                                            <line x1="12" y1="22" x2="12" y2="18"></line>
                                                        </svg>
                                                        <small>Game format:</small><strong> Best of 1</strong>
                                                    </div>
                                                    <div>
                                                        <button class="btn rotated-btn"><a href="join_tour.php?id=<?php echo ($row['id']); ?> ">Join Now</a></button>
                                                        <button class="btn rotated-btn"><a href="fixtures.php?id=<?php echo ($row['id']); ?> ">Fixtures</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>

                </section>
            </div>
        </div>
        <div class="footer-top"></div>

    </div>







    <!-- mobile view -->
    <div class="d-lg-none position-relative">

        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand p-3 pt-4" href="#"> <img src="assets/images/f_logo.png"></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav p-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>

        <div class="container-fluid content">

        </div>
        <div class="footer-top"></div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".header").load('template/header.php');
            $(".footer-top").load('template/footer.html');

            $(window).on('scroll', function() {
                var scroll = $(window).scrollTop();
                if (scroll < 245) {


                    $(".social-parent").fadeIn(1000)
                    $(".header").fadeIn(500);

                } else {

                    $(".social-parent").fadeOut(500)



                }
            });
        });
    </script>
    <!-- <script>
        var swiper = new Swiper(".mySwiper", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: ".swiper-pagination",
          },
        });
        
    </script> -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "flip",
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>