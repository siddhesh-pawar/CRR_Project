<?php
session_start();
require_once('php/link.php');
$event_slug =  $_GET['event'];;
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->


    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <link rel="icon" href="ENTER_FAVICON_LOCATION">

    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>
        /* Example CSS */
        /*.link {
            position: relative;
            display: inline-block;
        }

        .link .tip {
            opacity: 1;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            position: absolute;
            z-index: 1000;
            top: -5px;
            right: 105%;
            transition: 0.5s ease;
            overflow: hidden;
            margin-right: 20px;
        }*/
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
            <div class="container-fluid live-info">

                <?php
                $result = mysqli_query($link, "SELECT * FROM `events` WHERE `event_slug` = '$event_slug' ");
                ?>
                <div class="container">
                    <?php
                    if (mysqli_num_rows($result) != 0) {
                        while ($row = mysqli_fetch_array($result)) {




                    ?>

                            <h1 class="text-center"><?php echo ($row['event_name']); ?></h1>
                            <hr style="border-bottom: 3px solid #ff4800;width: 10%;">
                            <div class="row mt-5">
                                <div class="col-6 d-flex justify-content-center ">
                                    <a href="live-info" class="pt-4"><img src="assets/images/uploads/<?php echo ($row['logo']); ?>" alt="" style="width: 150%;"></a>
                                </div>
                                <div class="col-6">

                                    <div class="pt-5">
                                        <p>Start Date : <span style="color: #ff4800;;"> <?php echo ($row['start_date']); ?></span> </p>
                                        <p>End Date : <span style="color: #ff4800;;"><?php echo ($row['end_date']); ?></span></p>
                                        <p>Organized by : <span style="color: #ff4800;;">K.C. College </span> </p>
                                        <button type="submit " class="btn w-40" id="sign_up">Join</button>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>


            </div>
            <div class="container-fluid tournaments">



            </div>

            <!-- Enter Code for Desktop UI here -->

        </div>

        <!-- mobile view -->
        <div class="d-lg-none position-relative">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand p-3 pt-4" href="#"> <img src="images/f_logo.png"></a>
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


    </div>

    <div class="footer-top footer-bg third-footer-bg">

    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

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
    </script>
</body>

</html>