<?php
require_once('PHP/link.php');
$id = $_REQUEST['id'];
$query = "SELECT * from articles where article_id ='" . $id . "'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
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
        <link rel="stylesheet" href="assets/Date-Time-Picker-Bootstrap-4/build/css/bootstrap-datetimepicker.min.css">
        <link href="assets/tagify/dist/tagify.css" rel="stylesheet">
        <link href="assets/sweetalert/sweetalert.css" rel="stylesheet">








        <!-- Theme Styles -->
        <link href="assets/css/connect.min.css" rel="stylesheet">
        <link href="assets/css/admin4.css" rel="stylesheet">
        <link href="assets/css/dark_theme.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">
        <link rel="stylesheet" href="assets/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
        <link rel="stylesheet" href="assets/clockpicker/dist/jquery-clockpicker.min.css">
        <link rel="stylesheet" href="assets/bootstrap-datepicker/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="assets/timepicker/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="assets/bootstrap-daterangepicker/daterangepicker.css">


        <script src="assets/ckeditor/ckeditor.js"></script>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

        <style>
            .cke_toolbox {
                background: #2b8fe9;
            }

            .tagify {
                border-radius: 7px;
                background-color: #ffffff;
                --placeholder-color: rgb(135 146 180);
                --tags-focus-border-color: rgba(113, 104, 252, 0.6);
            }

            .tagify:focus {
                box-shadow: 0 0 0 0.2rem rgb(113 104 252 / 25%);
            }

            input[type=radio] {
                height: 18px;
                width: 18px;
            }

            .form-control:focus {
                border-color: #2b8fe97d;
                box-shadow: 0 0 0 0.2rem rgb(43 143 233 / 25%);
            }

            .input-group-text {
                border-radius: 5px;
            }

            .categorySet {
                background-color: #fff;
            }

            .cat-search {
                border-radius: 20px;
                border: 0;
                padding: 10px 22px;
                font-size: 13px;
                background: #ededf1;
                color: #7d7d83;
                font-weight: 700;
                display: block;
                border: 2px solid transparent;
                margin: 6px 0 6px;
                -webkit-transition: all .2s ease-in-out;
                -moz-transition: all .2s ease-in-out;
                -o-transition: all .2s ease-in-out;
                transition: all .2s ease-in-out;
                outline: 0;
            }

            .hidden {
                display: none;
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
                        <li class="active-page">
                            <a href="index"><i class="material-icons-outlined">text_format</i>Posts</a>
                        </li>

                        <li>
                            <a href="add_author_home" class="active"><i class="material-icons-outlined">account_circle</i>Authors</a>
                        </li>
                        <li>
                            <a href="add_comments_home" class="active"><i class="material-icons-outlined">create</i>Comments</a>
                        </li>
                        <li>
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
                                    <a href="social_media">Social Media </a>
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
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                        <!-- <div class="page-options">
                            <a href="#" class="btn btn-primary">Upgrade</a>
                        </div> -->
                    </div>
                    <div class="main-wrapper">

                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <div id="title" class="mb-4">


                                    <input class="form-control" style="border-radius: 7px;width: 100%;padding: 12px 18px;font-size:15px" type="text" placeholder="Enter Title" value="<?php echo ($row['title']); ?>">


                                </div>
                                <div class="card">

                                    <div class="card-body">
                                        <ul class="nav nav-tabs mb-4 ">
                                            <li class="nav-item">
                                                <a href="#content" class="nav-link active" data-toggle="tab">Content</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#seo" class="nav-link" data-toggle="tab">SEO</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-2">
                                            <div class="tab-pane fade show active" id="content">
                                                <div class="bg-light p-4">
                                                    <div id="editor">
                                                        <?php echo ($row['content']); ?>
                                                    </div>
                                                </div>
                                                <div class="bg-light mt-4 p-3">

                                                    <h4>Image</h4>
                                                    <h4 class="card-title">Upload Hero Image</h4>
                                                    <input type="file" id="hero-image" class="dropify" data-default-file="<?php echo "assets/images/uploads/" . $row['hero_image'] ?>" />
                                                    <input type="hidden" id="old-hero-image" value="<?php echo $row['hero_image'] ?>" />
                                                    <label for="hero-image" id="label-hero-image">Hero image refers to the feature image of the blog</label>
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <label class="control-label" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Caption</label>
                                                        </div>
                                                        <div class="col-11" id="hero-image-alt">


                                                            <input type="text" class="form-control" id="caption" style="border-radius: 7px;padding: 8px 4px; width: 100%;" value="<?php echo ($row['hero_image_alt']); ?>">




                                                        </div>
                                                    </div>
                                                </div>






                                            </div>

                                            <div class="tab-pane fade" id="seo">

                                                <div class="form-group">
                                                    <input type="hidden" id="article_id" class="form-control" style="padding: 12px 18px;border-radius: 7px;" value="<?php echo ($row['article_id']); ?>">


                                                    <label class="control-label">Slug/Permalink</label>
                                                    <input type="text" id="slug" class="form-control" onchange="slugListner(this.value)" style="padding: 12px 18px;border-radius: 7px;" value="<?php echo ($row['slug']); ?>">
                                                    <small class="form-control-feedback"><?php echo $baseurl; ?>read/category/sub-category/this-is-my-first-blog</small>

                                                </div>
                                                <div class="form-group" id="excerpt">
                                                    <label>Blog Excerpt</label>
                                                    <textarea class="form-control" rows="5" style="padding: 12px 18px;border-radius: 7px;"><?php echo ($row['excerpt']); ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <p style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Meta Tags</p>
                                                    <input name="tags" placeholder="Enter Tags" class="form-control" style="padding: 12px 18px;border-radius: 7px;" value="<?php echo ($row['keywords']); ?>">

                                                    <p style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Meta Title</p>
                                                    <input type="text" class="form-control" placeholder="Enter Title" style="padding: 12px 18px;border-radius: 7px;" id="meta_title" value="<?php echo ($row['meta_title']); ?>">

                                                    <p style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Meta url</p>
                                                    <input type="text" class="form-control" placeholder="Enter url" style="padding: 12px 18px;border-radius: 7px;" id="meta_url" value="<?php echo ($row['meta_url']); ?>">

                                                    <p style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Meta description</p>
                                                    <input type="text" class="form-control" placeholder="Enter description" style="padding: 12px 18px;border-radius: 7px;" id="meta_description" value="<?php echo ($row['meta_description']); ?>">


                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="row p-2">
                                    <?php
                                    $author_id = $row['author_id'];
                                    $result1 = mysqli_query($link, "SELECT * FROM `authors` WHERE `author_id` = '$author_id'");
                                    while ($row1 = mysqli_fetch_array($result1)) {
                                        $author_name = $row1['author_name'];
                                    }
                                    ?>
                                    <div class="pr-2" style="width: 100%;">
                                        <p style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Author</p>
                                        <select class="form-control" style="border-radius: 7px;padding: 14px 4px;" id="author">
                                            <option class="abcd form-control" value="<?php echo ($row['author_id']); ?>"><?php echo ($author_name); ?></option>



                                        </select>

                                    </div>
                                    <div class="col-12 p-0 mt-3">
                                        <p style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Visibility</p>
                                        <div class="row pl-4">
                                            <input type="hidden" id="visibility_value" value="<?php echo ($row['visibility']); ?>">
                                            <div class="form-check col-6">
                                                <input class="form-check-input" type="radio" name="access" value="public" <?php if ($row['visibility'] == "public") { ?>checked <?php } ?>>
                                                <label class="form-check-label" for="public" style="font-size: 16px;margin-left: 6px;font-weight:bold;">
                                                    Public
                                                </label>
                                            </div>
                                            <div class="form-check col-6">
                                                <input class="form-check-input" type="radio" name="access" value="private" <?php if ($row['visibility'] == "private") { ?>checked <?php } ?>>
                                                <label class="form-check-label" for="private" style="font-size: 16px;margin-left: 6px;font-weight:bold;">
                                                    Private
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 p-0 mt-3 ">
                                        <p style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Publish Time</p>
                                        <div class="form-check pl-4" id="date_time">
                                            <input class="form-check-input" type="radio" name="time" id="flexRadioDefault1" value="auto">
                                            <label class="form-check-label" for="flexRadioDefault1" style="font-size: 16px;margin-left: 6px;font-weight:bold;">
                                                Automatic
                                            </label>

                                            <input type="hidden" value="<?php echo (date("Y-m-d")); ?>" id="auto_date">
                                            <input type="hidden" value="<?php echo (date("H:i")); ?>" id="auto_time">

                                        </div>
                                        <div class="form-check pl-4">
                                            <input class="form-check-input" type="radio" name="time" id="flexRadioDefault2" value="manual" checked>
                                            <label class="form-check-label" for="flexRadioDefault2" style="font-size: 16px;margin-left: 6px;font-weight:bold;">
                                                Set Date and Time
                                            </label>
                                        </div>
                                        <div id="calendarDiv" class="row mt-3">

                                            <div class="mydatepicker pl-3 col-12" id="date-of-posting">
                                                <label class="control-label">Date of Posting</label>
                                                <input type="text" class="form-control" placeholder="2017-06-04" id="mdate" value="<?php echo ($row['date_of_posting']); ?>" style="border-radius: 7px;padding: 12px 10px;">

                                            </div>
                                            <div class="mydatepicker pl-3 col-12" id="time-of-posting">
                                                <label>Time Of Posting</label>
                                                <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control" placeholder="13:14" value="<?php echo ($row['time_of_posting']); ?>" style="border-radius: 7px;padding: 12px 10px;">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                                    </div>

                                                </div>

                                            </div>




                                        </div>
                                    </div>



                                    <div class="w-100 mt-3 mb-2 categorySet" style="border-radius: 7px;padding:1rem 2rem;">
                                        <div class="col-12 p-0 pr-2 mt-3 mb-3">
                                            <p style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Categories</p>
                                            <div class="cate-search w-100">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" class="cat-search w-100" placeholder="Search..." data-search>
                                                    </div>
                                                </form>
                                            </div>

                                            <?php
                                            $id = $_REQUEST['id'];
                                            $query3 = "SELECT * from article_lines where article_id ='" . $id . "'";
                                            $result3 = mysqli_query($link, $query3);

                                            while ($row3 = mysqli_fetch_array($result3)) {
                                                $category_id = $row3['category_id'];
                                                $sub_category_id = $row3['sub_category_id'];
                                                if ($sub_category_id == "") {


                                                    echo ("<input type = \"hidden\" name=\"present_category\" value=\"$category_id\">");
                                                } else {
                                                    echo ("<input type = \"hidden\" name=\"present_sub_category\" value=\"$sub_category_id\">");
                                                }
                                            }



                                            ?>
                                            <ul id="category" class="pl-2" style="height:22rem;overflow-y:scroll;">

                                            </ul>
                                        </div>
                                        <a class="pt-2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="font-weight:bold;font-size:1rem;color:#2b8fe9;text-decoration:none">Add a new category</a>
                                        <div class="col-12 p-0 ml-3 mt-3 collapse" id="collapseExample">
                                            <p style="font-weight:bold;font-size:1.3rem;color:#717BA2;">New Category</p>

                                            <input class="form-control" style="border-radius: 7px;padding: 8px 4px;" id="sub_category2">
                                            <input class="form-control" type="hidden" id="sub_category_slug">
                                            <p class="mt-2" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Select a parent category</p>
                                            <select class="form-control mt-2" id="category2" style="border-radius: 7px;padding: 10px 4px;">
                                                <option class="form-control" value="default">Select a parent category</option>

                                            </select>
                                            <button class="btn mt-4 mb-2" type="button" style="font-size: 0.9rem;background-color: #2b8fe9;color: #ffffff;padding: 7px 10px;" id="add-sub-category">Add Category</button>
                                        </div>
                                    </div>





                                </div>

                                <div class="col-12  mt-3">
                                    <input type="hidden" id=comment_value value="<?php echo $row['comments']; ?>">
                                    <div class="custom-control custom-switch">

                                        <input type="checkbox" checked="" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Published globally</label>
                                    </div>
                                    <div class="custom-control custom-switch mt-2">
                                        <input type="checkbox" <?php if ($row['comments'] == "true") { ?> checked="" <?php } ?>class="custom-control-input" id="customSwitch2">
                                        <label class="custom-control-label" for="customSwitch2" style="font-weight:bold;font-size:1.2rem;color:#717BA2;">Display comments</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>

                        <div class="btn-group pt-2" id="button-stack">
                            <button class="btn ml-2" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;" id="edit-blog">Publish</button>
                            <button class="btn bg-white  ml-2">
                                <div class="d-flex flex-row" id="preview">
                                    <i class="material-icons mr-2" style="color:#2b8fe9;">visibility</i>

                                    <p class="mb-0" style="font-size: 1rem;;font-weight: bold;">Preview</p>


                                </div>

                            </button>

                            <button class="btn btn-primary  ml-2" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;" id="save">Save</button>




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
        <script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>
        <script src="assets/tagify/dist/jQuery.tagify.min.js"></script>
        <!-- date and time -->
        <script src="assets/moment/moment.js"></script>
        <script src="assets/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
        <!-- Clock Plugin JavaScript -->
        <script src="assets/clockpicker/dist/jquery-clockpicker.min.js"></script>
        <!-- Date Picker Plugin JavaScript -->
        <script src="assets/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

        <script src="assets/sweetalert/sweetalert.min.js"></script>
        <script src="assets/sweetalert/jquery.sweet-alert.custom.js"></script>








        <script>
            // Clock Picker
            loadCategory();
            checkCategory();

            if ($(window).width() < 500) {
                $('#button-stack').addClass('d-flex justify-content-center pt-5');

            } else {
                $('#button-stack').removeClass('d-flex justify-content-center pt-5');

            }

            $(window).on('resize', function() {
                if ($(window).width() < 500) {
                    $('#button-stack').addClass('d-flex justify-content-center pt-5');

                } else {
                    $('#button-stack').removeClass('d-flex justify-content-center pt-5');

                }
            })


            $('.clockpicker').clockpicker({
                donetext: 'Done',
            }).find('input').change(function() {

            });
            $('#mdate').bootstrapMaterialDatePicker({
                weekStart: 0,
                time: false
            });

            // Ck editor

            CKEDITOR.replace('editor', {
                height: 400,
                removePlugins: 'about,specialchar,a11yhelp,ckeditor_wiris,maximize,sourcearea,easyimage',
                filebrowserUploadUrl: 'PHP/ck_upload.php',
                filebrowserUploadMethod: 'form'
            });

            var category = "category";

            var sub_category_check = [];
            var category_check = [];
            var sub_category = "sub-category";
            var slug = "this-is-my-first-blog";
            var url = "";
            var url_sub = [];
            var category_id;
            var sub_category_id;
            var comment_value = $("#comment_value").val();;
            var visibility_value = $("#visibility_value").val();


            // title input slug generation

            $("#title input").keyup(function() {
                var Text = $(this).val();

                $("#meta_title").val(Text);

                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');

                slug = encodeURI(Text);

                $("#slug").val(Text);
            });
            // Tags generation

            $('[name=tags]').tagify();

            // Date On click

            $('#date').on('click', function() {
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if (month < 10) {
                    month = '0' + month.toString();
                }
                if (day < 10) {
                    day = '0' + day.toString();
                }

                var maxDate = year + '-' + month + '-' + day;



                $('#date').attr('min', maxDate);
            });

            // Author fetch

            var author_list;
            $.ajax({
                type: 'POST',
                url: 'PHP/getAuthors.php',
                dataType: "json",
                async: false,
                data: {
                    type: 'article'
                },
                success: function(data) {
                    if (data.status == 201) {

                        author_list = data.author;
                        for (var i = 0; i < author_list.length; i++) {
                            $("#author").html($("#author").html() + '<option class="form-control" value="' + author_list[i]['author_id'] + '">' + author_list[i]['author_name'] + ' </option>');
                        }


                    }
                }
            });

            // Category fetch

            var category_list;
            var sub_category_list;

            function loadCategory() {


                $.ajax({
                    type: 'POST',
                    url: 'PHP/getCategory.php',
                    dataType: "json",
                    async: false,
                    data: {
                        type: 'blogs'
                    },
                    success: function(data) {
                        if (data.status == 201) {

                            category_list = data.category;
                            var category_id_check1;

                            for (var i = 0; i < category_list.length; i++) {
                                var class_name = 'hey' + i;
                                $("#category").html($("#category").html() + '<li data-filter-item data-filter-name="' + category_list[i]['category_name'].toLowerCase() + '" style="list-style-type: none;font-weight:bold" class="' + class_name + ' ' + category_list[i]['category_name'].toLowerCase() + '" ><input type="checkbox" style="height: 16px;width: 16px;" id="' + category_list[i]['category_id'] + '"  name="category" value="' + '<?php echo $baseurl; ?>read/' + category_list[i]['category_slug'] + '">' + '<p style="display:inline-block;padding-left: 5px;font-weight:bold;color:#717BA2;";>' + category_list[i]['category_name'] + '</p>');
                                $("#category2").html($("#category2").html() + '<option class="form-control" value="' + category_list[i]['category_name'] + '">' + category_list[i]['category_name'] + ' </option>');
                                category_id_check1 = category_list[i]['category_id'];
                                $.ajax({
                                    type: 'POST',
                                    url: 'PHP/getSubCategory.php',
                                    dataType: "json",
                                    async: false,
                                    data: {
                                        type: 'blogs',
                                        'category_id': category_id_check1
                                    },
                                    success: function(data) {
                                        if (data.status == 201) {

                                            sub_category_list = data.sub_category;
                                            $("#sub-category select").html('<option value="select">Select Sub-Category</option>');
                                            for (var j = 0; j < sub_category_list.length; j++) {
                                                $('<li data-filter-item data-filter-name="' + sub_category_list[j]['sub_category_name'].toLowerCase() + '" style="list-style-type: none;padding-left:15px;" class=' + category_list[i]['category_name'].toLowerCase() + '><input type="checkbox" style="height: 16px;width: 16px;" id="' + sub_category_list[j]['sub_category_id'] + '"  name="sub_category" value="' + '<?php echo $baseurl; ?>read/' + sub_category_list[j]['category_name'] + '/' + sub_category_list[j]['sub_category_slug'] + '">' + '<p style="display:inline-block;padding-left: 5px;font-weight:bold;color:#717BA2;";>' + sub_category_list[j]['sub_category_name'] + '</p>').insertAfter("." + class_name);
                                            }



                                        }
                                    }
                                });





                            }



                        } else if (data.status == 301) {
                            alert(data.error);
                        } else {
                            alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                        }
                    }
                });
            }


            // Fetch Catgeories that are already checked by the user during creation
            function checkCategory() {
                $('input[name="present_category"]').each(function() {

                    temp = this.value;
                    $('input[name="category"]').each(function() {

                        if (temp == this.id) {
                            this.checked = true;
                        }


                    });
                });
                $('input[name="present_sub_category"]').each(function() {

                    temp = this.value;
                    $('input[name="sub_category"]').each(function() {

                        if (temp == this.id) {
                            this.checked = true;
                        }


                    });
                });


            }
        </script>
        <script>
            //Comment switch




            $('#customSwitch2').on('change', function() {
                if ($(this).is(':checked')) {
                    comment_value = true;

                } else {
                    comment_value = false;

                }
            });
            $(document).ready(function() {

                // Dropify For image
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove: 'Supprimer',
                        error: 'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element) {
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element) {
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element) {
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e) {
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
            $(document).ready(function() {

                $("input[name$='time']").click(function() {
                    var test = $(this).val();
                    if (test == "manual") {
                        $('#calendarDiv').show();
                    } else {
                        $('#calendarDiv').hide();
                    }

                });
                $("input[name$='access']").click(function() {
                    var test = $(this).val();
                    if (test == "public") {
                        visibility_value = "public";
                    } else {
                        visibility_value = "private";
                    }

                });

            });
        </script>
        <script>
            // Edit 
            $(document).ready(function() {
                $('#edit-blog').on('click', function(e) {
                    var data = CKEDITOR.instances.editor.getData();
                    e.preventDefault();
                    var error = "";
                    var formData = new FormData();


                    if (visibility_value == "") {

                        error = error + 'visibility';
                        sweetAlert("Warning", "Please select the visibility of your article", "warning");
                    } else {
                        formData.append('visibility', visibility_value);
                    }
                    if ($("#author").val() == "") {
                        error = error + 'author ';
                        sweetAlert("Warning", "Please enter author name", "warning");
                    } else {
                        formData.append('author', $("#author").val());
                    }
                    if ($("#title input").val() == "") {
                        error = error + 'Title ';
                        sweetAlert("Warning", "Please enter title", "warning");
                    } else {
                        formData.append('title', $("#title input").val());
                    }
                    if ($("#slug").val() == "") {
                        error = error + 'slug';
                        sweetAlert("Warning", "Please enter Slug", "warning");
                    } else {
                        formData.append('slug', $("#slug").val());
                    }


                    // Sub category check based on checked sub categories

                    var category_checkings = [];
                    $('input[name="sub_category"]:checked').each(function() {
                        // url_sub.push(this.value + '/' + $("#slug").val());
                        sub_category_check.push(this.id);
                    });
                    $('input[name="category"]:checked').each(function() {

                        category_check.push(this.id);



                    });




                    if (category_check.length == 0 && sub_category_check.length == 0) {


                        error = error + 'category ';
                        sweetAlert("Warning", "Please select  a category or a subcategory", "warning");
                    } else {
                        // formData.append('url', url_sub);
                        formData.append('sub_category_id', sub_category_check);
                        formData.append('category_id', category_check);
                    }
                    if ($("#date_time input[type='radio']:checked").val() == "auto") {
                        formData.append('date_of_posting', $("#auto_date").val());
                        formData.append('time_of_posting', $("#auto_time").val());

                    } else {
                        if ($("#date-of-posting input").val() == "") {
                            error = error + 'date-of-posting ';
                            sweetAlert("Warning", "Please select a valid date", "warning");
                        } else {
                            formData.append('date_of_posting', $("#date-of-posting input").val());
                        }


                        if ($("#time-of-posting input").val() == "") {
                            error = error + 'time-of-posting ';
                            formData.append('time_of_posting', $("#time-of-posting input").val());
                        } else {
                            formData.append('time_of_posting', $("#time-of-posting input").val());
                        }

                    }

                    ;

                    if ($("#excerpt textarea").val() == "") {
                        error = error + 'excerpt ';
                        sweetAlert("Warning", "Please select a valid excerpt", "warning");
                    } else {
                        formData.append('excerpt', $("#excerpt textarea").val());
                    }
                    if ($("#hero-image-alt input").val() == "") {
                        error = error + 'hero-image-alt ';
                        sweetAlert("Warning", "Please select a valid caption", "warning");
                    } else {
                        formData.append('hero_image_alt', $("#hero-image-alt input").val());
                    }
                    var values = $("#meta>tag").map(function() {
                        return $(this).val();
                    });
                    var inputs = $(".tagify__tag ");
                    var tag_list = [];
                    for (var i = 0; i < inputs.length; i++) {
                        tag_list.push(inputs[i].innerText);
                    }
                    if (tag_list.length == 0) {
                        error = error + 'meta';
                        sweetAlert("Warning", "Please enter meta tags", "warning");
                    } else {
                        formData.append('keywords', tag_list);
                    }
                    if (data == "") {
                        error = error + 'blog';
                        sweetAlert("Warning", "Blog field cannot be empty", "warning");
                    } else {
                        formData.append('blog', data);
                    }
                    if ($('#hero-image').val() == "") {


                    } else {

                        formData.append('hero-image', $("#hero-image")[0].files[0]);
                    }
                    if ($('#meta_title').val() == "") {
                        sweetAlert("Warning", "Please enter a valid meta title", "warning");
                        error = error + 'meta_title';
                    } else {

                        formData.append('meta_title', $('#meta_title').val());
                    }
                    if ($('#meta_url').val() == "") {
                        sweetAlert("Warning", "Please enter a valid meta url", "warning");
                        error = error + 'meta_url';
                    } else {

                        formData.append('meta_url', $('#meta_url').val());
                    }
                    if ($('#meta_description').val() == "") {
                        sweetAlert("Warning", "Please enter a valid meta description", "warning");
                        error = error + 'description';
                    } else {

                        formData.append('meta_description', $('#meta_description').val());
                    }


                    if (error == "") {

                        formData.append('article_id', $("#article_id").val());
                        formData.append('comments', comment_value);
                        formData.append('type', 'blogs');
                        formData.append('status', 'published');


                        $.ajax({
                            url: "PHP/edit_article.php",
                            type: "POST",
                            dataType: "json",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: formData,

                            success: function(data) {

                                if (data.status == 201) {

                                    window.location.reload();


                                } else if (data.status == 301) {
                                    console.log(data.error);
                                    alert("error");

                                } else if (data.status == 601) {
                                    console.log(data.error);
                                    alert("error");

                                } else if (data.status == 603) {
                                    console.log(data.error);
                                    alert("error");

                                } else {

                                }
                            }
                        });
                    } else {

                    }
                });
                $('#save').on('click', function(e) {


                    var data = CKEDITOR.instances.editor.getData();
                    e.preventDefault();
                    var error = "";
                    var formData = new FormData();


                    if (visibility_value == "") {

                        error = error + 'visibility';
                        sweetAlert("Warning", "Please select the visibility of your article", "warning");
                    } else {
                        formData.append('visibility', visibility_value);
                    }
                    if ($("#author").val() == "") {
                        error = error + 'author ';
                        sweetAlert("Warning", "Please enter author name", "warning");
                    } else {
                        formData.append('author', $("#author").val());
                    }
                    if ($("#title input").val() == "") {
                        error = error + 'Title ';
                        sweetAlert("Warning", "Please enter title", "warning");
                    } else {
                        formData.append('title', $("#title input").val());
                    }
                    if ($("#slug").val() == "") {
                        error = error + 'slug';
                        sweetAlert("Warning", "Please enter Slug", "warning");
                    } else {
                        formData.append('slug', $("#slug").val());
                    }


                    // Sub category check based on checked sub categories

                    var category_checkings = [];
                    $('input[name="sub_category"]:checked').each(function() {
                        // url_sub.push(this.value + '/' + $("#slug").val());
                        sub_category_check.push(this.id);
                    });
                    $('input[name="category"]:checked').each(function() {

                        category_check.push(this.id);



                    });




                    if (category_check.length == 0 && sub_category_check.length == 0) {


                        error = error + 'category ';
                        sweetAlert("Warning", "Please select  a category or a subcategory", "warning");
                    } else {
                        // formData.append('url', url_sub);
                        formData.append('sub_category_id', sub_category_check);
                        formData.append('category_id', category_check);
                    }
                    if ($("#date_time input[type='radio']:checked").val() == "auto") {
                        formData.append('date_of_posting', $("#auto_date").val());
                        formData.append('time_of_posting', $("#auto_time").val());

                    } else {
                        if ($("#date-of-posting input").val() == "") {
                            error = error + 'date-of-posting ';
                            sweetAlert("Warning", "Please select a valid date", "warning");
                        } else {
                            formData.append('date_of_posting', $("#date-of-posting input").val());
                        }


                        if ($("#time-of-posting input").val() == "") {
                            error = error + 'time-of-posting ';
                            formData.append('time_of_posting', $("#time-of-posting input").val());
                        } else {
                            formData.append('time_of_posting', $("#time-of-posting input").val());
                        }

                    }

                    ;

                    if ($("#excerpt textarea").val() == "") {
                        error = error + 'excerpt ';
                        sweetAlert("Warning", "Please select a valid excerpt", "warning");
                    } else {
                        formData.append('excerpt', $("#excerpt textarea").val());
                    }
                    if ($("#hero-image-alt input").val() == "") {
                        error = error + 'hero-image-alt ';
                        sweetAlert("Warning", "Please select a valid caption", "warning");
                    } else {
                        formData.append('hero_image_alt', $("#hero-image-alt input").val());
                    }
                    var values = $("#meta>tag").map(function() {
                        return $(this).val();
                    });
                    var inputs = $(".tagify__tag ");
                    var tag_list = [];
                    for (var i = 0; i < inputs.length; i++) {
                        tag_list.push(inputs[i].innerText);
                    }
                    if (tag_list.length == 0) {
                        error = error + 'meta';
                        sweetAlert("Warning", "Please enter meta tags", "warning");
                    } else {
                        formData.append('keywords', tag_list);
                    }
                    if (data == "") {
                        error = error + 'blog';
                        sweetAlert("Warning", "Blog field cannot be empty", "warning");
                    } else {
                        formData.append('blog', data);
                    }
                    if ($('#hero-image').val() == "") {


                    } else {

                        formData.append('hero-image', $("#hero-image")[0].files[0]);
                    }
                    if ($('#meta_title').val() == "") {
                        sweetAlert("Warning", "Please enter a valid meta title", "warning");
                        error = error + 'meta_title';
                    } else {

                        formData.append('meta_title', $('#meta_title').val());
                    }
                    if ($('#meta_url').val() == "") {
                        sweetAlert("Warning", "Please enter a valid meta url", "warning");
                        error = error + 'meta_url';
                    } else {

                        formData.append('meta_url', $('#meta_url').val());
                    }
                    if ($('#meta_description').val() == "") {
                        sweetAlert("Warning", "Please enter a valid meta description", "warning");
                        error = error + 'description';
                    } else {

                        formData.append('meta_description', $('#meta_description').val());
                    }


                    if (error == "") {

                        formData.append('article_id', $("#article_id").val());
                        formData.append('comments', comment_value);
                        formData.append('type', 'blogs');
                        formData.append('status', 'draft');


                        $.ajax({
                            url: "PHP/edit_article.php",
                            type: "POST",
                            dataType: "json",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: formData,

                            success: function(data) {

                                if (data.status == 201) {

                                    window.location.reload();


                                } else if (data.status == 301) {
                                    console.log(data.error);
                                    alert("error");

                                } else if (data.status == 601) {
                                    console.log(data.error);
                                    alert("error");

                                } else if (data.status == 603) {
                                    console.log(data.error);
                                    alert("error");

                                } else {

                                }
                            }
                        });
                    } else {

                    }

                });
                $('#preview').on('click', function(e) {


                    var data = CKEDITOR.instances.editor.getData();


                    e.preventDefault();
                    var error = "";

                    var formData = new FormData();

                    if (visibility_value == "") {

                        error = error + 'visibility';
                        sweetAlert("Warning", "Please select the visibility of your article", "warning");
                    } else {
                        formData.append('visibility', visibility_value);
                    }
                    if ($("#author").val() == "") {
                        error = error + 'author ';
                        sweetAlert("Warning", "Please enter author name", "warning");
                    } else {
                        formData.append('author', $("#author").val());
                    }
                    if ($("#title input").val() == "") {
                        error = error + 'Title ';
                        sweetAlert("Warning", "Please enter Title", "warning");
                    } else {
                        formData.append('title', $("#title input").val());
                    }
                    if ($("#slug").val() == "") {
                        error = error + 'slug';
                        sweetAlert("Warning", "Please enter Slug", "warning");
                    } else {
                        formData.append('slug', $("#slug").val());
                    }





                    // Sub category check based on checked sub categories


                    $('input[name="sub_category"]:checked').each(function() {
                        // url_sub.push(this.value + '/' + $("#slug").val());
                        sub_category_check.push(this.id);

                    });




                    $('input[name="category"]:checked').each(function() {

                        category_check.push(this.id);



                    });

                    if (category_check.length == 0 && sub_category_check.length == 0) {


                        error = error + 'category ';
                        sweetAlert("Warning", "Please select  a category or a subcategory", "warning");
                    } else {
                        // formData.append('url', url_sub);
                        formData.append('sub_category_id', sub_category_check);
                        formData.append('category_id', category_check);
                    }

                    if ($("#date_time input[type='radio']:checked").val() == "auto") {
                        formData.append('date_of_posting', $("#auto_date").val());
                        formData.append('time_of_posting', $("#auto_time").val());

                    } else {
                        if ($("#date-of-posting input").val() == "") {
                            error = error + 'date-of-posting ';
                            sweetAlert("Warning", "Please select a valid date", "warning");
                        } else {
                            formData.append('date_of_posting', $("#date-of-posting input").val());
                        }


                        if ($("#time-of-posting input").val() == "") {
                            error = error + 'time-of-posting ';
                            sweetAlert("Warning", "Please select a valid time of posting", "warning");
                        } else {
                            formData.append('time_of_posting', $("#time-of-posting input").val());
                        }

                    }

                    if ($("#excerpt textarea").val() == "") {
                        error = error + 'excerpt ';
                        sweetAlert("Warning", "Please select a valid excerpt", "warning");
                    } else {
                        formData.append('excerpt', $("#excerpt textarea").val());
                    }
                    if ($("#hero-image-alt input").val() == "") {
                        error = error + 'hero-image-alt ';
                        sweetAlert("Warning", "Please select a valid caption", "warning");
                    } else {
                        formData.append('hero_image_alt', $("#hero-image-alt input").val());
                    }
                    var values = $("#meta>tag").map(function() {
                        return $(this).val();
                    });
                    var inputs = $(".tagify__tag ");
                    var tag_list = [];
                    for (var i = 0; i < inputs.length; i++) {
                        tag_list.push(inputs[i].innerText);
                    }
                    if (tag_list.length == 0) {
                        error = error + 'meta';
                        sweetAlert("Warning", "Please enter meta tags", "warning");
                    } else {
                        formData.append('keywords', tag_list);
                    }
                    if (data == "") {
                        error = error + 'blog';
                        sweetAlert("Warning", "Blog field cannot be empty", "warning");
                    } else {
                        formData.append('blog', data);
                    }
                    if ($('#hero-image').val() == "") {

                        formData.append('old-hero-image', $('#old-hero-image').val());
                    } else {

                        formData.append('hero-image', $("#hero-image")[0].files[0]);
                    }

                    if ($('#meta_title').val() == "") {
                        sweetAlert("Warning", "Please enter a valid meta title", "warning");
                        error = error + 'meta_title';
                    } else {

                        formData.append('meta_title', $('#meta_title').val());
                    }

                    if ($('#meta_description').val() == "") {
                        error = error + 'description';
                        sweetAlert("Warning", "Please enter a valid meta description", "warning");
                    } else {

                        formData.append('meta_description', $('#meta_description').val());
                    }

                    if (error == "") {


                        formData.append('comments', comment_value);
                        formData.append('type', 'blogs');
                        formData.append('status', 'preview');
                        $.ajax({
                            url: "PHP/preview.php",
                            type: "POST",
                            dataType: "json",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: formData,

                            success: function(data) {
                                console.log(data);
                                if (data.status == 201) {

                                    window.open(data.url + '/preview', '_blank');

                                } else if (data.status == 301) {
                                    console.log(data.error);
                                    alert("error");
                                } else if (data.status == 601) {
                                    console.log(data.error);
                                    alert("error");
                                } else if (data.status == 603) {
                                    console.log(data.error);
                                    alert("error");
                                } else {}
                            }
                        });
                    } else {

                    }


                });
            });



            // Sub category slug generation

            $("#sub_category2").keyup(function() {
                var Text = $(this).val();

                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $("#sub_category_slug").val(Text);
            });
            var category_id_2;

            // Add sub category

            $('#add-sub-category').on('click', function(e) {
                e.preventDefault();
                var error = "";

                var formData = new FormData();
                value2 = $('#category2').val();
                value3 = $('#sub_category2').val();
                if (value2 == "default") {

                    if ($('#sub_category2').val() == "") {
                        sweetAlert("Warning", "Please enter Sub category name", "warning");
                        error = error + '#sub_category_name';
                    } else {

                        formData.append('category_name', $('#sub_category2').val());
                    }


                    if (error == "") {
                        formData.append('category_slug', $('#sub_category_slug').val());
                        formData.append('type', "blogs");


                        $.ajax({
                            url: "PHP/addCategory.php",
                            type: "POST",
                            dataType: "json",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: formData,

                            success: function(data) {

                                if (data.status == 201) {

                                    $("#category").empty();
                                    $("#category2").empty();
                                    $("#category2").prepend('<option class="form-control" value="default">Select a parent category</option>');
                                    loadCategory();
                                    checkCategory();


                                } else if (data.status == 301) {

                                    alert("error");

                                } else if (data.status == 601) {
                                    console.log(data.error);
                                    alert("error");

                                } else if (data.status == 603) {
                                    console.log(data.error);
                                    alert("error");
                                } else {

                                }
                            }
                        });
                    } else {

                    }



                } else {
                    for (var i = 0; i < category_list.length; i++) {
                        if (value2 == category_list[i]['category_name']) {
                            category_id_2 = category_list[i].category_id;
                            break;
                        }

                    }

                    if ($('#category2').val() == "") {
                        sweetAlert("Warning", "Please enter a valid category name", "warning");
                        error = error + 'category_name';
                    } else {

                        formData.append('category_name', $('#category2').val());
                    }
                    if ($('#sub_category2').val() == "") {
                        sweetAlert("Warning", "Please enter a valid sub categoyr name", "warning");
                        error = error + '#sub_category_name';
                    } else {

                        formData.append('sub_category_name', $('#sub_category2').val());
                    }



                    if (error == "") {
                        formData.append('sub_category_slug', $('#sub_category_slug').val());
                        formData.append('category_id', category_id_2);
                        formData.append('type', "blogs");


                        $.ajax({
                            url: "PHP/addSubCategory.php",
                            type: "POST",
                            dataType: "json",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: formData,

                            success: function(data) {

                                if (data.status == 201) {

                                    $("#category").empty();
                                    $("#category2").empty();
                                    $("#category2").prepend('<option class="form-control" value="default">Select a parent category</option>');
                                    loadCategory();
                                    checkCategory();


                                } else if (data.status == 301) {
                                    console.log(data.error);
                                    alert("error");
                                } else if (data.status == 601) {
                                    console.log(data.error);
                                    alert("error");
                                } else if (data.status == 603) {
                                    console.log(data.error);
                                    alert("error");
                                } else {

                                }
                            }
                        });
                    } else {

                    }

                }

            });
            // category and subcategory start 
            $('[data-search]').on('keyup', function() {
                var searchVal = $(this).val();
                var filterItems = $('[data-filter-item]');
                if (searchVal != '') {
                    filterItems.addClass('hidden');
                    $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
                    $('#category>li').not(":hidden").each(function(index) {
                        var a = $(this).attr('class');
                        console.log(a);
                        a = a.substr(a.indexOf(" ") + 1).split(" ")[0];
                        $(`.${a}`).removeClass('hidden');
                    });
                } else {
                    filterItems.removeClass('hidden');
                }
            });
            // category and subcategory end
        </script>

    </body>

    </html>
<?php
}

?>