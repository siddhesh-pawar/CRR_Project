<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>Kriyata</title>

    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- css to include style.css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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


    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>
        .main {
            display: none;
            transition: opacity 3s ease-in;
        }

        #hero-lightpass {
            left: -1%;
            position: fixed;
            width: 155%;


            /* left: 50%;
            top: 50%;
            max-height: 100vh;
            /* transform: translate(-50%, -50%); */
        }
    </style>
</head>

<body>
    <div class="container-fluid  vh-100 preloader" style=" background-color: #172027;">


        &nbsp;

        <img src=" assets/images/no-halftime-loaders-petrick.gif" style="  position: absolute;background-color: #172027;
            top: 50%; right: 50%;
            transform: translate(50%,-50%);  margin: 0;">


    </div>
    <div class="main">
        <div class="d-none d-lg-block">

            <div class="container-fluid">

                <canvas id="hero-lightpass">
                </canvas>
            </div>

            <!-- Enter code for desktop UI here -->
            <div class="container-fluid pl-0 pr-0 header fixed-top">
            </div>
            <div class="container-fluid hero">
                <div class=" container hero-text">

                    <!-- <h2 class="text-center">THE MOST POWERFUL PLATFORM TO </h2> -->
                    <h2 class="pt-5"><span>KRIYATA</span></h2>
                    <p style="font-size: 30px;font-family: 'Oxanium-Regular';font-weight: bold;">One stop solution
                        <br>for tournament
                        management
                    </p>
                    <!-- <h2 class="pt-2 text-center">AND</h2>
        <h2 class="pt-2 text-center"><span style="color:#ff4800;"> MANAGE</span></h2>

        <h2 class="pt-2 text-center">TOURNAMENTS</h2> -->




                    <button class="btn hero-button mt-3 d-flex justify-content-center">Register Now</button>
                </div>
            </div>

            <!-- <div class="container-fluid kriyata" style="padding-bottom: 200px;">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center text">
                <h2 class="text-center d-flex justify-content-center">
                    <p><span>KRIYATA</span></p>
                </h2>

            </div>
            <div class="col-12 d-flex justify-content-center">

                <p
                    style="font-size: 30px;font-family: 'Oxanium-Regular';font-weight: bold;margin-top: 50px;">
                    One stop
                    solution
                    for tournament
                    management
                </p>
            </div>


        </div>
    </div>

</div> -->

            <div class="container-fluid section-3">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h2>CREATING <span style="color: #ff4800;;">TOURNAMENTS</span> WAS NEVER THIS EASIER!!!</h2>
                            <p>Kriyata offers creating tournaments with the most easy steps and allows the access to
                                player
                                registrations in the most optimal way.</p>
                            <button class="btn">Create Now</button>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid section-2 ">
                <div class="container pt-5 pb-5">
                    <div class="row pt-5">
                        <div class="col-3 justify-content-center">
                            <div class="parent">
                                <i class="fa fa-bolt d-flex justify-content-center section_2_icons" aria-hidden="true" style="color:#ff4800;font-size:60px;"></i>
                                <br>

                                <h4 class="text-center pt-3">LIGHTNING FAST PROCESS</h4>
                                <p class="text-center pt-2">Create account instantly, get authenticated and you are good to go!</p>
                            </div>


                        </div>
                        <div class="col-3 justify-content-center">
                            <div class="parent">
                                <i class="fa fa-users d-flex justify-content-center section_2_icons" aria-hidden="true" style="color:#ff4800;font-size:60px;"></i>

                                <br>

                                <h4 class="text-center pt-2">MULTIPLE SPORT REGISTRATION</h4>
                                <p class="text-center pt-2">Register with multiple sports on a single click
                                </p>
                            </div>


                        </div>
                        <div class="col-3 justify-content-center">
                            <div class="parent">
                                <i class="fa fa-bar-chart d-flex justify-content-center section_2_icons" aria-hidden="true" style="color:#ff4800;font-size:60px;"></i>

                                <br>

                                <h4 class="text-center pt-2">EASY STATISTICS</h4>
                                <p class="text-center pt-2"> Manage the data of all the players in the most hassle-free
                                    way
                                </p>
                            </div>


                        </div>
                        <div class="col-3 justify-content-center">
                            <div class="parent">
                                <i class="fa fa-calendar d-flex justify-content-center section_2_icons" aria-hidden="true" style="color:#ff4800;font-size:60px;"></i>
                                <br>

                                <h4 class="text-center pt-2">AUTOMATIC FIXTURES</h4>
                                <p class="text-center pt-2"> Randomize fixtures for the tournaments automatically. </p>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid section-4">
                <div class="container">
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <h2>JOIN YOUR <span style="color: #ff4800;;">TOURNAMENTS</span>, CREATE <span style="color: #ff4800;;"> TEAMS </span>AND PLAY YOUR
                                FAVOURITE GAME</h2>
                            <p>Kriyata offers creating tournaments with the most easy steps and allows the access to
                                player
                                registrations in the most optimal way.</p>
                            <button class="btn">Create Now</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid section-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="third-contact-wrap">
                                <div class="third-title-style">
                                    <h2>CONTACT<span &nbsp> US</span></h2>
                                    <div class="inner">
                                        <h2>MEET OUR <span style="color: #ff4800;;">TEAM</span></h2>

                                        <p class="pt-4 mb-3"><span>Our Location :</span> Trishul Apartments Ganesh Galli
                                            Lower parel Mumbai - 4000013
                                        </p>
                                        <p><span>Phone :</span> +91 8104460774</p>

                                        <!-- <ul style="padding-left: 10px;font-size:18px;" class="pt-4">
                                <span>Our Location :</span> Central Park Roselle W78 New Jersey</li>
                                <li><span>Phone :</span> + 97 325 6254 324</li>
                            </ul> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="third-contact-form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Your Phone">
                                    </div>
                                </div>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                <button class="btn rotated-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>


        </div>

        <!-- mobile view -->
        <div class="d-lg-none position-relative">
            <!-- Enter Code for Mobile UI here -->
            <div class="mobile-header"></div>

            <div class="container-fluid hero mt-0">
                <div class=" container hero-text">

                    <h2>THE MOST </h2>
                    <h2>POWERFUL</h2>
                    <h2>PLATFORM TO</h2>
                    <h2><span style="color:#ff4800;">CREATE</span></h2>
                    <h2>AND</h2>
                    <h2><span style="color:#ff4800;"> MANAGE</span></h2>
                    <h2>TOURNAMENTS</h2>




                    <button class="btn hero-button mt-3">Register Now</button>
                </div>
            </div>
            <div class="container-fluid section-3 pb-0 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>CREATING <span style="color: #ff4800;;">TOURNAMENTS</span> WAS NEVER THIS EASIER!!!</h2>
                            <p>Kriyata offers creating tournaments with the most easy steps and allows the access to
                                player
                                registrations in the most optimal way.</p>
                            <button class="btn">Create Now</button>

                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <img src="assets/images/dontaion_img.png" alt="" style="width:300px;">
                </div>

            </div>
            <div class="container-fluid section-2 ">
                <div class="container pt-5 pb-5">
                    <div class="row pt-5">
                        <div class="col-12 justify-content-center">
                            <div class="parent">
                                <i class="fa fa-bolt d-flex justify-content-center section_2_icons" aria-hidden="true" style="color:#ff4800;font-size:90px;"></i>
                                <br>

                                <h4 class="text-center pt-3">LIGHTNING FAST PROCESS</h4>
                                <p class="text-center pt-2"> Create account instantly, get authenticated and you are good to go!</p>
                            </div>


                        </div>
                        <div class="col-12 justify-content-center">
                            <div class="parent">
                                <i class="fa fa-users d-flex justify-content-center section_2_icons" aria-hidden="true" style="color:#ff4800;font-size:90px;"></i>

                                <br>

                                <h4 class="text-center pt-2">MULTIPLE SPORT REGISTRATION</h4>
                                <p class="text-center pt-2"> Register with multiple sports on a single click
                                </p>
                            </div>


                        </div>
                        <div class="col-12 justify-content-center">
                            <div class="parent">
                                <i class="fa fa-bar-chart d-flex justify-content-center section_2_icons" aria-hidden="true" style="color:#ff4800;font-size:90px;"></i>

                                <br>

                                <h4 class="text-center pt-2">EASY STATISTICS</h4>
                                <p class="text-center pt-2"> Manage the data of all the players in the most hassle-free
                                    way
                                </p>
                            </div>


                        </div>
                        <div class="col-12 justify-content-center">
                            <div class="parent">
                                <i class="fa fa-calendar d-flex justify-content-center section_2_icons" aria-hidden="true" style="color:#ff4800;font-size:90px;"></i>
                                <br>

                                <h4 class="text-center pt-2">AUTOMATIC FIXTURES</h4>
                                <p class="text-center pt-2"> Randomize fixtures for the tournaments automatically. </p>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid section-4">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2>JOIN YOUR <span style="color: #ff4800;;">TOURNAMENTS</span>, CREATE <span style="color: #ff4800;;"> TEAMS </span>AND PLAY YOUR
                                FAVOURITE GAME</h2>
                            <p>Kriyata offers creating tournaments with the most easy steps and allows the access to
                                player
                                registrations in the most optimal way.</p>
                            <button class="btn">Create Now</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <img src="assets/images/img_mob.png" alt="" style="width:300px;transform: scalex(-1);padding-top: 30px;">
                </div>


            </div>


        </div>
        <div class="footer-top footer-bg third-footer-bg">

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
        const loader = document.querySelector('.preloader');
        const main = document.querySelector('.main');

        function init() {
            setTimeout(() => {
                loader.style.opacity = 0;
                loader.style.display = 'none';

                main.style.display = 'block';

                setTimeout(() => (main.style.opacity = 1), 50);
            }, 4000);

        }

        init();
        $(document).ready(function() {

            $(".header").load('template/header.php');
            $(".footer-top").load('template/footer.html');
            $(".mobile-header").load('template/mobile-header.html');
            const html = document.documentElement;
            const canvas = document.getElementById("hero-lightpass");
            const context = canvas.getContext("2d");

            const frameCount = 290;
            const currentFrame = index => (
                `assets/images/scroll/${index.toString().padStart(4, '0')}.jpg`
            )

            const preloadImages = () => {
                for (let i = 1; i < frameCount; i++) {
                    const img = new Image();
                    img.src = currentFrame(i);
                }
            };

            const img = new Image()
            img.src = currentFrame(1);
            canvas.width = 1950;
            canvas.height = 1080;
            img.onload = function() {
                context.drawImage(img, 0, 0);
            }

            const updateImage = index => {
                img.src = currentFrame(index);
                context.drawImage(img, 0, 0);
            }

            window.addEventListener('scroll', () => {
                const scrollTop = html.scrollTop;
                const maxScrollTop = html.scrollHeight - window.innerHeight;
                const scrollFraction = scrollTop / maxScrollTop;
                const frameIndex = Math.min(
                    frameCount - 1,
                    Math.ceil(scrollFraction * frameCount)
                );

                requestAnimationFrame(() => updateImage(frameIndex + 1))
            });

            preloadImages()

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
</body>

</html>