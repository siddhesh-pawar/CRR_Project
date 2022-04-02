<?php
require_once('PHP/link.php');
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
        <link href="assets/sweetalert/sweetalert.css" rel="stylesheet">


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

            .dataTables_length select {
                border-radius: 7px;
                width: 100%;
                padding: 8px 18px;
                font-size: 15px
            }

            input[type=search] {
                border-radius: 7px;
                width: 100%;
                padding: 8px 18px;
                font-size: 15px
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
                        <li class="active-page">
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
                                <li>
                                    <a href="sidebar">Side Bar </a>
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
                        <div class="page-options">
                            <a href="add_sub_comment" class="btn btn-primary">Add a New Comment</a>
                        </div>
                    </div>
                    <div class="main-wrapper">



                        <div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive">






                                        <table id="zero-conf" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User name</th>
                                                    <th>User Email</th>
                                                    <th>Comment</th>
                                                    <th>Sub Comment</th>
                                                    <th class="text-nowrap">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if (mysqli_connect_error()) {
                                                    die("<script>console.log('There is a problem with mysql connection')</script>");
                                                }
                                                $result = mysqli_query($link, "SELECT * FROM (((sub_comment INNER JOIN comments ON sub_comment.comment_id = comments.comment_id))) GROUP BY sub_comment_id");
                                                $i = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $sub_comment_id = $row['sub_comment_id'];
                                                    echo "<input type=\"hidden\" id=\"sub_comment_id\" value=\"{$row['sub_comment_id']}\">";


                                                    echo "<tr><td>{$i}</td><td>{$row['user_name']}</td><td>{$row['user_email']}</td><td>{$row['comment']}</td><td>{$row['sub_comment']}</td>
                                                    <td>
                                                <a href= \"edit_sub_comment.php?id={$row['sub_comment_id']}\"   data-toggle= \"tooltip \" data-original-title= \"Edit \"> <i class= \"fas fa-pencil-alt \" style=\"color:#7d7d83\"></i></a>
                                                <button type=\"button\" id=\"delete\" onClick=\"del('{$row['sub_comment_id']}')\" class=\"far fa-trash-alt  \" style=\"border: none;background-color: transparent;color:#7d7d83\"></button>
                                               
                                            </td></tr>\n";
                                                    $i = $i + 1;
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>User name</th>
                                                    <th>User Email</th>
                                                    <th>Comment</th>
                                                    <th class="text-nowrap">Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>

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
        <script src="assets/sweetalert/sweetalert.min.js"></script>
        <script src="assets/sweetalert/jquery.sweet-alert.custom.js"></script>


        <script>
            $('#zero-conf').DataTable();

            function del(sub_comment_id) {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to retrieve data",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes,Delete it",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }, function(isConfirm) {
                    if (isConfirm) {

                        $.ajax({
                            url: "PHP/deleteSubComment.php",
                            method: "POST",
                            dataType: "json",
                            data: {
                                sub_comment_id: sub_comment_id,
                            },
                            success: function(data) {
                                console.log(data);
                                if (data.status == 201) {
                                    // if(data.link!=""){
                                    window.location.reload();
                                    // }else{
                                    //     window.location.replace("/");
                                    // }

                                } else if (data.status == 301) {
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
                        swal("Cancelled", "Your  file is safe :)", "error");
                    }
                });
            }
        </script>
    </body>

    </html>
<?php

}

?>