<?php
require_once('php/link.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>Kriyata</title>

    <link href="assets/sweetalert/sweetalert.css" rel="stylesheet">

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
    <link rel="icon" href="ENTER_FAVICON_LOCATION">


    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>

    </style>
</head>

<body>
    <!-- <div class="container-fluid  vh-100 preloader" style=" background-color: #172027;">


        &nbsp;

        <img src=" images/no-halftime-loaders-petrick.gif" style="  position: absolute;background-color: #172027;
            top: 50%; right: 50%;
            transform: translate(50%,-50%);  margin: 0;">


    </div> -->
    <div class="main">
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
        <div class="container-fluid sign-up_bg">
            <h2 class="text-center">SIGN<span style="color: #ffffff;"> UP</span></h2>
            <div class="container ">
                <div class="card" style="background: transparent;border: none;">
                    <div class="row mt-lg-5">
                        <div class="col-lg-6 ">
                            <img src="assets/images/sign_in.png" style="width:100%;filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));">
                        </div>
                        <div class="col-lg-6">
                            <form>

                                <label class="pr-2 pt-3">Name</label>
                                <input type="text" class="form-control mt-3 mb-4" placeholder="Name" style="padding: 18px;" id="name">


                                <div class="form-group pt-2">
                                    <label class="pr-4 ">Email</label>
                                    <input type="text" class="form-control mt-3 mb-4" placeholder="Email" style="padding: 18px;" id="email">

                                    <label class="pr-2 pt-3">Phone</label>
                                    <input type="text" class="form-control mt-3 mb-4" placeholder="Phone" style="padding: 18px;" id="phone">

                                    <label class="pr-2 pt-3">Password</label>
                                    <input type="password" class="form-control mt-3 mb-4" placeholder="Password" style="padding: 18px;" id="password">

                                    <label class="pr-2 pt-3">Confirm Password</label>
                                    <input type="password" class="form-control mt-3 mb-4" placeholder="Password" style="padding: 18px;" id="c_password">


                                    <div class=" d-flex justify-content-center pt-4 pb-5">

                                        <button type="submit " class="btn w-40" id="sign_up">Sign up</button>
                                    </div>



                                </div>




                                <div class="form-group pt-4">


                                </div>


                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- mobile view -->



    </div>

    <div class="footer-top footer-bg third-footer-bg">

    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/sweetalert/sweetalert.min.js"></script>
    <script src="assets/sweetalert/jquery.sweet-alert.custom.js"></script>

    <script>
        // const loader = document.querySelector('.preloader');
        // const main = document.querySelector('.main');

        // function init() {
        //     setTimeout(() => {
        //         loader.style.opacity = 0;
        //         loader.style.display = 'none';

        //         main.style.display = 'block';

        //         setTimeout(() => (main.style.opacity = 1), 50);
        //     }, 4000);

        // }

        // init();
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
            var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            if (emailReg.test(email)) {
                return true;
            } else {
                return false;
            }
        }

        function validatePhone() {
            var phone = $("#phone").val();
            var phonereg = /^[6-9]\d{9}$/gi;
            if (phonereg.test(phone)) {
                return true;
            } else {
                return false;
            }
        }
        $("#sign_up").on("click", function(e) {
            e.preventDefault();
            var error = "";

            if ($("#name").val() == "") {
                sweetAlert("Warning", "Please enter a valid name", "warning");
                error = error + 'name';
            }
            if ($("#email").val() == "") {
                sweetAlert("Warning", "Please enter a valid email", "warning");
                error = error + 'email';
            }
            if ($("#phone").val() == "") {
                sweetAlert("Warning", "Please enter a valid phone", "warning");
                error = error + 'phone';
            }


            if (!validatePhone()) {
                sweetAlert("Warning", "Please enter a valid phone", "warning");
                error = error + 'phone';

            }
            if (!validateEmail()) {
                sweetAlert("Warning", "Please enter a valid email", "warning");
                error = error + 'email';

            }

            if ($("#c_password").val() == "" || $("#password").val() == "") {
                sweetAlert("Warning", "Please enter a valid password", "warning");
                error = error + 'confirm password';
            }
            if ($("#c_password").val() != $("#password").val()) {
                sweetAlert("Warning", "Please check your passwords", "warning");
                error = error + 'confirm password';
            }

            if (error == "") {

                $.ajax({
                    type: 'POST',
                    url: 'admin-dashboard/PHP/signup.php',
                    dataType: "json",
                    data: {
                        name: $("#name").val(),
                        email: $("#email").val(),
                        phone: $("#phone").val(),
                        password: $("#password").val()
                    },
                    success: function(data) {
                        if (data.status == 201) {
                            alert("registration sucessful, Please contact with admin to active your account");
                            window.location = "index_1";

                        } else if (data.status == 301) {
                            //Email already registered
                            alert(data.error);
                        } else if (data.status == 302) {
                            //mobie already registered
                            alert(data.error);
                        } else if (data.status == 501) {
                            alert("please contact with admin to active your account");
                        } else if (data.status == 601) {
                            alert("unsucessfully check your details. fill up again");
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