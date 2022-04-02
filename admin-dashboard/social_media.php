<?php
require_once('PHP/link.php');
$query = "SELECT * from social_media";
$links = array();
$result = mysqli_query($link, $query);

$i = 1;
$field = "";
while ($row = mysqli_fetch_array($result)) {

    ${"variable$i"} = $row['icon_link'];
    ${"check$i"} = $row['visibility'];
    $i = $i + 1;
}
session_start();
if (!isset($_SESSION['session_user'])) {
    header("location:sign-in");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>Connect - Responsive Admin Dashboard Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="assets/plugins/DataTables/datatables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">


        <!-- Theme Styles -->
        <link href="assets/css/connect.min.css" rel="stylesheet">
        <link href="assets/css/admin4.css" rel="stylesheet">
        <link href="assets/css/dark_theme.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .form-control:focus {
                border-color: #2b8fe97d;
                box-shadow: 0 0 0 0.2rem rgb(43 143 233 / 25%);
            }
        </style>
    </head>

    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-sidebar">
                <div class="logo-box"><a href="#" class="logo-text">Connect</a><a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
                <div class="page-sidebar-inner slimscroll">
                    <ul class="accordion-menu">
                        <li class="sidebar-title">
                            Apps
                        </li>
                        <!-- <li>
                            <a href="index" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
                        </li> -->
                        <li>
                            <a href="index"><i class="material-icons-outlined">text_format</i>Posts</a>
                        </li>

                        <li>
                            <a href="add_author_home"><i class="material-icons-outlined">account_circle</i>Authors</a>
                        </li>
                        <li>
                            <a href="add_comments_home"><i class="material-icons-outlined">create</i>Comments</a>
                        </li>
                        <li class="active-page">
                            <a href="#"><i class="material-icons">text_format</i>Settings<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu" style="display: none;">
                                <li>
                                    <a href="logo">Logo</a>
                                </li>
                                <li>
                                    <a href="settings">Nav menu</a>
                                </li>
                                <li>
                                    <a href="contact">Contact</a>
                                </li>
                                <li>
                                    <a href="title">Title and Description </a>
                                </li>
                                <li>
                                    <a href="social_media" class="active">Social Media </a>
                                </li>
                                <li>
                                    <a href="sidebar">Sidebar</a>
                                </li>
                            </ul>
                        </li>





                    </ul>
                </div>
            </div>
            <div class="page-container">
                <div class="page-header">
                    <nav class="navbar navbar-expand">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/images/avatars/profile-image-1.png" alt="profile image">
                                    <span><?php echo ($_SESSION['session_name']); ?></span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                                    <a class="dropdown-item" href="#">Settings &amp; Privacy</a>
                                    <a class="dropdown-item" href="#">Switch Account</a>
                                    <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item" href="logout">Log out</a>
                                </div>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li> -->
                        </ul>
                        <!-- <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Tasks</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Reports</a>
                                </li>
                            </ul>
                        </div> -->
                        <!-- <div class="navbar-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" id="nav-search" placeholder="Search...">
                                </div>
                            </form>
                        </div> -->
                    </nav>
                </div>
                <div class="page-content">
                    <div class="page-info">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Posts</li>
                            </ol>
                        </nav>

                    </div>
                    <div class="main-wrapper d-flex justify-content-center col-12">



                        <div class="row">
                            <div class="card  pl-5 pr-5 pt-2">
                                <h4 class="d-flex justify-content-center  mb-0 pb-0 pt-4">Social Media icons</h4>
                                <div class="card-body pt-3">

                                    <div class="row pt-3">
                                        <div class="col-lg-12">
                                            <div class="form-group">


                                                <div class="custom-control custom-switch">

                                                    <input type="checkbox" name="facebook" class="custom-control-input" id="facebook" <?php if ($check1 == "true") { ?>checked="" <?php } else {
                                                                                                                                                                            } ?>>
                                                    <label type="" class="custom-control-label mb-2" for="facebook" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Facebook</label>
                                                    <input id="facebook-link" placeholder="link" class="form-control" style="padding: 8px 8px;border-radius: 7px;<?php if ($check1 == "true") {
                                                                                                                                                                        echo ("display:inline-block");
                                                                                                                                                                    } else {
                                                                                                                                                                        echo ("display:none");
                                                                                                                                                                    } ?>" value="<?php echo ($variable1); ?>">
                                                </div>
                                                <div class="custom-control custom-switch">

                                                    <input type="checkbox" class="custom-control-input" id="twitter" <?php if ($check2 == "true") { ?>checked="" <?php } else {
                                                                                                                                                        } ?>>
                                                    <label type="" class="custom-control-label mb-2" for="twitter" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Twitter</label>
                                                    <input id="twitter-link" placeholder="link" class="form-control" style="padding: 8px 8px;border-radius: 7px;<?php if ($check2 == "true") {
                                                                                                                                                                    echo ("display:inline-block");
                                                                                                                                                                } else {
                                                                                                                                                                    echo ("display:none");
                                                                                                                                                                } ?>" value="<?php echo ($variable2); ?>">
                                                </div>
                                                <div class="custom-control custom-switch ">

                                                    <input type="checkbox" class="custom-control-input" id="linkedin" <?php if ($check3 == "true") { ?>checked="" <?php } else {
                                                                                                                                                            } ?>>
                                                    <label type="" class="custom-control-label mb-2" for="linkedin" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">LinkedIn</label>
                                                    <input id="linkedin-link" placeholder="link" class="form-control" style="padding: 8px 8px;border-radius: 7px;<?php if ($check3 == "true") {
                                                                                                                                                                        echo ("display:inline-block");
                                                                                                                                                                    } else {
                                                                                                                                                                        echo ("display:none");
                                                                                                                                                                    } ?>" value="<?php echo ($variable3); ?>" value="<?php echo ($variable3); ?>">
                                                </div>
                                                <div class="custom-control custom-switch ">

                                                    <input type="checkbox" class="custom-control-input" id="googleplus" <?php if ($check4 == "true") { ?>checked="" <?php } else {
                                                                                                                                                            } ?>>
                                                    <label type="" class="custom-control-label mb-2" for="googleplus" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Google Plus</label>
                                                    <input id="googleplus-link" placeholder="link" class="form-control" style="padding: 8px 8px;border-radius: 7px;<?php if ($check4 == "true") {
                                                                                                                                                                        echo ("display:inline-block");
                                                                                                                                                                    } else {
                                                                                                                                                                        echo ("display:none");
                                                                                                                                                                    } ?>" value="<?php echo ($variable4); ?>" value="<?php echo ($variable4); ?>">
                                                </div>
                                                <div class="custom-control custom-switch ">

                                                    <input type="checkbox" class="custom-control-input" id="github" <?php if ($check5 == "true") { ?>checked="" <?php } else {
                                                                                                                                                        } ?>>
                                                    <label type="" class="custom-control-label mb-2" for="github" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Github</label>
                                                    <input id="github-link" placeholder="link" class="form-control" style="padding: 8px 8px;border-radius: 7px;<?php if ($check5 == "true") {
                                                                                                                                                                    echo ("display:inline-block");
                                                                                                                                                                } else {
                                                                                                                                                                    echo ("display:none");
                                                                                                                                                                } ?>" value="<?php echo ($variable5); ?>" value="<?php echo ($variable5); ?>">

                                                </div>
                                                <div class="custom-control custom-switch ">

                                                    <input type="checkbox" class="custom-control-input" id="pinterest" <?php if ($check6 == "true") { ?>checked="" <?php } else {
                                                                                                                                                            } ?>>
                                                    <label type="" class="custom-control-label mb-2" for="pinterest" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Pin Interest</label>
                                                    <input id="pinterest-link" placeholder="link" class="form-control" style="padding: 8px 8px;border-radius: 7px;<?php if ($check6 == "true") {
                                                                                                                                                                        echo ("display:inline-block");
                                                                                                                                                                    } else {
                                                                                                                                                                        echo ("display:none");
                                                                                                                                                                    } ?>" value="<?php echo ($variable6); ?>" value="<?php echo ($variable6); ?>">
                                                </div>
                                                <div class="custom-control custom-switch ">

                                                    <input type="checkbox" class="custom-control-input" id="instagram" <?php if ($check7 == "true") { ?>checked="" <?php } else {
                                                                                                                                                            } ?>>
                                                    <label type="" class="custom-control-label mb-2" for="instagram" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Instagram</label>
                                                    <input id="instagram-link" placeholder="link" class="form-control" style="padding: 8px 8px;border-radius: 7px;<?php if ($check7 == "true") {
                                                                                                                                                                        echo ("display:inline-block");
                                                                                                                                                                    } else {
                                                                                                                                                                        echo ("display:none");
                                                                                                                                                                    } ?>" value="<?php echo ($variable7); ?>" value="<?php echo ($variable7); ?>">
                                                </div>
                                                <div class="custom-control custom-switch ">

                                                    <input type="checkbox" class="custom-control-input" id="rss" <?php if ($check8 == "true") { ?>checked="" <?php } else {
                                                                                                                                                    } ?>>
                                                    <label type="" class="custom-control-label mb-2" for="rss" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Rss</label>
                                                    <input id="rss-link" placeholder="link" class="form-control" style="padding: 8px 8px;border-radius: 7px;display:<?php if ($check8 == "true") {
                                                                                                                                                                        echo ("display:inline-block");
                                                                                                                                                                    } else {
                                                                                                                                                                        echo ("display:none");
                                                                                                                                                                    } ?>" value="<?php echo ($variable8); ?>" value="<?php echo ($variable8); ?>">
                                                </div>


                                            </div>

                                        </div>

                                        <!-- <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Author description</label>

                                                <textarea id="descrip" class="form-control" rows="7" style="padding: 12px 18px;border-radius: 7px;"><?php echo $row['description']; ?></textarea>

                                            </div>
                                        </div> -->




                                    </div>
                                    <div class="form-group pt-3 d-flex justify-content-center">
                                        <button class="btn" id="edit" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">Edit</button>

                                    </div>





                                </div>
                            </div>








                        </div>
                    </div>



                    <div class="page-footer ">
                        <div class="row ">
                            <div class="col-md-12 ">
                                <span class="footer-text ">2019 © stacks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.4.1.min.js "></script>
        <script src="assets/plugins/bootstrap/popper.min.js "></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js "></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js "></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js "></script>
        <script src="assets/plugins/apexcharts/dist/apexcharts.min.js "></script>
        <script src="assets/plugins/blockui/jquery.blockUI.js "></script>
        <script src="assets/plugins/flot/jquery.flot.min.js "></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js "></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js "></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js "></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js "></script>
        <script src="assets/js/connect.min.js "></script>
        <script src="assets/js/pages/dashboard.js "></script>
        <script src="assets/plugins/DataTables/datatables.min.js"></script>
        <script src="assets/plugins/DataTables/dataTables.select.min.js"></script>
        <script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>


        <script>
            $(document).ready(function() {

                var facebook_link = "facebook.com";
                var twitter_link = "twitter.com";
                var linkedin_link = "linkedin.com";
                var googleplus_link = "googleplus.com";
                var github_link = "github.com";
                var pinterest_link = "pininterest.com";
                var instagram_link = "instagram.com";
                var rss_link = "rss.com"

                var facebook_visibility = true;
                var twitter_visibility = true;
                var linkedin_visibility = true;
                var googleplus_visibility = true;
                var github_visibility = true;
                var pinterest_visibility = true;
                var instagram_visibility = true;
                var rss_visibility = true;

                $('#facebook').on('change', function() {
                    if ($(this).is(':checked')) {
                        facebook_visibility = true;
                        $("#facebook-link").show();
                        facebook_link = $('#facebook-link').val();
                    } else {
                        facebook_visibility = false;
                        $('#facebook-link').hide();
                    }
                });
                $('#twitter').on('change', function() {
                    if ($(this).is(':checked')) {
                        twitter_visibility = true;


                        $("#twitter-link").show();
                        twitter_link = $('#twitter-link').val();

                    } else {
                        twitter_visibility = false;

                        $("#twitter-link").hide();

                    }
                });
                $('#linkedin').on('change', function() {
                    if ($(this).is(':checked')) {
                        linkedin_visibility = true;
                        $("#linkedin-link").show();
                        linkedin_link = $('#linkedin-link').val();


                    } else {
                        linkedin_visibility = false;
                        $("#linkedin-link").hide();

                    }
                });
                $('#googleplus').on('change', function() {
                    if ($(this).is(':checked')) {
                        googleplus_visibility = true;
                        $("#googleplus-link").show();
                        googleplus_link = $('#googleplus-link').val();

                    } else {
                        googleplus_visibility = false;
                        $("#googleplus-link").hide();

                    }
                });
                $('#github').on('change', function() {
                    if ($(this).is(':checked')) {
                        github_visibility = true;
                        $("#github-link").show();
                        github_link = $('#github-link').val();

                    } else {
                        github_visibility = false;
                        $("#github-link").hide();

                    }
                });
                $('#pinterest').on('change', function() {
                    if ($(this).is(':checked')) {
                        pinterest_visibility = true;
                        $("#pinterest-link").show();
                        pinterest_link = $('#pinterest-link').val();

                    } else {
                        pinterest_visibility = false;
                        $("#pinterest-link").hide();

                    }
                });
                $('#instagram').on('change', function() {
                    if ($(this).is(':checked')) {
                        instagram_visibility = true;
                        $("#instagram-link").show();
                        instagram_link = $('#instagram-link').val();

                    } else {
                        instagram_visibility = false;
                        $("#instagram-link").hide();

                    }
                });
                $('#rss').on('change', function() {
                    if ($(this).is(':checked')) {
                        rss_visibility = true;
                        $("#rss-link").show();
                        rss_link = $('#rss-link').val();

                    } else {
                        rss_visibility = false;
                        $("#rss-link").hide();

                    }
                });



                if ($("#facebook").prop('checked') == true) {
                    facebook_visibility = true;
                } else {
                    facebook_visibility = false;
                }
                if ($("#twitter").prop('checked') == true) {
                    twitter_visibility = true;
                } else {
                    twitter_visibility = false;
                }
                if ($("#linkedin").prop('checked') == true) {
                    linkedin_visibility = true;
                } else {
                    linkedin_visibility = false;
                }
                if ($("#googleplus").prop('checked') == true) {
                    googleplus_visibility = true;
                } else {
                    googleplus_visibility = false;
                }
                if ($("#github").prop('checked') == true) {
                    github_visibility = true;
                } else {
                    github_visibility = false;
                }
                if ($("#pinterest").prop('checked') == true) {
                    pinterest_visibility = true;
                } else {
                    pinterest_visibility = false;
                }
                if ($("#instagram").prop('checked') == true) {
                    instagram_visibility = true;
                } else {
                    instagram_visibility = false;
                }
                if ($("#rss").prop('checked') == true) {
                    rss_visibility = true;
                } else {
                    rss_visibility = false;
                }

                $('#edit').on('click', function(e) {

                    e.preventDefault();
                    var error = "";

                    var formData = new FormData();


                    facebook_link = $('#facebook-link').val();
                    twitter_link = $('#twitter-link').val();
                    linkedin_link = $('#linkedin-link').val();
                    googleplus_link = $('#googleplus-link').val();
                    github_link = $('#github-link').val();
                    pinterest_link = $('#pinterest-link').val();
                    instagram_link = $('#instagram-link').val();
                    rss_link = $('#rss-link').val();



                    formData.append('facebook_link', facebook_link);
                    formData.append('twitter_link', twitter_link);
                    formData.append('linkedin_link', linkedin_link);
                    formData.append('googleplus_link', googleplus_link);
                    formData.append('github_link', github_link);
                    formData.append('pinterest_link', pinterest_link);
                    formData.append('instagram_link', instagram_link);
                    formData.append('rss_link', rss_link);


                    formData.append('facebook_visibility', facebook_visibility);
                    formData.append('twitter_visibility', twitter_visibility);
                    formData.append('linkedin_visibility', linkedin_visibility);
                    formData.append('googleplus_visibility', googleplus_visibility);
                    formData.append('github_visibility', github_visibility);
                    formData.append('pinterest_visibility', pinterest_visibility);
                    formData.append('instagram_visibility', instagram_visibility);
                    formData.append('rss_visibility', rss_visibility);










                    if (error == "") {



                        console.log(formData);

                        $.ajax({
                            url: "PHP/editIcons.php",
                            type: "POST",
                            dataType: "json",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: formData,

                            success: function(data) {
                                console.log(data);
                                if (data.status == 201) {
                                    // if(data.link!=""){

                                    // }else{
                                    window.location.reload();
                                    // }

                                } else if (data.status == 301) {
                                    console.log(data.error);
                                    alert("error");
                                    // $('#contact-success').css('display', 'none');
                                    // $('#contact-form').css('display', 'block');
                                    // alert('success'); 
                                } else if (data.status == 601) {
                                    console.log(data.error);
                                    alert("error");
                                    // $('#contact-success').css('display', 'none');
                                    // $('#contact-form').css('display', 'block');
                                    // alert('success'); 
                                } else if (data.status == 603) {
                                    console.log(data.error);
                                    alert("error");
                                    // $('#contact-success').css('display', 'none');
                                    // $('#contact-form').css('display', 'block');
                                    // alert('success'); 
                                } else {
                                    //     alert("problem with query");
                                }
                            }
                        });
                    } else {

                    }
                });
            });
        </script>
    </body>

    </html>
<?php
}

?>