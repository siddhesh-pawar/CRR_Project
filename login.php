<!DOCTYPE html>
<html lang="en">



<head>

    <!-- Enter a proper page title here -->
    <title>Template | Example with all standards</title>

    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css to include style.css -->
    <link rel="stylesheet" href="css/style.css">

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

    <div class="d-none d-lg-block">


        <div class="card text-center" style="padding:20px;">
            <h3>Registration & Login with Mobile OTP verification using Jquery AJAX with PHP Mysql</h3>
        </div><br>

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="alert alert-success alert-dismissible" style="display: none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <span class="success-message"></span>
                    </div>

                    <form id="mobileForm">
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" required="" id="mobile">
                            <span class="error-message" style="color:red;"></span>
                        </div>
                        <div class="form-group">
                            <p>Not registered yet ?<a href="index.php"> Register here</a></p>
                            <button type="submit" class="btn btn-primary" id="sendOtp">Send OTP</button>
                        </div>
                    </form>

                    <form id="otpForm" style="display:none;">
                        <div class="form-group">
                            <label for="mobile">OTP:</label>
                            <input type="text" class="form-control" name="otp" placeholder="Enter OTP" required="" id="otp">
                            <span class="otp-message" style="color: red;"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="verifyOtp">Verify OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- mobile view -->
    <div class="d-lg-none position-relative">
        <!-- Enter Code for Mobile UI here -->
        <h1> This is mobile view </h1>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // Send OTP mobile jquery
            $("#sendOtp").on("click", function(e) {
                e.preventDefault();
                var mobile = $("#mobile").val();
                $.ajax({
                    url: "php/send_otp.php",
                    type: "POST",
                    cache: false,
                    data: {
                        mobile: mobile
                    },
                    success: function(result) {
                        if (result == "yes") {
                            $("#otpForm,.alert-success").show();
                            $("#mobileForm").hide();
                            $(".success-message").html("OTP sent your mobile number");
                        }
                        if (result == "no") {
                            $(".error-message").html("Please enter valid mobile number");
                        }
                    }
                });
            });

            // Verify OTP mobile jquery
            $("#verifyOtp").on("click", function(e) {
                e.preventDefault();
                var otp = $("#otp").val();
                $.ajax({
                    url: "php/verify_otp.php",
                    type: "POST",
                    cache: false,
                    data: {
                        otp: otp
                    },
                    success: function(response) {
                        if (response == "yes") {
                            window.location.href = 'dashboard.php';
                        }
                        if (response == "no") {
                            $(".otp-message").html("Please enter valid OTP");
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>