<?php
require_once('PHP/link.php');
session_start();
if (!isset($_SESSION['admin_email'])) {
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
        <title>Kriyata Admin Dashboard</title>

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
    </head>
    <style>
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

        td {
            max-width: 110px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
    </style>



    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-sidebar">
                <div class="logo-box"><a href="#" class="logo-text">Kriyata</a><a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
                <div class="page-sidebar-inner slimscroll">
                    <ul class="accordion-menu">
                        <li class="sidebar-title">
                            Apps
                        </li>
                        <!-- <li>
                            <a href="index" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
                        </li> -->
                        <li>
                            <a href="index"><i class="material-icons-outlined">text_format</i>Events</a>
                        </li>
                        <li class="active-page">
                            <a href="tournaments"><i class="material-icons-outlined">account_circle</i>Tournaments</a>
                        </li>
                        <li>
                            <a href="entries"><i class="material-icons-outlined">create</i>Entries</a>
                        </li>
                        <li>
                            <a href="fixture"><i class="material-icons-outlined">sports_esports</i>Fixtures</a>
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
                                    <span><?php echo ($_SESSION['admin_email']); ?></span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                                    <a class="dropdown-item" href="#">Settings &amp; Privacy</a>
                                    <a class="dropdown-item" href="#">Switch Account</a>
                                    <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item" href="php/logout_admin.php">Log out</a>
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
                <div class="page-content" style="overflow: initial;">
                    <div class="page-info" style="overflow: initial;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tournaments</li>
                            </ol>
                        </nav>
                        <div class="page-options d-flex justify-content-center" style="margin-right: 50px;">
                            <a href="add_tournaments" class="btn btn-primary mr-4" type="button" id="dropdownMenuButton22" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">
                                Add tournament
                            </a>
                            <a href="add_custom_tournament" class="btn btn-primary mr-0" type="button" id="dropdownMenuButton22" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">
                                Add custom tournaments
                            </a>
                            <!-- <div class="dropdown">

                                <button class="btn dropdown-toggle btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;border-top-left-radius: 0px;border-bottom-left-radius: 0px;">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="add_tournament">Add new posts</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="add_category_home">Add Category</a>
                                    <a class="dropdown-item" href="add_subcategory_home">Add Sub category</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="main-wrapper">







                        <div class="row">
                            <div class="col">
                                <div class="card" class="alert alert-secondary" role="alert">
                                    <div class="card-body table-responsive">
                                        <h2 class="card-title">Tournaments</h2>

                                        <table id="zero-conf" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Tournament name</th>
                                                    <th>Player limit</th>
                                                    <th>Event name</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                    <th>Tournament description</th>
                                                    <th style="width: 100px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                if (mysqli_connect_error()) {
                                                    die("<script>console.log('There is a problem with mysql connection')</script>");
                                                }
                                                $admin_id = $_SESSION['admin_id'];
                                                $result = mysqli_query($link, "SELECT * FROM (tournaments LEFT JOIN events ON tournaments.event_id = events.event_id) WHERE tournaments.created_by = '$admin_id' ");
                                                $i = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    // $category_id = $row['category_id'];
                                                    // echo "<input type=\"hidden\" id=\"category_id\" value=\"{$row['category_id']}\">";

                                                    $start_date = date("d/m/Y", strtotime($row['start_tour_date']));
                                                    $end_date = date("d/m/Y", strtotime($row['end_tour_date']));
                                                    echo "<tr><td>{$i}</td><td>{$row['tour_name']}</td><td>{$row['player_limit']}</td><td>{$row['event_name']}</td><td> $start_date</td><td>$end_date</td><td>{$row['tour_descrip']}</td>
                                                        <td style=\"width: 100px;\">
                                                        <a href= \"tournament-single-info.php?id={$row['id']}\"   data-toggle= \"tooltip \" data-original-title= \"Edit \"> <i class=\"fas fa-info mr-2\" style=\"color:#7d7d83\"></i></a>
                                                        <a href= \"edit_tournament.php?id={$row['id']}\"   data-toggle= \"tooltip \" data-original-title= \"Edit \"> <i class=\"fas fa-pencil-alt\" style=\"color:#7d7d83\"></i></a>
                                                      
                                                        <button type=\"button\" id=\"delete\" onClick=\"del('{$row['id']}')\" class=\"far fa-trash-alt  \" style=\"border: none;background-color: transparent;color:#7d7d83\"></button>
                                                           </td></tr>\n";
                                                    $i = $i + 1;
                                                }
                                                ?>
                                                <!-- <a href= \"{$row['meta_url']}\"   data-toggle= \"tooltip \" data-original-title= \"Edit \"> <i class=\"fas fa-eye mr-2 ml-2\" style=\"color:#7d7d83\"></i></a>
                                            <a href= \"edit_article.php?id={$row['article_id']}\"   data-toggle= \"tooltip \" data-original-title= \"Edit \"> <i class=\"fas fa-pencil-alt\" style=\"color:#7d7d83\"></i></a>
                                            <button type=\"button\" id=\"delete\" onClick=\"del('{$row['article_id']}')\" class=\"far fa-trash-alt  \" style=\"border: none;background-color: transparent;color:#7d7d83\"></button> -->
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Tournament name</th>
                                                    <th>Player limit</th>
                                                    <th>Event name</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                    <th>Tournament description</th>
                                                    <th style="width: 100px;">Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
        <script src="assets/sweetalert/sweetalert.min.js"></script>
        <script src="assets/sweetalert/jquery.sweet-alert.custom.js"></script>


        <script>
            function del(tour_id) {
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
                            url: "PHP/deleteTournament.php",
                            method: "POST",
                            dataType: "json",
                            data: {
                                tour_id: tour_id,
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
            $(document).ready(function() {
                $('#zero-conf').DataTable();



            });
        </script>
    </body>

    </html>
<?php
}
?>