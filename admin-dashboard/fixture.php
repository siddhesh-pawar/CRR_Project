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
        <title>Kriyata Admin Dashboard</title>

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

            #reshuffle {
                display: none;
            }

            .table td {
                font-size: 14px;
            }

            .table thead th {
                font-size: 16px;
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
                        <li>
                            <a href="tournaments"><i class="material-icons-outlined">account_circle</i>Tournaments</a>
                        </li>
                        <li>
                            <a href="entries"><i class="material-icons-outlined">create</i>Entries</a>
                        </li>
                        <li class="active-page">
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











                                                <div>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>

                                                                <th scope="col">Team 1</th>
                                                                <th scope="col">VS</th>
                                                                <th scope="col">Team 2</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fixtures">
                                                            <tr>

                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>




                                                <div class="form-group pt-5 d-flex justify-content-center">

                                                    <button class="btn" id="add-fixtures" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">Get Fixture Format</button>
                                                    <button class="btn" id="reshuffle" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">Reshuffle fixtures</button>

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
                var event_list;
                var tour_list;
                var team_list;
                var value;
                var team_fix_list;
                var tour_id;


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
                $('#add-fixtures').on('click', function(e) {
                    $("#add-fixtures").css("display", "none");
                    $("#reshuffle").css("display", "block");
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
                                team_fix_list = data.team;
                                tour_id = data.tour_id;
                                fixtures = [];
                                var x;


                                while (team_fix_list.length != 0) {
                                    if (team_fix_list.length % 2 == 0) {
                                        for (var i = 0; i <= team_fix_list.length; i++) {

                                            var item = team_fix_list[Math.floor(Math.random() * team_fix_list.length)];




                                            var temp_2 = item['team_id'];
                                            console.log(temp_2);
                                            var temp_3 = item['team_name'];
                                            console.log(temp_3);
                                            var team1 = temp_2;
                                            var team_1_name = item['team_name'];


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
                                                team_2_name: team_2_name,

                                            });




                                            // console.log(team_fix_list);

                                        }
                                    } else {
                                        var item = team_fix_list[Math.floor(Math.random() * team_fix_list.length)];
                                        var temp_2 = item['team_id'];
                                        var temp_3 = item['team_name'];
                                        var team1 = temp_2;
                                        var team_1_name = item['team_name'];


                                        var index = team_fix_list.findIndex(x => x.team_id === temp_2);
                                        console.log(index);
                                        team_fix_list.splice(index, 1);

                                        fixtures.push({
                                            team_1: team1,
                                            team_1_name: team_1_name,
                                            team_2: "bye",
                                            team_2_name: "bye",

                                        });
                                    }
                                }




                                console.log(JSON.stringify(fixtures));
                                var formData = new FormData();
                                if (fixtures.length == 0) {
                                    error = error + 'meta';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('fixtures', JSON.stringify(fixtures));
                                }
                                if (fixtures.length == "") {
                                    error = error + 'meta';
                                    sweetAlert("Warning", "Please enter player", "warning");
                                } else {
                                    formData.append('tour_id', tour_id);
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
                                            $('.fixtures').empty();


                                            if (data.status == 201) {
                                                console.log("hello");
                                                $.ajax({
                                                    type: 'POST',
                                                    url: 'PHP/get_fixture_names.php',
                                                    dataType: "json",
                                                    async: false,
                                                    data: {
                                                        tour_id: tour_id

                                                    },
                                                    success: function(data) {
                                                        var fixture_list = data.team;
                                                        console.log(fixture_list);
                                                        for (var i = 0; i < fixture_list.length; i++) {

                                                            $(".fixtures").html($(".fixtures").html() + '<tr><td>' + fixture_list[i]['team_1_name'] + ' </td><td>Vs</td><td>' + fixture_list[i]['team_2_name'] + '</td></tr>');
                                                            // $(".fixtures").html($(".fixtures").html() + '<div class="d-flex justify-content-center"><p>' + fixture_list[i]['team_1_name'] + ' </p><b><p class="ml-5">Vs</b><p class="ml-5">' + fixture_list[i]['team_2_name'] + '</p></div>');
                                                        }


                                                    }
                                                });





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
                        }
                    });

                });
                $('#reshuffle').on('click', function(e) {
                    e.preventDefault();
                    var error = "";
                    var formData = new FormData();
                    $.ajax({
                        type: 'POST',
                        url: 'PHP/delete_fixtures.php',
                        dataType: "json",
                        async: false,
                        data: {
                            tour_id: tour_id

                        },
                        success: function(data) {

                            if (data.status == 201) {
                                $.ajax({
                                    type: 'POST',
                                    url: 'PHP/get_team_names.php',
                                    dataType: "json",
                                    async: false,
                                    data: {
                                        tour_id: $("#tour_name select").val()

                                    },
                                    success: function(data) {
                                        team_fix_list = data.team;
                                        fixtures = [];
                                        var x;

                                        while (team_fix_list.length != 0) {
                                            if (team_fix_list.length % 2 == 0) {
                                                for (var i = 0; i <= team_fix_list.length; i++) {

                                                    var item = team_fix_list[Math.floor(Math.random() * team_fix_list.length)];




                                                    var temp_2 = item['team_id'];
                                                    console.log(temp_2);
                                                    var temp_3 = item['team_name'];
                                                    console.log(temp_3);
                                                    var team1 = temp_2;
                                                    var team_1_name = item['team_name'];


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
                                                        team_2_name: team_2_name,

                                                    });




                                                    // console.log(team_fix_list);

                                                }
                                            } else {
                                                var item = team_fix_list[Math.floor(Math.random() * team_fix_list.length)];
                                                var temp_2 = item['team_id'];
                                                var temp_3 = item['team_name'];
                                                var team1 = temp_2;
                                                var team_1_name = item['team_name'];


                                                var index = team_fix_list.findIndex(x => x.team_id === temp_2);
                                                console.log(index);
                                                team_fix_list.splice(index, 1);

                                                fixtures.push({
                                                    team_1: team1,
                                                    team_1_name: team_1_name,
                                                    team_2: "bye",
                                                    team_2_name: "bye",

                                                });
                                            }
                                        }
                                        console.log(JSON.stringify(fixtures));
                                        var formData = new FormData();
                                        if (fixtures.length == 0) {
                                            error = error + 'meta';
                                            sweetAlert("Warning", "Please enter player", "warning");
                                        } else {
                                            formData.append('fixtures', JSON.stringify(fixtures));
                                        }
                                        if (fixtures.length == "") {
                                            error = error + 'meta';
                                            sweetAlert("Warning", "Please enter player", "warning");
                                        } else {
                                            formData.append('tour_id', tour_id);
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
                                                        $('.fixtures').empty();

                                                        $.ajax({
                                                            type: 'POST',
                                                            url: 'PHP/get_fixture_names.php',
                                                            dataType: "json",
                                                            async: false,
                                                            data: {
                                                                tour_id: tour_id

                                                            },
                                                            success: function(data) {
                                                                var fixture_list = data.team;
                                                                console.log(fixture_list);
                                                                for (var i = 0; i < fixture_list.length; i++) {
                                                                    $(".fixtures").html($(".fixtures").html() + '<tr><td>' + fixture_list[i]['team_1_name'] + ' </td><td>Vs</td><td>' + fixture_list[i]['team_2_name'] + '</td></tr>');
                                                                }


                                                            }
                                                        });


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












                            }
                        }
                    });

                });
            </script>
        <?php
    } ?>