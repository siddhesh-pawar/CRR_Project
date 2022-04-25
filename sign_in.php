<?php
require_once('admin-dashboard/php/link.php');
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
            padding-top: 8%;
            background-color: #ffffff;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.7)), url("assets/images/R (4).jfif");
        }

        #content .container {
            padding-top: 60px;
            padding-bottom: 50px;

        }

        .row .container {
            /* width: 25vw; */
            box-shadow: 0 15px 35px rgba(50, 50, 93, .1), 0 5px 15px rgba(0, 0, 0, .07);
            padding: 2em;
            background-color: transparent;
            border-radius: 5px;
        }

        #content .col-6 {
            max-width: 45% !important;
        }

        .form-group {
            margin-bottom: 1em;
            transition: all .3s;
        }

        .form-label {
            font-size: 1em;
            color: #94ada9;
            opacity: 1;
            transform: translateY(-1.75em);
            transform-origin: 0 0;
            transition: all .3s;
        }

        .form-control {
            padding: 5px !important;
            height: auto !important;
            box-shadow: none;
            color: #ffffff !important;
            background-color: transparent !important;
            border-radius: 0px !important;
            border-style: none none solid none !important;
            border-color: #94ada9 !important;
            transition: all .5s;
        }

        .form-control::placeholder {
            color: transparent !important;
        }

        .form-control:focus {
            box-shadow: none !important;
            outline: none !important;
            border-bottom: 2px solid #ff5817 !important;
        }

        .form-control:focus+.form-label,
        .form-control:not(:placeholder-shown)+.form-label {
            transform: translateY(-3em) scale(.8);
            color: #ff5817;
        }

        .form-group:focus-within {
            transform: scale(1.05, 1.05);
        }

        .form {
            color: #94ada9;
        }

        #content p {
            text-align: center;
        }

        .links a {
            text-decoration: none !important;
            text-align: center;
            color: #ffffff !important;
        }

        a:hover {
            color: #ff5817 !important;
        }

        #content h3 {
            font-family: grind;
            text-align: center;
            font-size: 40px !important;
        }

        span {
            color: #ff5817;
        }

        #content .container .row {
            margin-top: 80px;
        }

        ::-ms-reveal {
            filter: invert(100%);
        }

        /* Button css */

        .button {
            margin: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button a {
            text-decoration: none !important;
            position: relative;
            display: inline-block;
            padding: 5px 20px;
            font-size: 17.5px;
            /* text-transform: uppercase; */
            color: rgba(255, 255, 255, 0.4);
            letter-spacing: 1px;
            transition: .5s;
            background: #ff5817;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }



        .button a:hover {
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.2);

        }

        .button a::after {
            position: absolute;
            content: '';
            color: #ffffff;
            left: 0;
            top: 0;
            height: 390%;
            width: 140%;
            transition: all .5s ease-in-out;
            background: #000;
            transform: translate(-121%, -25%) rotate(45deg);

        }

        .button a:hover::after {
            transform: translate(-9%, -25%) rotate(45deg);
        }

        .button a p {
            margin: 0;
            position: relative;
            z-index: 1;
            color: #ffffff;
        }

        /* rotating animation */
        .col {
            align-items: center;
        }

        @keyframes spin {
            from {
                transform: rotateY(0deg);
                moz-transform: rotateY(0deg);
                ms-transform: rotateY(0deg);
            }

            to {
                transform: rotateY(360deg);
                moz-transform: rotateY(360deg);
                ms-transform: rotateY(360deg);
            }
        }

        @-webkit-keyframes spin {
            from {
                -webkit-transform: rotateY(0deg);
            }

            to {
                -webkit-transform: rotateY(360deg);
            }
        }

        .imageSpin {
            height: 40%;
            animation-name: spin;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 10s;
            -webkit-animation-name: spin;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-duration: 10s;
        }

        @media only screen and (max-width: 992px) {
            .content h3 {
                text-align: center;
                font-family: grind;
                font-size: 40px;
                margin-bottom: 1em;
                padding-top: 1em;
            }

            .content .col {
                margin-bottom: 4em;
            }

            .content p {
                text-align: center;
            }

            .content {
                background-image: linear-gradient(rgba(0, 0, 0, 0.7),
                        rgba(0, 0, 0, 0.7)), url("assets/images/R (4).jfif");
            }

            .d-flex {
                margin-bottom: 2.5em;
            }
        }
    </style>
</head>

<body>


    <div class="d-none d-lg-block">
        <div class="container-fluid pl-0 pr-0 header fixed-top">
        </div>



    </div>
    <div class="d-lg-none position-relative">
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

        <!-- Enter Code for Mobile UI here -->



    </div>
    <div id="content" class="container-fluid">

        <div class="container">
            <h3><span class="text-white">Sign </span><span>In</span></h3>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ml-xl-50-none">
                        <a href="#"><img class="imageSpin " src="assets/images/02.png" alt="banner-thumb"></a>
                    </div>
                </div>
                <div class="container col-lg-6">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" id="email" name="email" tabindex="1" required>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" tabindex="2" required>
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="links d-flex justify-content-around">
                            <!-- <a href="">Forgot Password?</a> -->

                            <div class="row" style="margin-top: 0; text-align: center;">
                                <div class="col text-white">Not a member?</div>
                                <div class="w-100"></div>
                                <div class="col"><a href="sign_up">Register</a></div>

                            </div>
                        </div>
                        <div class="button" id="login">
                            <a class="bt">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <p>Sign in</p>

                            </a>

                        </div>

                    </form>
                </div>
            </div>

        </div>



    </div>
    <!-- <div class="container-fluid sign-up_bg">
            <h2 class="text-center">SIGN<span style="color: #ffffff;"> IN</span></h2>
            <div class="container ">
                <div class="card" style="background: transparent;border: none;">
                    <div class="row mt-lg-5">
                        <div class="col-lg-6 ">
                            <img src="assets/images/sign_in.png" style="width:100%;filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));">
                        </div>
                        <div class="col-lg-6">
                            <form>

                                <label class="pr-2 pt-3">Username</label>
                                <input type="text" class="form-control mt-3 mb-4" placeholder="Username" style="padding: 18px;" id="email">


                                <div class="form-group pt-2">


                                    <label class="pr-2 pt-3">Password</label>
                                    <input type="password" class="form-control mt-3 mb-4" placeholder="Password" style="padding: 18px;" id="password">


                                    <div class=" d-flex justify-content-center pt-4 pb-5">

                                        <button type="submit " class="btn w-40" id="login">Sign in</button>
                                    </div>



                                </div>




                                <div class="form-group pt-4">


                                </div>


                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div> -->

    <!-- mobile view -->


    <div class="footer-top footer-bg third-footer-bg">

    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

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

        function validateEmail() {
            var email = $("#email").val();
            var emailReg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
            if (emailReg.test(email)) {
                return true;
            } else {
                return false;
            }
        }


        $('#login').on('click', function(e) {
            e.preventDefault();
            var error = "";
            if ($("#email").val() == "") {
                sweetAlert("Warning", "Please enter a valid email", "warning");
                error = error + 'email';
            }
            if ($("#password").val() == "") {
                sweetAlert("Warning", "Please enter a valid password", "warning");
                error = error + 'password';
            }
            if (!validateEmail()) {
                sweetAlert("Warning", "Please enter registered email-id", "warning");
                error = error + 'email';

            }



            if (error == "") {

                $.ajax({
                    type: 'POST',
                    url: 'admin-dashboard/php/login_user.php',
                    dataType: "json",
                    data: {
                        email: $("#email").val(),
                        password: $("#password").val()
                    },
                    success: function(data) {
                        if (data.status == 201) {
                            window.location = "index";
                        } else if (data.status == 501) {
                            alert("please contact with admin to active your account");
                        } else {
                            alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>