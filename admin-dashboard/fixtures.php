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
        <link rel="stylesheet" href="../assets/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
        <link href="assets/sweetalert/sweetalert.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>


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

            .dtp>.dtp-content>.dtp-date-view>header.dtp-header {
                background: #2b8fe9;
            }

            .dtp div.dtp-date,
            .dtp div.dtp-time {
                background: #2b8fe9;

            }

            .material-icons {
                color: #ffffff;
            }

            .dtp table.dtp-picker-days tr>td>a.selected {
                background: #2b8fe9;

            }

            .year-picker-item.active {
                color: #2b8fe9;

            }

            ol {
                padding: 0px;
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
                            <a href="index"><i class="material-icons-outlined">text_format</i>Events</a>
                        </li>
                        <li>
                            <a href="tournaments"><i class="material-icons-outlined">account_circle</i>Tournaments</a>
                        </li>
                        <li>
                            <a href="entries"><i class="material-icons-outlined">create</i>Entries</a>
                        </li>
                        <li class="active-page">
                            <a href="fixtures"><i class="material-icons-outlined">create</i>Fixtures</a>
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
                                <li class="breadcrumb-item active" aria-current="page">Posts</li>
                            </ol>
                        </nav>
                        <div class="page-options d-flex justify-content-center" style="margin-right: 50px;">
                            <a href="add_tournament" class="btn btn-primary mr-0" type="button" id="dropdownMenuButton22" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">
                                Add new tournaments
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
                    <div class="main-wrapper d-flex justify-content-center w-100">



                        <div class="row">
                            <div class="card">
                                <h2 class="d-flex justify-content-center  mb-0 pb-0 pt-4">Tournament Fixture generator</h2>
                                <div class="card-body pt-3">

                                    <div class="row pt-3">

                                        <div class="col-lg-12">
                                            <div class="form-group" id="event">
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Select Event</label>
                                                <select class="form-control custom-select" style="border-radius: 7px;width: 100%;padding: 12px 18px;font-size:15px" data-placeholder="Choose a Category" tabindex="1" onchange="fetch_tour(this.value)">
                                                    <option value="select">Select Event</option>
                                                </select>

                                            </div>
                                            <div class="form-group" id="tour_name" style="display:none;">
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Select Tournament</label>
                                                <select class="form-control custom-select" style="border-radius: 7px;width: 100%;padding: 12px 18px;font-size:15px" data-placeholder="Choose a Category" tabindex="1" onchange="fetch_teams(this.value)">
                                                    <option value="select">Select Tournament</option>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="dates mt-2 mb-1"></div>

                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">List of teams</label>
                                                <ul style="font-weight:bold;font-size:1.3rem;color:#717BA2;" id="teams" style="display:none;"> </ul>


                                                <!-- 
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Description</label>
                                                <textarea id="tour_descrip" class="form-control" rows="5" style="padding: 12px 18px;border-radius: 7px;"></textarea>


                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Players per team</label>
                                                <input type="number" class="form-control" id="player_limit" style="padding: 12px 18px;border-radius: 7px;"> -->




                                                <!-- <div class="round r-of-4">
                                                    <div class="bracket-game">
                                                        <div class="player top win">
                                                            Snute
                                                            <div class="score">
                                                                3
                                                            </div>
                                                        </div>
                                                        <div class="player bot loss">
                                                            TLO
                                                            <div class="score">
                                                                1
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bracket-game cont">
                                                        <div class="player top loss">
                                                            ToD
                                                            <div class="score">
                                                                0
                                                            </div>
                                                        </div>
                                                        <div class="player bot win">
                                                            MC
                                                            <div class="score">
                                                                3
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="connectors r-of-2">
                                                    <div class="top-line"></div>
                                                    <div class="clear"></div>
                                                    <div class="bottom-line"></div>
                                                    <div class="clear"></div>
                                                    <div class="vert-line"></div>
                                                    <div class="clear"></div>
                                                    <div class="next-line"></div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="round r-of-2">
                                                    <div class="bracket-game">
                                                        <div class="player top loss">
                                                            Snute
                                                            <div class="score">
                                                                2
                                                            </div>
                                                        </div>
                                                        <div class="player bot win">
                                                            MC
                                                            <div class="score">
                                                                3
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class="form-group pt-5 d-flex justify-content-center">

                                                    <button class="btn" id="add-fixtures" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">Add Fixtures</button>
                                                </div>




                                            </div>
                                        </div>












                                    </div>
                                </div>








                            </div>
                        </div>


                    </div>

                </div>
            </div>




            <!-- Javascripts -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
            <script src="assets/js/jquery.gracket.min.js"></script>

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
            <script src="../assets/moment/moment.js"></script>
            <!-- <script src="../assets/dropify/dist/js/dropify.min.js"></script> -->
            <script src="../assets/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


            <script>
                $('#start-date').bootstrapMaterialDatePicker({
                    time: false,
                    weekStart: 0
                });
                $('#end-date').bootstrapMaterialDatePicker({
                    time: false,
                    minDate: new Date(),
                    weekStart: 0
                }).on('change', function(e, date) {
                    $('#end-date').bootstrapMaterialDatePicker('setMinDate', date);
                });
                var event_list;
                var tour_list;
                var team_list;
                var value;
                var team_fix_list;


                // Fetch all articles 
                $.ajax({
                    type: 'POST',
                    url: 'PHP/get_events.php',
                    dataType: "json",
                    async: false,
                    data: {
                        type: 'events'
                    },
                    success: function(data) {
                        if (data.status == 201) {

                            event_list = data.event;
                            for (var i = 0; i < event_list.length; i++) {
                                $("#event select").html($("#event select").html() + '<option value="' + event_list[i]['event_id'] + '">' + event_list[i]['event_name'] + ' </option>');
                            }



                        } else if (data.status == 301) {
                            //Email already registered
                            alert(data.error);
                        } else {
                            alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                        }
                    }
                });

                function fetch_teams(value) {
                    $.ajax({
                        type: 'POST',
                        url: 'PHP/get_team_names.php',
                        dataType: "json",
                        async: false,
                        data: {
                            tour_id: value

                        },
                        success: function(data) {
                            if (data.status == 201) {

                                $("#teams").show();
                                $("#teams").empty();


                                team_list = data.team;
                                for (var i = 0; i < team_list.length; i++) {
                                    var j;
                                    j = i + 1;

                                    $("#teams").html($("#teams").html() + '<ol>' + j + ". " + team_list[i]['team_name'] + '</ol>');
                                }





                            } else if (data.status == 301) {
                                //Email already registered
                                alert(data.error);
                            } else {
                                alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                            }
                        }
                    });
                }

                function fetch_tour(value) {
                    $.ajax({
                        type: 'POST',
                        url: 'PHP/get_tour_names.php',
                        dataType: "json",
                        async: false,
                        data: {
                            event_id: value

                        },
                        success: function(data) {
                            if (data.status == 201) {

                                $("#tour_name").show();
                                $('#tour_name select').empty();

                                tour_list = data.tour;
                                for (var i = 0; i < tour_list.length; i++) {
                                    $("#tour_name select").html($("#tour_name select").html() + '<option value="' + tour_list[i]['tour_id'] + '">' + tour_list[i]['tour_name'] + ' </option>');
                                }





                            } else if (data.status == 301) {
                                //Email already registered
                                alert(data.error);
                            } else {
                                alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                            }
                        }
                    });
                }


                // Add comment 

                $('#add-fixtures').on('click', function(e) {
                    e.preventDefault();
                    var error = "";
                    var formData = new FormData();



                    $.ajax({
                        type: 'POST',
                        url: 'PHP/get_team_names.php',
                        dataType: "json",
                        async: false,
                        data: {
                            tour_id: $("#tour_name select").val()

                        },
                        success: function(data) {

                            if (data.status == 201) {
                                var no_of_matches;
                                var no_of_teams;
                                var upper_half_teams;
                                var lower_half_teams;
                                var no_of_byes;
                                var no_of_rounds;
                                var no_of_byes_uh;
                                var no_of_byes_lh;
                                var bye_temp = 1;
                                var flag = 0;



                                team_fix_list = data.team;
                                no_of_teams = team_fix_list.length;
                                no_of_matches = team_fix_list.length - 1;

                                if (no_of_teams % 2 == 0) {
                                    //upper and lower half
                                    upper_half_teams = no_of_teams / 2;
                                    lower_half_teams = no_of_teams / 2;

                                    for (var n = 1; n < 20; n++) {
                                        bye_temp = Math.pow(2, n);
                                        if (bye_temp == no_of_teams) {
                                            no_of_byes = 0;
                                            no_of_byes_uh = 0;
                                            no_of_byes_lh = 0;
                                            no_of_rounds = n;
                                            flag = 1;
                                            break;
                                        } else if (bye_temp > no_of_teams) {
                                            break;
                                        }
                                    }


                                    if (flag == 0) {
                                        no_of_byes = bye_temp - no_of_teams;
                                        no_of_rounds = n;
                                        if (no_of_byes % 2 == 0) {
                                            no_of_byes_uh = no_of_byes / 2;
                                            no_of_byes_lh = no_of_byes / 2;
                                        } else {
                                            no_of_byes_uh = no_of_byes - 1 / 2;
                                            no_of_byes_lh = no_of_byes + 1 / 2;
                                        }


                                    }
                                    // console.log(no_of_teams);
                                    // console.log(no_of_matches);
                                    // console.log(upper_half_teams);
                                    // console.log(lower_half_teams);
                                    // console.log(no_of_byes);
                                    // console.log(no_of_rounds);
                                    // console.log(no_of_byes_uh);
                                    // console.log(no_of_byes_lh);

                                } else {
                                    //upper and lower half
                                    upper_half_teams = no_of_teams + 1 / 2;
                                    lower_half_teams = no_of_teams - 1 / 2;
                                }

                                var x;
                                team_fix_list = data.team;
                                fixtures = [];
                                for (var i = 0; i <= team_fix_list.length; i++) {
                                    // console.log(team_fix_list);
                                    var item = team_fix_list[Math.floor(Math.random() * team_fix_list.length)];
                                    // console.log(item);
                                    var temp_2 = item['team_id'];
                                    var temp_3 = item['team_name'];
                                    var team1 = temp_2;
                                    var team_1_name = item['team_name'];
                                    // console.log(temp_2);
                                    var index = team_fix_list.findIndex(x => x.team_id === temp_2);
                                    console.log(index);
                                    team_fix_list.splice(index, 1);

                                    var item = team_fix_list[Math.floor(Math.random() * team_fix_list.length)];
                                    // console.log(item);
                                    var temp_2 = item['team_id'];
                                    var temp_3 = item['team_name'];
                                    var team2 = temp_2;
                                    var team_2_name = item['team_name'];
                                    // console.log(temp_2);
                                    var index = team_fix_list.findIndex(x => x.team_id === temp_2);
                                    console.log(index);
                                    team_fix_list.splice(index, 1);

                                    fixtures.push({
                                        team_1: team1,
                                        team_1_name: team_1_name,
                                        team_2: team2,
                                        team_2_name: team_2_name
                                    });

                                    // console.log(team_fix_list);

                                }
                                console.log(JSON.stringify(fixtures));
                                if (fixtures.length == 0) {
                                    error = error + 'meta';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('fixtures', JSON.stringify(fixtures));
                                }
                                if (no_of_teams == 0) {
                                    error = error + 'teams';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('no_of_teams', no_of_teams);
                                }
                                if (no_of_rounds == "") {
                                    error = error + 'rounds';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('no_of_rounds', no_of_rounds);
                                }
                                if (no_of_matches == 0) {
                                    error = error + 'matches';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('no_of_matches', no_of_matches);
                                }
                                if (upper_half_teams == "") {
                                    error = error + 'upper_half';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('upper_half_teams', upper_half_teams);
                                }
                                if (lower_half_teams == "") {
                                    error = error + 'lower_half_teams ';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('lower_half_teams', lower_half_teams);
                                }
                                if (no_of_byes == "") {
                                    error = error + 'byes';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('no_of_byes', no_of_byes);
                                }
                                if (no_of_byes_lh == "") {
                                    error = error + 'no_of_byes_lh';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('no_of_byes_lh', no_of_byes_lh);
                                }
                                if (no_of_byes_uh == "") {
                                    error = error + 'no_of_byes_uh';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('no_of_byes_uh', no_of_byes_uh);
                                }
                                if (error == "") {
                                    // console.log(formData);

                                    $.ajax({
                                        url: "PHP/add_fixtures.php",
                                        type: "POST",
                                        dataType: "json",
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: formData,

                                        success: function(data) {

                                            if (data.status == 201) {

                                                alert("success");


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
                                }



                            } else if (data.status == 301) {
                                console.log(data.error);
                                alert("error");

                            } else {
                                //     alert("problem with query");
                            }
                        }


                        // success: function(data) {
                        //     if (data.status == 201) {

                        //        

                        //         if (fixtures.length == 0) {
                        //             error = error + 'meta';
                        //             sweetAlert("Warning", "Please enter player", "warning");
                        //         } else {
                        //             formData.append('fixtures', JSON.stringify(fixtures));
                        //         }
                        //         if (error == "") {
                        //             // console.log(formData);

                        //             $.ajax({
                        //                 url: "PHP/add_fixtures.php",
                        //                 type: "POST",
                        //                 dataType: "json",
                        //                 cache: false,
                        //                 contentType: false,
                        //                 processData: false,
                        //                 data: formData,

                        //                 success: function(data) {

                        //                     if (data.status == 201) {

                        //                         alert("success");


                        //                     } else if (data.status == 301) {
                        //                         console.log(data.error);
                        //                         alert("error");
                        //                     } else if (data.status == 601) {
                        //                         console.log(data.error);
                        //                         alert("error");
                        //                     } else if (data.status == 603) {
                        //                         console.log(data.error);
                        //                         alert("error");
                        //                     } else {

                        //                     }
                        //                 }
                        //             });
                        //         } else {

                        //         }

                        //         // $("#teams").show();
                        //         // $("#teams").empty();

                        //         // while (team_fix_list.length > 0) {


                        //         // var team1 = temp_2;

                        //         // var item = team_fix_list[Math.floor(Math.random() * team_fix_list.length)];
                        //         // // console.log(item);
                        //         // var temp_2 = item['team_id'];
                        //         // // console.log(temp_2);
                        //         // var index = team_fix_list.findIndex(x => x.team_id === temp_2);
                        //         // console.log(index);
                        //         // team_fix_list.splice(index, 1);

                        //         // console.log(team_fix_list);



                        //         // var team2 = temp_2;
                        //         // fixtures.push({
                        //         //     team_1: team1,
                        //         //     team_2: team2
                        //         // });

                        //         // console.log(team1);
                        //         // console.log(team2);


                        //         // 


                        //         // for (var i = 0; i < tour_list.length; i++) {


                        //         // }








                        //         // }


                        //         // console.log(index);
                        //         // team_list.remove(item);

                        //         // for (var i = 0; i < team_list.length; i++) {
                        //         //     team_temp.push({

                        //         //         'name': team_list[i]['team_name']
                        //         //     });

                        //         //     console.log(team_list[i]['team_name']);


                        //         //     // var j;
                        //         //     // j = i + 1;

                        //         //     // $("#teams").html($("#teams").html() + '<ol>' + j + ". " + team_list[i]['team_name'] + '</ol>');
                        //         // }





                        //     } else if (data.status == 301) {
                        //         //Email already registered
                        //         alert(data.error);
                        //     } else {
                        //         alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                        //     }
                        // }
                    });



                    // if ($('#event select').val() == "select") {
                    //     sweetAlert("Warning", "Please enter all fields", "warning");
                    //     error = error + 'title';
                    // } else {

                    //     formData.append('event_id', $('#event select').val());
                    // }
                    // if ($('#tour_name').val() == "") {
                    //     sweetAlert("Warning", "Please enter a valid name", "warning");
                    //     error = error + 'name';
                    // } else {

                    //     formData.append('tour_name', $('#tour_name').val());
                    // }
                    // if ($("#tour_descrip").val() == "") {

                    //     sweetAlert("Warning", "Please enter all fields", "warning");
                    //     error = error + 'tour_descrip';
                    // } else {

                    //     formData.append('tour_descrip', $("#tour_descrip").val());
                    // }
                    // if ($("#player_limit").val() == "") {

                    //     sweetAlert("Warning", "Please enter all fields", "warning");
                    //     error = error + 'player_limit';
                    // } else {

                    //     formData.append('player_limit', $("#player_limit").val());
                    // }
                    // if ($("#start-date").val() == "") {
                    //     sweetAlert("Warning", "Please enter a valid start date", "warning");
                    //     error = error + 'date';
                    // } else {
                    //     formData.append('start_date', $("#start-date").val());
                    // }
                    // if ($("#end-date").val() == "") {
                    //     sweetAlert("Warning", "Please enter a end date", "warning");
                    //     error = error + 'date';
                    // } else {
                    //     formData.append('end_date', $("#end-date").val());

                    // }
                    // if (error == "") {
                    //     console.log(formData);

                    //     $.ajax({
                    //         url: "PHP/addTour.php",
                    //         type: "POST",
                    //         dataType: "json",
                    //         cache: false,
                    //         contentType: false,
                    //         processData: false,
                    //         data: formData,

                    //         success: function(data) {
                    //             console.log(data);
                    //             if (data.status == 201) {

                    //                 window.location.replace("tournaments.php");


                    //             } else if (data.status == 301) {
                    //                 console.log(data.error);
                    //                 alert("error");
                    //             } else if (data.status == 601) {
                    //                 console.log(data.error);
                    //                 console.log(data.start_date_event);
                    //                 console.log(data.end_date_event);
                    //                 alert("error");
                    //             } else if (data.status == 701) {

                    //                 alert(data.error);
                    //             } else {

                    //             }
                    //         }
                    //     });
                    // } else {

                    // }
                });
            </script>
    </body>

    </html>
<?php
}

?>