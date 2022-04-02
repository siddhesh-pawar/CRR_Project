<?php
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

        <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
        <style>
            /* .sub {
            display: none;
        }
        
        .post {
            display: none;
        }
        
        .descrip {
            display: none;
        }
        
        .com {
            display: none;
        } */
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
                        <li class="active-page">
                            <a href="index" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
                        </li>
                        <li>
                            <a href="posts"><i class="material-icons-outlined">text_format</i>Posts</a>
                        </li>
        
                        <li>
                            <a href="add_author_home"><i class="material-icons-outlined">account_circle</i>Authors</a>
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
                                    <span>Nancy Moore</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                                    <a class="dropdown-item" href="#">Settings &amp; Privacy</a>
                                    <a class="dropdown-item" href="#">Switch Account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarNav">
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
                        </div>
                        <div class="navbar-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" id="nav-search" placeholder="Search...">
                                </div>
                            </form>
                        </div>
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
                        <div class="page-options">
                            <a href="#" class="btn btn-primary">Upgrade</a>
                        </div>
                    </div>
                    <div class="main-wrapper">
                        <div class="row stats-row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card">
                                            <!-- <div id="sub" class="ph-item">
                                            <div class="ph-col-12">

                                                <div class="ph-row">
                                                    <div class="ph-col-2"></div>
                                                    <div class="ph-col-8 empty"></div>
                                                    <div class="ph-col-4"></div>
                                                    <div class="ph-col-8 empty"></div>


                                                </div>
                                            </div>
                                        </div> -->
                                            <div class="sub card-body p-3">

                                                <div class="row">
                                                    <div class="col-9 pt-0 pb-0">
                                                        <p style="font-size: 20px;">820</p>
                                                        <p class="mb-0" style="font-size: 1rem"><b>Subscribers</b></p>
                                                    </div>
                                                    <div class="col-3 pt-3">
                                                        <i class="top-icons material-icons float-right" class="top-icons" style="color:#2b8fe9; ">visibility</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-lg-3 col-md-6 col-sm-12 ">
                                        <div class="card ">
                                            <!-- <div id="post" class="ph-item">
                                            <div class="ph-col-12">

                                                <div class="ph-row">
                                                    <div class="ph-col-2"></div>
                                                    <div class="ph-col-8 empty"></div>
                                                    <div class="ph-col-4"></div>
                                                    <div class="ph-col-8 empty"></div>


                                                </div>
                                            </div>
                                        </div> -->
                                            <div class="post card-body p-3 ">

                                                <div class="row ">
                                                    <div class="col-9 ">
                                                        <p style="font-size: 20px; ">820</p>
                                                        <p class="mb-0 " style="font-size: 1rem; "><b>Post</b></p>
                                                    </div>
                                                    <div class="col-3 pt-3 ">
                                                        <i class="top-icons material-icons float-right " class="top-icons" style="color: #c65dfc;">post_add</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 ">
                                        <div class="card ">
                                            <!-- <div id="descrip" class="ph-item">
                                            <div class="ph-col-12">

                                                <div class="ph-row">
                                                    <div class="ph-col-2"></div>
                                                    <div class="ph-col-8 empty"></div>
                                                    <div class="ph-col-4"></div>
                                                    <div class="ph-col-8 empty"></div>


                                                </div>
                                            </div>
                                        </div> -->
                                            <div class="descrip card-body p-3 ">

                                                <div class="row ">
                                                    <div class="col-9 ">
                                                        <p style="font-size: 20px; ">820</p>
                                                        <p class="mb-0 " style="font-size: 1rem; "><b>Pages</b></p>
                                                    </div>
                                                    <div class="col-3 pt-3 ">
                                                        <i class="top-icons material-icons float-right " style="color: #ffa65a;">description</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 ">
                                        <div class="card ">
                                            <!-- <div id="com" class="ph-item">
                                            <div class="ph-col-12">

                                                <div class="ph-row">
                                                    <div class="ph-col-2"></div>
                                                    <div class="ph-col-8 empty"></div>
                                                    <div class="ph-col-4"></div>
                                                    <div class="ph-col-8 empty"></div>


                                                </div>
                                            </div>
                                        </div> -->
                                            <div class="com card-body p-3 ">

                                                <div class="row ">
                                                    <div class="col-9 ">
                                                        <p style="font-size: 20px; ">820</p>
                                                        <p class="mb-0 " style="font-size: 1rem; "><b>Comments</b></p>
                                                    </div>
                                                    <div class="col-3 pt-3 ">
                                                        <i class="top-icons material-icons float-right " style="color: #61ed5f;">sms</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class=" card col-lg-12 ">
                                        <div class="card-header ">
                                            <ul class="nav nav-tabs card-header-tabs ">
                                                <li class="nav-item ">
                                                    <a class="nav-link active " href="# ">Visitors</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link " href="# ">Reports</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link " href="# ">Investments</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body ">
                                            <div class="visitors-stats " style="position: relative; ">
                                                <div class="row ">
                                                    <div class="col-lg-6 ">
                                                        <div class="visitors-stats-info ">
                                                            <p>Total visitors in the current period:</p>
                                                            <h5>77,871</h5>
                                                            <span>6-26 Apr</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 ">
                                                        <div class="visitors-stats-info ">
                                                            <p>Unique visitors in the current period and ratio:</p>
                                                            <h5>58,403</h5>
                                                            <span>6-26 Apr</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress ">
                                                    <div class="progress-bar " role="progressbar " style="width: 75% " aria-valuenow="75 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                                </div>
                                                <div id="chart-visitors " style="min-height: 370px; ">
                                                    <div id="apexcharts5tn2qnbz " class="apexcharts-canvas apexcharts5tn2qnbz light zoomable " style="width: 699px; height: 355px; "><svg id="SvgjsSvg1552 " width="699 " height="355 " xmlns="http://www.w3.org/2000/svg
                                                        " version="1.1 " xmlns:xlink="http://www.w3.org/1999/xlink " xmlns:svgjs="http://svgjs.com/svgjs " class="apexcharts-svg " xmlns:data="ApexChartsNS " transform="translate(0, 0) " style="background: transparent;
                                                        ">
                                                            <g id="SvgjsG1554 " class="apexcharts-inner apexcharts-graphical " transform="translate(12, 30) ">
                                                                <defs id="SvgjsDefs1553 ">
                                                                    <clipPath id="gridRectMask5tn2qnbz ">
                                                                        <rect id="SvgjsRect1568 " width="680
                                                        " height="285.98003125 " x="-1.5 " y="-1.5 " rx="0 " ry="0 " fill="#ffffff " opacity="1 " stroke-width="0 " stroke="none " stroke-dasharray="0 "></rect>
                                                                    </clipPath>
                                                                    <clipPath id="gridRectMarkerMask5tn2qnbz
                                                        ">
                                                                        <rect id="SvgjsRect1569 " width="679 " height="284.98003125 " x="-1 " y="-1 " rx="0 " ry="0 " fill="#ffffff " opacity="1 " stroke-width="0 " stroke="none " stroke-dasharray="0
                                                        "></rect>
                                                                    </clipPath>
                                                                    <linearGradient id="SvgjsLinearGradient1575 " x1="0 " y1="0 " x2="0 " y2="1 ">
                                                                        <stop id="SvgjsStop1576 " stop-opacity="0.6 " stop-color="rgba(95,208,165,0.6) " offset="0 "></stop>
                                                                        <stop id="SvgjsStop1577 " stop-opacity="0.2
                                                        " stop-color="rgba(95,208,165,0.2) " offset="1 "></stop>
                                                                        <stop id="SvgjsStop1578 " stop-opacity="0.2 " stop-color="rgba(95,208,165,0.2) " offset="1 "></stop>
                                                                    </linearGradient>
                                                                </defs>
                                                                <line id="SvgjsLine1557 " x1="0
                                                        " y1="0 " x2="0 " y2="282.98003125 " stroke="#b6b6b6 " stroke-dasharray="3 " class="apexcharts-xcrosshairs " x="0 " y="0 " width="1 " height="282.98003125 " fill="#b1b9c4 " filter="none " fill-opacity="0.9
                                                        " stroke-width="1 "></line>
                                                                <g id="SvgjsG1581 " class="apexcharts-xaxis " transform="translate(0, 0) ">
                                                                    <g id="SvgjsG1582 " class="apexcharts-xaxis-texts-g " transform="translate(0, -4) "><text id="SvgjsText1583
                                                        " font-family="Helvetica, Arial, sans-serif " x="54.26435452793836 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1584 " style="font-family: Helvetica, Arial, sans-serif; ">Oct '12</tspan>
                                                                            <title>Oct '12</title>
                                                                        </text><text id="SvgjsText1585
                                                        " font-family="Helvetica, Arial, sans-serif " x="112.70289017341044 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1586 " style="font-family: Helvetica, Arial, sans-serif; ">15 Oct</tspan>
                                                                            <title>15 Oct</title>
                                                                        </text><text id="SvgjsText1587
                                                        " font-family="Helvetica, Arial, sans-serif " x="183.66396917148367 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1588 " style="font-family: Helvetica, Arial, sans-serif; ">Nov '12</tspan>
                                                                            <title>Nov '12</title>
                                                                        </text><text id="SvgjsText1589
                                                        " font-family="Helvetica, Arial, sans-serif " x="242.10250481695576 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1590 " style="font-family: Helvetica, Arial, sans-serif; ">15 Nov</tspan>
                                                                            <title>15 Nov</title>
                                                                        </text><text id="SvgjsText1591
                                                        " font-family="Helvetica, Arial, sans-serif " x="308.8894026974949 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1592 " style="font-family: Helvetica, Arial, sans-serif; ">Dec '12</tspan>
                                                                            <title>Dec '12</title>
                                                                        </text><text id="SvgjsText1593
                                                        " font-family="Helvetica, Arial, sans-serif " x="367.3279383429666 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1594 " style="font-family: Helvetica, Arial, sans-serif; ">15 Dec</tspan>
                                                                            <title>15 Dec</title>
                                                                        </text><text id="SvgjsText1595
                                                        " font-family="Helvetica, Arial, sans-serif " x="438.28901734103937 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1596 " style="font-family: Helvetica, Arial, sans-serif; ">Jan '13</tspan>
                                                                            <title>Jan '13</title>
                                                                        </text><text id="SvgjsText1597
                                                        " font-family="Helvetica, Arial, sans-serif " x="496.72755298651106 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1598 " style="font-family: Helvetica, Arial, sans-serif; ">15 Jan</tspan>
                                                                            <title>15 Jan</title>
                                                                        </text><text id="SvgjsText1599
                                                        " font-family="Helvetica, Arial, sans-serif " x="567.6886319845846 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1600 " style="font-family: Helvetica, Arial, sans-serif; ">Feb '13</tspan>
                                                                            <title>Feb '13</title>
                                                                        </text><text id="SvgjsText1601
                                                        " font-family="Helvetica, Arial, sans-serif " x="626.1271676300571 " y="311.98003125 " text-anchor="middle " dominant-baseline="auto " font-size="12px " fill="rgba(94, 96, 110, .5) " class="apexcharts-xaxis-label
                                                        " style="font-family: Helvetica, Arial, sans-serif; ">
                                                                            <tspan id="SvgjsTspan1602 " style="font-family: Helvetica, Arial, sans-serif; ">15 Feb</tspan>
                                                                            <title>15 Feb</title>
                                                                        </text></g>
                                                                    <line id="SvgjsLine1603
                                                        " x1="0 " y1="283.98003125 " x2="677 " y2="283.98003125 " stroke="transparent " stroke-dasharray="0 " stroke-width="1 "></line>
                                                                </g>
                                                                <g id="SvgjsG1605 " class="apexcharts-grid ">
                                                                    <g id="SvgjsG1606 " class="apexcharts-gridlines-horizontal
                                                        ">
                                                                        <line id="SvgjsLine1618 " x1="0 " y1="0 " x2="677 " y2="0 " stroke="rgba(94, 96, 110, .5) " stroke-dasharray="4 " class="apexcharts-gridline "></line>
                                                                        <line id="SvgjsLine1619 " x1="0 " y1="47.16333854166667
                                                        " x2="677 " y2="47.16333854166667 " stroke="rgba(94, 96, 110, .5) " stroke-dasharray="4 " class="apexcharts-gridline "></line>
                                                                        <line id="SvgjsLine1620 " x1="0 " y1="94.32667708333334 " x2="677 " y2="94.32667708333334
                                                        " stroke="rgba(94, 96, 110, .5) " stroke-dasharray="4 " class="apexcharts-gridline "></line>
                                                                        <line id="SvgjsLine1621 " x1="0 " y1="141.490015625 " x2="677 " y2="141.490015625 " stroke="rgba(94, 96, 110, .5)
                                                        " stroke-dasharray="4 " class="apexcharts-gridline "></line>
                                                                        <line id="SvgjsLine1622 " x1="0 " y1="188.65335416666667 " x2="677 " y2="188.65335416666667 " stroke="rgba(94, 96, 110, .5) " stroke-dasharray="4 " class="apexcharts-gridline
                                                        "></line>
                                                                        <line id="SvgjsLine1623 " x1="0 " y1="235.81669270833333 " x2="677 " y2="235.81669270833333 " stroke="rgba(94, 96, 110, .5) " stroke-dasharray="4 " class="apexcharts-gridline "></line>
                                                                        <line id="SvgjsLine1624
                                                        " x1="0 " y1="282.98003125 " x2="677 " y2="282.98003125 " stroke="rgba(94, 96, 110, .5) " stroke-dasharray="4 " class="apexcharts-gridline "></line>
                                                                    </g>
                                                                    <g id="SvgjsG1607 " class="apexcharts-gridlines-vertical
                                                        "></g>
                                                                    <line id="SvgjsLine1608 " x1="54.26435452793836 " y1="283.98003125 " x2="54.26435452793836 " y2="289.98003125 " stroke="#78909c " stroke-dasharray="0 " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1609
                                                        " x1="112.70289017341044 " y1="283.98003125 " x2="112.70289017341044 " y2="289.98003125 " stroke="#78909c " stroke-dasharray="0 " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1610 " x1="183.66396917148367
                                                        " y1="283.98003125 " x2="183.66396917148367 " y2="289.98003125 " stroke="#78909c " stroke-dasharray="0 " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1611 " x1="242.10250481695576 " y1="283.98003125
                                                        " x2="242.10250481695576 " y2="289.98003125 " stroke="#78909c " stroke-dasharray="0 " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1612 " x1="308.8894026974949 " y1="283.98003125 " x2="308.8894026974949
                                                        " y2="289.98003125 " stroke="#78909c " stroke-dasharray="0 " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1613 " x1="367.3279383429666 " y1="283.98003125 " x2="367.3279383429666 " y2="289.98003125
                                                        " stroke="#78909c " stroke-dasharray="0 " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1614 " x1="438.28901734103937 " y1="283.98003125 " x2="438.28901734103937 " y2="289.98003125 " stroke="#78909c
                                                        " stroke-dasharray="0 " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1615 " x1="496.72755298651106 " y1="283.98003125 " x2="496.72755298651106 " y2="289.98003125 " stroke="#78909c " stroke-dasharray="0
                                                        " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1616 " x1="567.6886319845846 " y1="283.98003125 " x2="567.6886319845846 " y2="289.98003125 " stroke="#78909c " stroke-dasharray="0 " class="apexcharts-xaxis-tick
                                                        "></line>
                                                                    <line id="SvgjsLine1617 " x1="626.1271676300571 " y1="283.98003125 " x2="626.1271676300571 " y2="289.98003125 " stroke="#78909c " stroke-dasharray="0 " class="apexcharts-xaxis-tick "></line>
                                                                    <line id="SvgjsLine1626
                                                        " x1="0 " y1="282.98003125 " x2="677 " y2="282.98003125 " stroke="transparent " stroke-dasharray="0 "></line>
                                                                    <line id="SvgjsLine1625 " x1="0 " y1="1 " x2="0 " y2="282.98003125 " stroke="transparent
                                                        " stroke-dasharray="0 "></line>
                                                                </g>
                                                                <g id="SvgjsG1571 " class="apexcharts-area-series apexcharts-plot-series ">
                                                                    <g id="SvgjsG1572 " class="apexcharts-series " seriesName="seriesx1 " data:longestSeries="true " rel="1
                                                        " data:realIndex="0 ">
                                                                        <path id="apexcharts-area-0 " d="M 0.6087347463070006 282.98003125L 0.6087347463070006 222.3751412239584C 2.0696981374438024 222.3751412239584 3.3219524727039182 209.40522312500002 4.78291586384072
                                                        209.40522312500002C 6.2438792549775215 209.40522312500002 7.496133590237638 176.15506945312495 8.95709698137444 176.15506945312495C 10.41806037251124 176.15506945312495 11.670314707771357 192.66223794270843
                                                        13.131278098908158 192.66223794270843C 17.514168272318564 192.66223794270843 21.27093127809891 202.56653903645838 25.653821451509316 202.56653903645838C 27.114784842646117 202.56653903645838 28.367039177906232
                                                        214.5931903645834 29.828002569043033 214.5931903645834C 31.288965960179834 214.5931903645834 32.54122029543995 223.31840799479164 34.00218368657675 223.31840799479164C 35.46314707771355 223.31840799479164
                                                        36.71540141297367 216.9513572916668 38.17636480411047 216.9513572916668C 39.63732819524727 216.9513572916668 40.88958253050739 225.4407582291667 42.35054592164419 225.4407582291667C 46.73343609505459
                                                        225.4407582291667 50.49019910083494 221.1960577604167 54.873089274245345 221.1960577604167C 56.334052665382146 221.1960577604167 57.586307000642265 222.3751412239584 59.047270391779065 222.3751412239584C
                                                        60.508233782915866 222.3751412239584 61.760488118175985 221.66769114583326 63.221451509312786 221.66769114583326C 64.68241490044959 221.66769114583326 65.9346692357097 219.78115760416665 67.3956326268465
                                                        219.78115760416665C 68.8565960179833 219.78115760416665 70.10885035324343 224.73330815104168 71.56981374438023 224.73330815104168C 75.95270391779063 224.73330815104168 79.70946692357097 230.39290877604174
                                                        84.09235709698137 230.39290877604174C 85.55332048811817 230.39290877604174 86.8055748233783 243.362826875 88.2665382145151 243.362826875C 89.7275016056519 243.362826875 90.97975594091201 247.37171065104167
                                                        92.44071933204881 247.37171065104167C 93.90168272318562 247.37171065104167 95.15393705844573 241.0046599479167 96.61490044958254 241.0046599479167C 98.07586384071934 241.0046599479167 99.32811817597945
                                                        237.23159286458326 100.78908156711626 237.23159286458326C 105.17197174052666 237.23159286458326 108.92873474630701 228.03474184895833 113.31162491971742 228.03474184895833C 114.77258831085422 228.03474184895833
                                                        116.02484264611434 206.57542281249994 117.48580603725114 206.57542281249994C 118.94676942838794 206.57542281249994 120.19902376364806 201.85908895833336 121.65998715478486 201.85908895833336C 123.12095054592166
                                                        201.85908895833336 124.37320488118176 200.9158221875001 125.83416827231856 200.9158221875001C 127.29513166345536 200.9158221875001 128.5473859987155 206.57542281249994 130.0083493898523 206.57542281249994C
                                                        134.3912395632627 206.57542281249994 138.14800256904306 200.68000549479166 142.53089274245346 200.68000549479166C 143.99185613359026 200.68000549479166 145.24411046885035 204.92470596354167 146.70507385998715
                                                        204.92470596354167C 148.16603725112395 204.92470596354167 149.41829158638407 203.74562250000008 150.87925497752087 203.74562250000008C 152.34021836865767 203.74562250000008 153.5924727039178 202.80235572916672
                                                        155.0534360950546 202.80235572916672C 156.5143994861914 202.80235572916672 157.7666538214515 188.41753747395842 159.2276172125883 188.41753747395842C 166.59330764290303 188.41753747395842 172.90675658317278
                                                        188.18172078124996 180.2724470134875 188.18172078124996C 181.7334104046243 188.18172078124996 182.9856647398844 180.16395322916674 184.4466281310212 180.16395322916674C 185.90759152215801 180.16395322916674
                                                        187.15984585741813 179.45650315104172 188.62080924855493 179.45650315104172C 193.00369942196534 179.45650315104172 196.7604624277457 182.9937535416666 201.1433526011561 182.9937535416666C 202.6043159922929
                                                        182.9937535416666 203.85657032755302 179.45650315104172 205.31753371868982 179.45650315104172C 206.77849710982662 179.45650315104172 208.03075144508674 201.15163888020834 209.49171483622354 201.15163888020834C
                                                        210.95267822736034 201.15163888020834 212.20493256262043 212.70665682291678 213.66589595375723 212.70665682291678C 215.12685934489403 212.70665682291678 216.37911368015415 214.5931903645834 217.84007707129095
                                                        214.5931903645834C 222.22296724470135 214.5931903645834 225.9797302504817 219.30952421874997 230.3626204238921 219.30952421874997C 231.8235838150289 219.30952421874997 233.07583815028903 223.08259130208342
                                                        234.53680154142583 223.08259130208342C 235.99776493256263 223.08259130208342 237.25001926782275 230.39290877604174 238.71098265895955 230.39290877604174C 240.17194605009635 230.39290877604174 241.42420038535647
                                                        220.724424375 242.88516377649327 220.724424375C 244.34612716763007 220.724424375 245.5983815028902 220.48860768229167 247.059344894027 220.48860768229167C 251.4422350674374 220.48860768229167 255.19899807321772
                                                        214.1215569791666 259.5818882466281 214.1215569791666C 261.04285163776495 214.1215569791666 262.29510597302504 220.724424375 263.7560693641619 220.724424375C 265.21703275529865 220.724424375 266.4692870905588
                                                        216.00809052083332 267.93025048169557 216.00809052083332C 270.85217726396917 216.00809052083332 273.3566859344894 202.80235572916672 276.278612716763 202.80235572916672C 280.66150289017344 202.80235572916672
                                                        284.41826589595377 205.16052265625012 288.8011560693642 205.16052265625012C 290.26211946050097 205.16052265625012 291.5143737957611 207.99032296874998 292.9753371868979 207.99032296874998C 294.4363005780347
                                                        207.99032296874998 295.6885549132948 191.48315447916661 297.14951830443164 191.48315447916661C 298.6104816955684 191.48315447916661 299.86273603082856 186.53100393229158 301.32369942196533 186.53100393229158C
                                                        302.78466281310216 186.53100393229158 304.03691714836225 174.26853591145834 305.4978805394991 174.26853591145834C 309.88077071290945 174.26853591145834 313.63753371868984 172.14618567708328 318.0204238921002
                                                        172.14618567708328C 319.48138728323704 172.14618567708328 320.73364161849713 157.99718411458343 322.19460500963396 157.99718411458343C 323.65556840077073 157.99718411458343 324.9078227360309 155.63901718750003
                                                        326.36878612716765 155.63901718750003C 327.8297495183045 155.63901718750003 329.0820038535646 161.77025119791665 330.5429672447014 161.77025119791665C 332.0039306358382 161.77025119791665 333.2561849710983
                                                        153.75248364583342 334.7171483622351 153.75248364583342C 339.10003853564547 153.75248364583342 342.85680154142585 147.38543294270835 347.2396917148362 147.38543294270835C 348.70065510597306 147.38543294270835
                                                        349.95290944123315 152.33758348958338 351.41387283237 152.33758348958338C 352.87483622350675 152.33758348958338 354.1270905587669 142.43328239583332 355.58805394990367 142.43328239583332C 357.0490173410405
                                                        142.43328239583332 358.3012716763006 152.5734001822916 359.7622350674374 152.5734001822916C 361.2231984585742 152.5734001822916 362.47545279383434 104.70261156250001 363.9364161849711 104.70261156250001C
                                                        368.31930635838154 104.70261156250001 372.07606936416187 108.00404526041666 376.4589595375723 108.00404526041666C 377.91992292870907 108.00404526041666 379.1721772639692 106.35332841145828 380.633140655106
                                                        106.35332841145828C 382.0941040462428 106.35332841145828 383.3463583815029 92.20432684895832 384.80732177263974 92.20432684895832C 386.2682851637765 92.20432684895832 387.52053949903666 97.39229408854169
                                                        388.98150289017343 97.39229408854169C 390.44246628131026 97.39229408854169 391.69472061657035 101.16536117187502 393.1556840077072 101.16536117187502C 397.53857418111755 101.16536117187502 401.29533718689794
                                                        105.41006164062503 405.6782273603083 105.41006164062503C 408.6001541425819 105.41006164062503 411.10466281310215 104.93842825520846 414.02658959537575 104.93842825520846C 415.4875529865125 104.93842825520846
                                                        416.7398073217727 110.83384557291674 418.20077071290945 110.83384557291674C 419.6617341040463 110.83384557291674 420.91398843930637 120.26651328125001 422.3749518304432 120.26651328125001C 426.75784200385357
                                                        120.26651328125001 430.51460500963395 101.87281125000004 434.8974951830443 101.87281125000004C 437.81942196531793 101.87281125000004 440.32393063583817 86.30890953124992 443.24585741811177 86.30890953124992C
                                                        444.7068208092486 86.30890953124992 445.9590751445087 100.22209440104166 447.4200385356455 100.22209440104166C 448.8810019267823 100.22209440104166 450.13325626204244 91.26106007812496 451.5942196531792
                                                        91.26106007812496C 455.97710982658964 91.26106007812496 459.73387283236997 95.74157723958342 464.1167630057804 95.74157723958342C 465.57772639691717 95.74157723958342 466.8299807321773 91.02524338541662
                                                        468.2909441233141 91.02524338541662C 469.7519075144509 91.02524338541662 471.004161849711 78.76277536458338 472.46512524084784 78.76277536458338C 473.9260886319846 78.76277536458338 475.17834296724476
                                                        79.70604213541674 476.63930635838153 79.70604213541674C 478.10026974951836 79.70604213541674 479.35252408477845 92.20432684895832 480.8134874759153 92.20432684895832C 485.19637764932565 92.20432684895832
                                                        488.95314065510604 90.55361000000005 493.3360308285164 90.55361000000005C 494.7969942196532 90.55361000000005 496.04924855491333 90.78942669270839 497.5102119460501 90.78942669270839C 498.97117533718693
                                                        90.78942669270839 500.223429672447 97.15647739583324 501.68439306358385 97.15647739583324C 503.1453564547206 97.15647739583324 504.3976107899808 100.69372778645845 505.85857418111755 100.69372778645845C
                                                        507.3195375722544 100.69372778645845 508.57179190751447 94.79831046875006 510.0327552986513 94.79831046875006C 515.8766088631985 94.79831046875006 520.885626204239 95.50576054687497 526.7294797687862
                                                        95.50576054687497C 528.190443159923 95.50576054687497 529.4426974951831 88.43125976562499 530.9036608863199 88.43125976562499C 532.3646242774566 88.43125976562499 533.6168786127168 91.96851015624998
                                                        535.0778420038536 91.96851015624998C 536.5388053949904 91.96851015624998 537.7910597302505 86.78054291666672 539.2520231213873 86.78054291666672C 543.6349132947977 86.78054291666672 547.3916763005781
                                                        88.66707645833333 551.7745664739884 88.66707645833333C 553.2355298651253 88.66707645833333 554.4877842003854 82.06420906249991 555.9487475915222 82.06420906249991C 557.409710982659 82.06420906249991
                                                        558.6619653179191 95.74157723958342 560.1229287090559 95.74157723958342C 561.5838921001928 95.74157723958342 562.8361464354529 98.33556085937505 564.2971098265897 98.33556085937505C 565.7580732177264
                                                        98.33556085937505 567.0103275529866 86.30890953124992 568.4712909441233 86.30890953124992C 572.8541811175337 86.30890953124992 576.6109441233141 91.96851015624998 580.9938342967245 91.96851015624998C
                                                        582.4547976878613 91.96851015624998 583.7070520231214 82.30002575520837 585.1680154142582 82.30002575520837C 586.628978805395 82.30002575520837 587.8812331406551 84.894009375 589.342196531792 84.894009375C
                                                        590.8031599229288 84.894009375 592.0554142581889 92.675960234375 593.5163776493257 92.675960234375C 594.9773410404625 92.675960234375 596.2295953757225 67.91520750000007 597.6905587668593 67.91520750000007C
                                                        602.0734489402698 67.91520750000007 605.8302119460501 79.23440874999994 610.2131021194606 79.23440874999994C 611.6740655105973 79.23440874999994 612.9263198458575 73.33899143229166 614.3872832369942
                                                        73.33899143229166C 615.848246628131 73.33899143229166 617.1005009633911 75.22552497395827 618.561464354528 75.22552497395827C 620.0224277456648 75.22552497395827 621.2746820809249 79.94185882812508 622.7356454720617
                                                        79.94185882812508C 624.1966088631985 79.94185882812508 625.4488631984586 79.47022544270828 626.9098265895955 79.47022544270828C 632.7536801541427 79.47022544270828 637.7626974951831 70.98082450520826
                                                        643.6065510597304 70.98082450520826C 645.0675144508671 70.98082450520826 646.3197687861273 76.16879174479163 647.780732177264 76.16879174479163C 649.2416955684008 76.16879174479163 650.4939499036609
                                                        86.30890953124992 651.9549132947977 86.30890953124992C 653.4158766859346 86.30890953124992 654.6681310211947 81.35675898437512 656.1290944123315 81.35675898437512C 660.5119845857419 81.35675898437512
                                                        664.2687475915222 91.73269346354164 668.6516377649326 91.73269346354164C 670.1126011560694 91.73269346354164 671.3648554913295 80.41349221354164 672.8258188824664 80.41349221354164C 674.2867822736032
                                                        80.41349221354164 675.5390366088632 56.59600624999996 677 56.59600624999996C 677 56.59600624999996 677 56.59600624999996 677 282.98003125M 677 56.59600624999996z " fill="url(#SvgjsLinearGradient1575)
                                                        " fill-opacity="1 " stroke-opacity="1 " stroke-linecap="butt " stroke-width="0 " stroke-dasharray="0 " class="apexcharts-area " index="0 " clip-path="url(#gridRectMask5tn2qnbz) " pathTo="M 0.6087347463070006 282.98003125L
                                                        0.6087347463070006 222.3751412239584C 2.0696981374438024 222.3751412239584 3.3219524727039182 209.40522312500002 4.78291586384072 209.40522312500002C 6.2438792549775215 209.40522312500002 7.496133590237638
                                                        176.15506945312495 8.95709698137444 176.15506945312495C 10.41806037251124 176.15506945312495 11.670314707771357 192.66223794270843 13.131278098908158 192.66223794270843C 17.514168272318564 192.66223794270843
                                                        21.27093127809891 202.56653903645838 25.653821451509316 202.56653903645838C 27.114784842646117 202.56653903645838 28.367039177906232 214.5931903645834 29.828002569043033 214.5931903645834C 31.288965960179834
                                                        214.5931903645834 32.54122029543995 223.31840799479164 34.00218368657675 223.31840799479164C 35.46314707771355 223.31840799479164 36.71540141297367 216.9513572916668 38.17636480411047 216.9513572916668C
                                                        39.63732819524727 216.9513572916668 40.88958253050739 225.4407582291667 42.35054592164419 225.4407582291667C 46.73343609505459 225.4407582291667 50.49019910083494 221.1960577604167 54.873089274245345
                                                        221.1960577604167C 56.334052665382146 221.1960577604167 57.586307000642265 222.3751412239584 59.047270391779065 222.3751412239584C 60.508233782915866 222.3751412239584 61.760488118175985 221.66769114583326
                                                        63.221451509312786 221.66769114583326C 64.68241490044959 221.66769114583326 65.9346692357097 219.78115760416665 67.3956326268465 219.78115760416665C 68.8565960179833 219.78115760416665 70.10885035324343
                                                        224.73330815104168 71.56981374438023 224.73330815104168C 75.95270391779063 224.73330815104168 79.70946692357097 230.39290877604174 84.09235709698137 230.39290877604174C 85.55332048811817 230.39290877604174
                                                        86.8055748233783 243.362826875 88.2665382145151 243.362826875C 89.7275016056519 243.362826875 90.97975594091201 247.37171065104167 92.44071933204881 247.37171065104167C 93.90168272318562 247.37171065104167
                                                        95.15393705844573 241.0046599479167 96.61490044958254 241.0046599479167C 98.07586384071934 241.0046599479167 99.32811817597945 237.23159286458326 100.78908156711626 237.23159286458326C 105.17197174052666
                                                        237.23159286458326 108.92873474630701 228.03474184895833 113.31162491971742 228.03474184895833C 114.77258831085422 228.03474184895833 116.02484264611434 206.57542281249994 117.48580603725114 206.57542281249994C
                                                        118.94676942838794 206.57542281249994 120.19902376364806 201.85908895833336 121.65998715478486 201.85908895833336C 123.12095054592166 201.85908895833336 124.37320488118176 200.9158221875001 125.83416827231856
                                                        200.9158221875001C 127.29513166345536 200.9158221875001 128.5473859987155 206.57542281249994 130.0083493898523 206.57542281249994C 134.3912395632627 206.57542281249994 138.14800256904306 200.68000549479166
                                                        142.53089274245346 200.68000549479166C 143.99185613359026 200.68000549479166 145.24411046885035 204.92470596354167 146.70507385998715 204.92470596354167C 148.16603725112395 204.92470596354167 149.41829158638407
                                                        203.74562250000008 150.87925497752087 203.74562250000008C 152.34021836865767 203.74562250000008 153.5924727039178 202.80235572916672 155.0534360950546 202.80235572916672C 156.5143994861914 202.80235572916672
                                                        157.7666538214515 188.41753747395842 159.2276172125883 188.41753747395842C 166.59330764290303 188.41753747395842 172.90675658317278 188.18172078124996 180.2724470134875 188.18172078124996C 181.7334104046243
                                                        188.18172078124996 182.9856647398844 180.16395322916674 184.4466281310212 180.16395322916674C 185.90759152215801 180.16395322916674 187.15984585741813 179.45650315104172 188.62080924855493 179.45650315104172C
                                                        193.00369942196534 179.45650315104172 196.7604624277457 182.9937535416666 201.1433526011561 182.9937535416666C 202.6043159922929 182.9937535416666 203.85657032755302 179.45650315104172 205.31753371868982
                                                        179.45650315104172C 206.77849710982662 179.45650315104172 208.03075144508674 201.15163888020834 209.49171483622354 201.15163888020834C 210.95267822736034 201.15163888020834 212.20493256262043 212.70665682291678
                                                        213.66589595375723 212.70665682291678C 215.12685934489403 212.70665682291678 216.37911368015415 214.5931903645834 217.84007707129095 214.5931903645834C 222.22296724470135 214.5931903645834 225.9797302504817
                                                        219.30952421874997 230.3626204238921 219.30952421874997C 231.8235838150289 219.30952421874997 233.07583815028903 223.08259130208342 234.53680154142583 223.08259130208342C 235.99776493256263 223.08259130208342
                                                        237.25001926782275 230.39290877604174 238.71098265895955 230.39290877604174C 240.17194605009635 230.39290877604174 241.42420038535647 220.724424375 242.88516377649327 220.724424375C 244.34612716763007
                                                        220.724424375 245.5983815028902 220.48860768229167 247.059344894027 220.48860768229167C 251.4422350674374 220.48860768229167 255.19899807321772 214.1215569791666 259.5818882466281 214.1215569791666C
                                                        261.04285163776495 214.1215569791666 262.29510597302504 220.724424375 263.7560693641619 220.724424375C 265.21703275529865 220.724424375 266.4692870905588 216.00809052083332 267.93025048169557 216.00809052083332C
                                                        270.85217726396917 216.00809052083332 273.3566859344894 202.80235572916672 276.278612716763 202.80235572916672C 280.66150289017344 202.80235572916672 284.41826589595377 205.16052265625012 288.8011560693642
                                                        205.16052265625012C 290.26211946050097 205.16052265625012 291.5143737957611 207.99032296874998 292.9753371868979 207.99032296874998C 294.4363005780347 207.99032296874998 295.6885549132948 191.48315447916661
                                                        297.14951830443164 191.48315447916661C 298.6104816955684 191.48315447916661 299.86273603082856 186.53100393229158 301.32369942196533 186.53100393229158C 302.78466281310216 186.53100393229158 304.03691714836225
                                                        174.26853591145834 305.4978805394991 174.26853591145834C 309.88077071290945 174.26853591145834 313.63753371868984 172.14618567708328 318.0204238921002 172.14618567708328C 319.48138728323704 172.14618567708328
                                                        320.73364161849713 157.99718411458343 322.19460500963396 157.99718411458343C 323.65556840077073 157.99718411458343 324.9078227360309 155.63901718750003 326.36878612716765 155.63901718750003C 327.8297495183045
                                                        155.63901718750003 329.0820038535646 161.77025119791665 330.5429672447014 161.77025119791665C 332.0039306358382 161.77025119791665 333.2561849710983 153.75248364583342 334.7171483622351 153.75248364583342C
                                                        339.10003853564547 153.75248364583342 342.85680154142585 147.38543294270835 347.2396917148362 147.38543294270835C 348.70065510597306 147.38543294270835 349.95290944123315 152.33758348958338 351.41387283237
                                                        152.33758348958338C 352.87483622350675 152.33758348958338 354.1270905587669 142.43328239583332 355.58805394990367 142.43328239583332C 357.0490173410405 142.43328239583332 358.3012716763006 152.5734001822916
                                                        359.7622350674374 152.5734001822916C 361.2231984585742 152.5734001822916 362.47545279383434 104.70261156250001 363.9364161849711 104.70261156250001C 368.31930635838154 104.70261156250001 372.07606936416187
                                                        108.00404526041666 376.4589595375723 108.00404526041666C 377.91992292870907 108.00404526041666 379.1721772639692 106.35332841145828 380.633140655106 106.35332841145828C 382.0941040462428 106.35332841145828
                                                        383.3463583815029 92.20432684895832 384.80732177263974 92.20432684895832C 386.2682851637765 92.20432684895832 387.52053949903666 97.39229408854169 388.98150289017343 97.39229408854169C 390.44246628131026
                                                        97.39229408854169 391.69472061657035 101.16536117187502 393.1556840077072 101.16536117187502C 397.53857418111755 101.16536117187502 401.29533718689794 105.41006164062503 405.6782273603083 105.41006164062503C
                                                        408.6001541425819 105.41006164062503 411.10466281310215 104.93842825520846 414.02658959537575 104.93842825520846C 415.4875529865125 104.93842825520846 416.7398073217727 110.83384557291674 418.20077071290945
                                                        110.83384557291674C 419.6617341040463 110.83384557291674 420.91398843930637 120.26651328125001 422.3749518304432 120.26651328125001C 426.75784200385357 120.26651328125001 430.51460500963395 101.87281125000004
                                                        434.8974951830443 101.87281125000004C 437.81942196531793 101.87281125000004 440.32393063583817 86.30890953124992 443.24585741811177 86.30890953124992C 444.7068208092486 86.30890953124992 445.9590751445087
                                                        100.22209440104166 447.4200385356455 100.22209440104166C 448.8810019267823 100.22209440104166 450.13325626204244 91.26106007812496 451.5942196531792 91.26106007812496C 455.97710982658964 91.26106007812496
                                                        459.73387283236997 95.74157723958342 464.1167630057804 95.74157723958342C 465.57772639691717 95.74157723958342 466.8299807321773 91.02524338541662 468.2909441233141 91.02524338541662C 469.7519075144509
                                                        91.02524338541662 471.004161849711 78.76277536458338 472.46512524084784 78.76277536458338C 473.9260886319846 78.76277536458338 475.17834296724476 79.70604213541674 476.63930635838153 79.70604213541674C
                                                        478.10026974951836 79.70604213541674 479.35252408477845 92.20432684895832 480.8134874759153 92.20432684895832C 485.19637764932565 92.20432684895832 488.95314065510604 90.55361000000005 493.3360308285164
                                                        90.55361000000005C 494.7969942196532 90.55361000000005 496.04924855491333 90.78942669270839 497.5102119460501 90.78942669270839C 498.97117533718693 90.78942669270839 500.223429672447 97.15647739583324
                                                        501.68439306358385 97.15647739583324C 503.1453564547206 97.15647739583324 504.3976107899808 100.69372778645845 505.85857418111755 100.69372778645845C 507.3195375722544 100.69372778645845 508.57179190751447
                                                        94.79831046875006 510.0327552986513 94.79831046875006C 515.8766088631985 94.79831046875006 520.885626204239 95.50576054687497 526.7294797687862 95.50576054687497C 528.190443159923 95.50576054687497 529.4426974951831
                                                        88.43125976562499 530.9036608863199 88.43125976562499C 532.3646242774566 88.43125976562499 533.6168786127168 91.96851015624998 535.0778420038536 91.96851015624998C 536.5388053949904 91.96851015624998
                                                        537.7910597302505 86.78054291666672 539.2520231213873 86.78054291666672C 543.6349132947977 86.78054291666672 547.3916763005781 88.66707645833333 551.7745664739884 88.66707645833333C 553.2355298651253
                                                        88.66707645833333 554.4877842003854 82.06420906249991 555.9487475915222 82.06420906249991C 557.409710982659 82.06420906249991 558.6619653179191 95.74157723958342 560.1229287090559 95.74157723958342C
                                                        561.5838921001928 95.74157723958342 562.8361464354529 98.33556085937505 564.2971098265897 98.33556085937505C 565.7580732177264 98.33556085937505 567.0103275529866 86.30890953124992 568.4712909441233
                                                        86.30890953124992C 572.8541811175337 86.30890953124992 576.6109441233141 91.96851015624998 580.9938342967245 91.96851015624998C 582.4547976878613 91.96851015624998 583.7070520231214 82.30002575520837
                                                        585.1680154142582 82.30002575520837C 586.628978805395 82.30002575520837 587.8812331406551 84.894009375 589.342196531792 84.894009375C 590.8031599229288 84.894009375 592.0554142581889 92.675960234375
                                                        593.5163776493257 92.675960234375C 594.9773410404625 92.675960234375 596.2295953757225 67.91520750000007 597.6905587668593 67.91520750000007C 602.0734489402698 67.91520750000007 605.8302119460501 79.23440874999994
                                                        610.2131021194606 79.23440874999994C 611.6740655105973 79.23440874999994 612.9263198458575 73.33899143229166 614.3872832369942 73.33899143229166C 615.848246628131 73.33899143229166 617.1005009633911
                                                        75.22552497395827 618.561464354528 75.22552497395827C 620.0224277456648 75.22552497395827 621.2746820809249 79.94185882812508 622.7356454720617 79.94185882812508C 624.1966088631985 79.94185882812508
                                                        625.4488631984586 79.47022544270828 626.9098265895955 79.47022544270828C 632.7536801541427 79.47022544270828 637.7626974951831 70.98082450520826 643.6065510597304 70.98082450520826C 645.0675144508671
                                                        70.98082450520826 646.3197687861273 76.16879174479163 647.780732177264 76.16879174479163C 649.2416955684008 76.16879174479163 650.4939499036609 86.30890953124992 651.9549132947977 86.30890953124992C
                                                        653.4158766859346 86.30890953124992 654.6681310211947 81.35675898437512 656.1290944123315 81.35675898437512C 660.5119845857419 81.35675898437512 664.2687475915222 91.73269346354164 668.6516377649326
                                                        91.73269346354164C 670.1126011560694 91.73269346354164 671.3648554913295 80.41349221354164 672.8258188824664 80.41349221354164C 674.2867822736032 80.41349221354164 675.5390366088632 56.59600624999996
                                                        677 56.59600624999996C 677 56.59600624999996 677 56.59600624999996 677 282.98003125M 677 56.59600624999996z " pathFrom="M -1 990.430109375L -1 990.430109375L 4.78291586384072 990.430109375L 8.95709698137444
                                                        990.430109375L 13.131278098908158 990.430109375L 25.653821451509316 990.430109375L 29.828002569043033 990.430109375L 34.00218368657675 990.430109375L 38.17636480411047 990.430109375L 42.35054592164419
                                                        990.430109375L 54.873089274245345 990.430109375L 59.047270391779065 990.430109375L 63.221451509312786 990.430109375L 67.3956326268465 990.430109375L 71.56981374438023 990.430109375L 84.09235709698137
                                                        990.430109375L 88.2665382145151 990.430109375L 92.44071933204881 990.430109375L 96.61490044958254 990.430109375L 100.78908156711626 990.430109375L 113.31162491971742 990.430109375L 117.48580603725114
                                                        990.430109375L 121.65998715478486 990.430109375L 125.83416827231856 990.430109375L 130.0083493898523 990.430109375L 142.53089274245346 990.430109375L 146.70507385998715 990.430109375L 150.87925497752087
                                                        990.430109375L 155.0534360950546 990.430109375L 159.2276172125883 990.430109375L 180.2724470134875 990.430109375L 184.4466281310212 990.430109375L 188.62080924855493 990.430109375L 201.1433526011561
                                                        990.430109375L 205.31753371868982 990.430109375L 209.49171483622354 990.430109375L 213.66589595375723 990.430109375L 217.84007707129095 990.430109375L 230.3626204238921 990.430109375L 234.53680154142583
                                                        990.430109375L 238.71098265895955 990.430109375L 242.88516377649327 990.430109375L 247.059344894027 990.430109375L 259.5818882466281 990.430109375L 263.7560693641619 990.430109375L 267.93025048169557
                                                        990.430109375L 276.278612716763 990.430109375L 288.8011560693642 990.430109375L 292.9753371868979 990.430109375L 297.14951830443164 990.430109375L 301.32369942196533 990.430109375L 305.4978805394991
                                                        990.430109375L 318.0204238921002 990.430109375L 322.19460500963396 990.430109375L 326.36878612716765 990.430109375L 330.5429672447014 990.430109375L 334.7171483622351 990.430109375L 347.2396917148362
                                                        990.430109375L 351.41387283237 990.430109375L 355.58805394990367 990.430109375L 359.7622350674374 990.430109375L 363.9364161849711 990.430109375L 376.4589595375723 990.430109375L 380.633140655106 990.430109375L
                                                        384.80732177263974 990.430109375L 388.98150289017343 990.430109375L 393.1556840077072 990.430109375L 405.6782273603083 990.430109375L 414.02658959537575 990.430109375L 418.20077071290945 990.430109375L
                                                        422.3749518304432 990.430109375L 434.8974951830443 990.430109375L 443.24585741811177 990.430109375L 447.4200385356455 990.430109375L 451.5942196531792 990.430109375L 464.1167630057804 990.430109375L
                                                        468.2909441233141 990.430109375L 472.46512524084784 990.430109375L 476.63930635838153 990.430109375L 480.8134874759153 990.430109375L 493.3360308285164 990.430109375L 497.5102119460501 990.430109375L
                                                        501.68439306358385 990.430109375L 505.85857418111755 990.430109375L 510.0327552986513 990.430109375L 526.7294797687862 990.430109375L 530.9036608863199 990.430109375L 535.0778420038536 990.430109375L
                                                        539.2520231213873 990.430109375L 551.7745664739884 990.430109375L 555.9487475915222 990.430109375L 560.1229287090559 990.430109375L 564.2971098265897 990.430109375L 568.4712909441233 990.430109375L 580.9938342967245
                                                        990.430109375L 585.1680154142582 990.430109375L 589.342196531792 990.430109375L 593.5163776493257 990.430109375L 597.6905587668593 990.430109375L 610.2131021194606 990.430109375L 614.3872832369942 990.430109375L
                                                        618.561464354528 990.430109375L 622.7356454720617 990.430109375L 626.9098265895955 990.430109375L 643.6065510597304 990.430109375L 647.780732177264 990.430109375L 651.9549132947977 990.430109375L 656.1290944123315
                                                        990.430109375L 668.6516377649326 990.430109375L 672.8258188824664 990.430109375L 677 990.430109375 "></path>
                                                                        <path id="apexcharts-area-0 " d="M 0.6087347463070006 222.3751412239584C 2.0696981374438024
                                                        222.3751412239584 3.3219524727039182 209.40522312500002 4.78291586384072 209.40522312500002C 6.2438792549775215 209.40522312500002 7.496133590237638 176.15506945312495 8.95709698137444 176.15506945312495C
                                                        10.41806037251124 176.15506945312495 11.670314707771357 192.66223794270843 13.131278098908158 192.66223794270843C 17.514168272318564 192.66223794270843 21.27093127809891 202.56653903645838 25.653821451509316
                                                        202.56653903645838C 27.114784842646117 202.56653903645838 28.367039177906232 214.5931903645834 29.828002569043033 214.5931903645834C 31.288965960179834 214.5931903645834 32.54122029543995 223.31840799479164
                                                        34.00218368657675 223.31840799479164C 35.46314707771355 223.31840799479164 36.71540141297367 216.9513572916668 38.17636480411047 216.9513572916668C 39.63732819524727 216.9513572916668 40.88958253050739
                                                        225.4407582291667 42.35054592164419 225.4407582291667C 46.73343609505459 225.4407582291667 50.49019910083494 221.1960577604167 54.873089274245345 221.1960577604167C 56.334052665382146 221.1960577604167
                                                        57.586307000642265 222.3751412239584 59.047270391779065 222.3751412239584C 60.508233782915866 222.3751412239584 61.760488118175985 221.66769114583326 63.221451509312786 221.66769114583326C 64.68241490044959
                                                        221.66769114583326 65.9346692357097 219.78115760416665 67.3956326268465 219.78115760416665C 68.8565960179833 219.78115760416665 70.10885035324343 224.73330815104168 71.56981374438023 224.73330815104168C
                                                        75.95270391779063 224.73330815104168 79.70946692357097 230.39290877604174 84.09235709698137 230.39290877604174C 85.55332048811817 230.39290877604174 86.8055748233783 243.362826875 88.2665382145151 243.362826875C
                                                        89.7275016056519 243.362826875 90.97975594091201 247.37171065104167 92.44071933204881 247.37171065104167C 93.90168272318562 247.37171065104167 95.15393705844573 241.0046599479167 96.61490044958254 241.0046599479167C
                                                        98.07586384071934 241.0046599479167 99.32811817597945 237.23159286458326 100.78908156711626 237.23159286458326C 105.17197174052666 237.23159286458326 108.92873474630701 228.03474184895833 113.31162491971742
                                                        228.03474184895833C 114.77258831085422 228.03474184895833 116.02484264611434 206.57542281249994 117.48580603725114 206.57542281249994C 118.94676942838794 206.57542281249994 120.19902376364806 201.85908895833336
                                                        121.65998715478486 201.85908895833336C 123.12095054592166 201.85908895833336 124.37320488118176 200.9158221875001 125.83416827231856 200.9158221875001C 127.29513166345536 200.9158221875001 128.5473859987155
                                                        206.57542281249994 130.0083493898523 206.57542281249994C 134.3912395632627 206.57542281249994 138.14800256904306 200.68000549479166 142.53089274245346 200.68000549479166C 143.99185613359026 200.68000549479166
                                                        145.24411046885035 204.92470596354167 146.70507385998715 204.92470596354167C 148.16603725112395 204.92470596354167 149.41829158638407 203.74562250000008 150.87925497752087 203.74562250000008C 152.34021836865767
                                                        203.74562250000008 153.5924727039178 202.80235572916672 155.0534360950546 202.80235572916672C 156.5143994861914 202.80235572916672 157.7666538214515 188.41753747395842 159.2276172125883 188.41753747395842C
                                                        166.59330764290303 188.41753747395842 172.90675658317278 188.18172078124996 180.2724470134875 188.18172078124996C 181.7334104046243 188.18172078124996 182.9856647398844 180.16395322916674 184.4466281310212
                                                        180.16395322916674C 185.90759152215801 180.16395322916674 187.15984585741813 179.45650315104172 188.62080924855493 179.45650315104172C 193.00369942196534 179.45650315104172 196.7604624277457 182.9937535416666
                                                        201.1433526011561 182.9937535416666C 202.6043159922929 182.9937535416666 203.85657032755302 179.45650315104172 205.31753371868982 179.45650315104172C 206.77849710982662 179.45650315104172 208.03075144508674
                                                        201.15163888020834 209.49171483622354 201.15163888020834C 210.95267822736034 201.15163888020834 212.20493256262043 212.70665682291678 213.66589595375723 212.70665682291678C 215.12685934489403 212.70665682291678
                                                        216.37911368015415 214.5931903645834 217.84007707129095 214.5931903645834C 222.22296724470135 214.5931903645834 225.9797302504817 219.30952421874997 230.3626204238921 219.30952421874997C 231.8235838150289
                                                        219.30952421874997 233.07583815028903 223.08259130208342 234.53680154142583 223.08259130208342C 235.99776493256263 223.08259130208342 237.25001926782275 230.39290877604174 238.71098265895955 230.39290877604174C
                                                        240.17194605009635 230.39290877604174 241.42420038535647 220.724424375 242.88516377649327 220.724424375C 244.34612716763007 220.724424375 245.5983815028902 220.48860768229167 247.059344894027 220.48860768229167C
                                                        251.4422350674374 220.48860768229167 255.19899807321772 214.1215569791666 259.5818882466281 214.1215569791666C 261.04285163776495 214.1215569791666 262.29510597302504 220.724424375 263.7560693641619
                                                        220.724424375C 265.21703275529865 220.724424375 266.4692870905588 216.00809052083332 267.93025048169557 216.00809052083332C 270.85217726396917 216.00809052083332 273.3566859344894 202.80235572916672
                                                        276.278612716763 202.80235572916672C 280.66150289017344 202.80235572916672 284.41826589595377 205.16052265625012 288.8011560693642 205.16052265625012C 290.26211946050097 205.16052265625012 291.5143737957611
                                                        207.99032296874998 292.9753371868979 207.99032296874998C 294.4363005780347 207.99032296874998 295.6885549132948 191.48315447916661 297.14951830443164 191.48315447916661C 298.6104816955684 191.48315447916661
                                                        299.86273603082856 186.53100393229158 301.32369942196533 186.53100393229158C 302.78466281310216 186.53100393229158 304.03691714836225 174.26853591145834 305.4978805394991 174.26853591145834C 309.88077071290945
                                                        174.26853591145834 313.63753371868984 172.14618567708328 318.0204238921002 172.14618567708328C 319.48138728323704 172.14618567708328 320.73364161849713 157.99718411458343 322.19460500963396 157.99718411458343C
                                                        323.65556840077073 157.99718411458343 324.9078227360309 155.63901718750003 326.36878612716765 155.63901718750003C 327.8297495183045 155.63901718750003 329.0820038535646 161.77025119791665 330.5429672447014
                                                        161.77025119791665C 332.0039306358382 161.77025119791665 333.2561849710983 153.75248364583342 334.7171483622351 153.75248364583342C 339.10003853564547 153.75248364583342 342.85680154142585 147.38543294270835
                                                        347.2396917148362 147.38543294270835C 348.70065510597306 147.38543294270835 349.95290944123315 152.33758348958338 351.41387283237 152.33758348958338C 352.87483622350675 152.33758348958338 354.1270905587669
                                                        142.43328239583332 355.58805394990367 142.43328239583332C 357.0490173410405 142.43328239583332 358.3012716763006 152.5734001822916 359.7622350674374 152.5734001822916C 361.2231984585742 152.5734001822916
                                                        362.47545279383434 104.70261156250001 363.9364161849711 104.70261156250001C 368.31930635838154 104.70261156250001 372.07606936416187 108.00404526041666 376.4589595375723 108.00404526041666C 377.91992292870907
                                                        108.00404526041666 379.1721772639692 106.35332841145828 380.633140655106 106.35332841145828C 382.0941040462428 106.35332841145828 383.3463583815029 92.20432684895832 384.80732177263974 92.20432684895832C
                                                        386.2682851637765 92.20432684895832 387.52053949903666 97.39229408854169 388.98150289017343 97.39229408854169C 390.44246628131026 97.39229408854169 391.69472061657035 101.16536117187502 393.1556840077072
                                                        101.16536117187502C 397.53857418111755 101.16536117187502 401.29533718689794 105.41006164062503 405.6782273603083 105.41006164062503C 408.6001541425819 105.41006164062503 411.10466281310215 104.93842825520846
                                                        414.02658959537575 104.93842825520846C 415.4875529865125 104.93842825520846 416.7398073217727 110.83384557291674 418.20077071290945 110.83384557291674C 419.6617341040463 110.83384557291674 420.91398843930637
                                                        120.26651328125001 422.3749518304432 120.26651328125001C 426.75784200385357 120.26651328125001 430.51460500963395 101.87281125000004 434.8974951830443 101.87281125000004C 437.81942196531793 101.87281125000004
                                                        440.32393063583817 86.30890953124992 443.24585741811177 86.30890953124992C 444.7068208092486 86.30890953124992 445.9590751445087 100.22209440104166 447.4200385356455 100.22209440104166C 448.8810019267823
                                                        100.22209440104166 450.13325626204244 91.26106007812496 451.5942196531792 91.26106007812496C 455.97710982658964 91.26106007812496 459.73387283236997 95.74157723958342 464.1167630057804 95.74157723958342C
                                                        465.57772639691717 95.74157723958342 466.8299807321773 91.02524338541662 468.2909441233141 91.02524338541662C 469.7519075144509 91.02524338541662 471.004161849711 78.76277536458338 472.46512524084784
                                                        78.76277536458338C 473.9260886319846 78.76277536458338 475.17834296724476 79.70604213541674 476.63930635838153 79.70604213541674C 478.10026974951836 79.70604213541674 479.35252408477845 92.20432684895832
                                                        480.8134874759153 92.20432684895832C 485.19637764932565 92.20432684895832 488.95314065510604 90.55361000000005 493.3360308285164 90.55361000000005C 494.7969942196532 90.55361000000005 496.04924855491333
                                                        90.78942669270839 497.5102119460501 90.78942669270839C 498.97117533718693 90.78942669270839 500.223429672447 97.15647739583324 501.68439306358385 97.15647739583324C 503.1453564547206 97.15647739583324
                                                        504.3976107899808 100.69372778645845 505.85857418111755 100.69372778645845C 507.3195375722544 100.69372778645845 508.57179190751447 94.79831046875006 510.0327552986513 94.79831046875006C 515.8766088631985
                                                        94.79831046875006 520.885626204239 95.50576054687497 526.7294797687862 95.50576054687497C 528.190443159923 95.50576054687497 529.4426974951831 88.43125976562499 530.9036608863199 88.43125976562499C 532.3646242774566
                                                        88.43125976562499 533.6168786127168 91.96851015624998 535.0778420038536 91.96851015624998C 536.5388053949904 91.96851015624998 537.7910597302505 86.78054291666672 539.2520231213873 86.78054291666672C
                                                        543.6349132947977 86.78054291666672 547.3916763005781 88.66707645833333 551.7745664739884 88.66707645833333C 553.2355298651253 88.66707645833333 554.4877842003854 82.06420906249991 555.9487475915222
                                                        82.06420906249991C 557.409710982659 82.06420906249991 558.6619653179191 95.74157723958342 560.1229287090559 95.74157723958342C 561.5838921001928 95.74157723958342 562.8361464354529 98.33556085937505
                                                        564.2971098265897 98.33556085937505C 565.7580732177264 98.33556085937505 567.0103275529866 86.30890953124992 568.4712909441233 86.30890953124992C 572.8541811175337 86.30890953124992 576.6109441233141
                                                        91.96851015624998 580.9938342967245 91.96851015624998C 582.4547976878613 91.96851015624998 583.7070520231214 82.30002575520837 585.1680154142582 82.30002575520837C 586.628978805395 82.30002575520837
                                                        587.8812331406551 84.894009375 589.342196531792 84.894009375C 590.8031599229288 84.894009375 592.0554142581889 92.675960234375 593.5163776493257 92.675960234375C 594.9773410404625 92.675960234375 596.2295953757225
                                                        67.91520750000007 597.6905587668593 67.91520750000007C 602.0734489402698 67.91520750000007 605.8302119460501 79.23440874999994 610.2131021194606 79.23440874999994C 611.6740655105973 79.23440874999994
                                                        612.9263198458575 73.33899143229166 614.3872832369942 73.33899143229166C 615.848246628131 73.33899143229166 617.1005009633911 75.22552497395827 618.561464354528 75.22552497395827C 620.0224277456648 75.22552497395827
                                                        621.2746820809249 79.94185882812508 622.7356454720617 79.94185882812508C 624.1966088631985 79.94185882812508 625.4488631984586 79.47022544270828 626.9098265895955 79.47022544270828C 632.7536801541427
                                                        79.47022544270828 637.7626974951831 70.98082450520826 643.6065510597304 70.98082450520826C 645.0675144508671 70.98082450520826 646.3197687861273 76.16879174479163 647.780732177264 76.16879174479163C
                                                        649.2416955684008 76.16879174479163 650.4939499036609 86.30890953124992 651.9549132947977 86.30890953124992C 653.4158766859346 86.30890953124992 654.6681310211947 81.35675898437512 656.1290944123315
                                                        81.35675898437512C 660.5119845857419 81.35675898437512 664.2687475915222 91.73269346354164 668.6516377649326 91.73269346354164C 670.1126011560694 91.73269346354164 671.3648554913295 80.41349221354164
                                                        672.8258188824664 80.41349221354164C 674.2867822736032 80.41349221354164 675.5390366088632 56.59600624999996 677 56.59600624999996 " fill="none " fill-opacity="1 " stroke="#5fd0a5 " stroke-opacity="1
                                                        " stroke-linecap="butt " stroke-width="3 " stroke-dasharray="0 " class="apexcharts-area " index="0 " clip-path="url(#gridRectMask5tn2qnbz) " pathTo="M 0.6087347463070006 222.3751412239584C 2.0696981374438024 222.3751412239584
                                                        3.3219524727039182 209.40522312500002 4.78291586384072 209.40522312500002C 6.2438792549775215 209.40522312500002 7.496133590237638 176.15506945312495 8.95709698137444 176.15506945312495C 10.41806037251124
                                                        176.15506945312495 11.670314707771357 192.66223794270843 13.131278098908158 192.66223794270843C 17.514168272318564 192.66223794270843 21.27093127809891 202.56653903645838 25.653821451509316 202.56653903645838C
                                                        27.114784842646117 202.56653903645838 28.367039177906232 214.5931903645834 29.828002569043033 214.5931903645834C 31.288965960179834 214.5931903645834 32.54122029543995 223.31840799479164 34.00218368657675
                                                        223.31840799479164C 35.46314707771355 223.31840799479164 36.71540141297367 216.9513572916668 38.17636480411047 216.9513572916668C 39.63732819524727 216.9513572916668 40.88958253050739 225.4407582291667
                                                        42.35054592164419 225.4407582291667C 46.73343609505459 225.4407582291667 50.49019910083494 221.1960577604167 54.873089274245345 221.1960577604167C 56.334052665382146 221.1960577604167 57.586307000642265
                                                        222.3751412239584 59.047270391779065 222.3751412239584C 60.508233782915866 222.3751412239584 61.760488118175985 221.66769114583326 63.221451509312786 221.66769114583326C 64.68241490044959 221.66769114583326
                                                        65.9346692357097 219.78115760416665 67.3956326268465 219.78115760416665C 68.8565960179833 219.78115760416665 70.10885035324343 224.73330815104168 71.56981374438023 224.73330815104168C 75.95270391779063
                                                        224.73330815104168 79.70946692357097 230.39290877604174 84.09235709698137 230.39290877604174C 85.55332048811817 230.39290877604174 86.8055748233783 243.362826875 88.2665382145151 243.362826875C 89.7275016056519
                                                        243.362826875 90.97975594091201 247.37171065104167 92.44071933204881 247.37171065104167C 93.90168272318562 247.37171065104167 95.15393705844573 241.0046599479167 96.61490044958254 241.0046599479167C
                                                        98.07586384071934 241.0046599479167 99.32811817597945 237.23159286458326 100.78908156711626 237.23159286458326C 105.17197174052666 237.23159286458326 108.92873474630701 228.03474184895833 113.31162491971742
                                                        228.03474184895833C 114.77258831085422 228.03474184895833 116.02484264611434 206.57542281249994 117.48580603725114 206.57542281249994C 118.94676942838794 206.57542281249994 120.19902376364806 201.85908895833336
                                                        121.65998715478486 201.85908895833336C 123.12095054592166 201.85908895833336 124.37320488118176 200.9158221875001 125.83416827231856 200.9158221875001C 127.29513166345536 200.9158221875001 128.5473859987155
                                                        206.57542281249994 130.0083493898523 206.57542281249994C 134.3912395632627 206.57542281249994 138.14800256904306 200.68000549479166 142.53089274245346 200.68000549479166C 143.99185613359026 200.68000549479166
                                                        145.24411046885035 204.92470596354167 146.70507385998715 204.92470596354167C 148.16603725112395 204.92470596354167 149.41829158638407 203.74562250000008 150.87925497752087 203.74562250000008C 152.34021836865767
                                                        203.74562250000008 153.5924727039178 202.80235572916672 155.0534360950546 202.80235572916672C 156.5143994861914 202.80235572916672 157.7666538214515 188.41753747395842 159.2276172125883 188.41753747395842C
                                                        166.59330764290303 188.41753747395842 172.90675658317278 188.18172078124996 180.2724470134875 188.18172078124996C 181.7334104046243 188.18172078124996 182.9856647398844 180.16395322916674 184.4466281310212
                                                        180.16395322916674C 185.90759152215801 180.16395322916674 187.15984585741813 179.45650315104172 188.62080924855493 179.45650315104172C 193.00369942196534 179.45650315104172 196.7604624277457 182.9937535416666
                                                        201.1433526011561 182.9937535416666C 202.6043159922929 182.9937535416666 203.85657032755302 179.45650315104172 205.31753371868982 179.45650315104172C 206.77849710982662 179.45650315104172 208.03075144508674
                                                        201.15163888020834 209.49171483622354 201.15163888020834C 210.95267822736034 201.15163888020834 212.20493256262043 212.70665682291678 213.66589595375723 212.70665682291678C 215.12685934489403 212.70665682291678
                                                        216.37911368015415 214.5931903645834 217.84007707129095 214.5931903645834C 222.22296724470135 214.5931903645834 225.9797302504817 219.30952421874997 230.3626204238921 219.30952421874997C 231.8235838150289
                                                        219.30952421874997 233.07583815028903 223.08259130208342 234.53680154142583 223.08259130208342C 235.99776493256263 223.08259130208342 237.25001926782275 230.39290877604174 238.71098265895955 230.39290877604174C
                                                        240.17194605009635 230.39290877604174 241.42420038535647 220.724424375 242.88516377649327 220.724424375C 244.34612716763007 220.724424375 245.5983815028902 220.48860768229167 247.059344894027 220.48860768229167C
                                                        251.4422350674374 220.48860768229167 255.19899807321772 214.1215569791666 259.5818882466281 214.1215569791666C 261.04285163776495 214.1215569791666 262.29510597302504 220.724424375 263.7560693641619
                                                        220.724424375C 265.21703275529865 220.724424375 266.4692870905588 216.00809052083332 267.93025048169557 216.00809052083332C 270.85217726396917 216.00809052083332 273.3566859344894 202.80235572916672
                                                        276.278612716763 202.80235572916672C 280.66150289017344 202.80235572916672 284.41826589595377 205.16052265625012 288.8011560693642 205.16052265625012C 290.26211946050097 205.16052265625012 291.5143737957611
                                                        207.99032296874998 292.9753371868979 207.99032296874998C 294.4363005780347 207.99032296874998 295.6885549132948 191.48315447916661 297.14951830443164 191.48315447916661C 298.6104816955684 191.48315447916661
                                                        299.86273603082856 186.53100393229158 301.32369942196533 186.53100393229158C 302.78466281310216 186.53100393229158 304.03691714836225 174.26853591145834 305.4978805394991 174.26853591145834C 309.88077071290945
                                                        174.26853591145834 313.63753371868984 172.14618567708328 318.0204238921002 172.14618567708328C 319.48138728323704 172.14618567708328 320.73364161849713 157.99718411458343 322.19460500963396 157.99718411458343C
                                                        323.65556840077073 157.99718411458343 324.9078227360309 155.63901718750003 326.36878612716765 155.63901718750003C 327.8297495183045 155.63901718750003 329.0820038535646 161.77025119791665 330.5429672447014
                                                        161.77025119791665C 332.0039306358382 161.77025119791665 333.2561849710983 153.75248364583342 334.7171483622351 153.75248364583342C 339.10003853564547 153.75248364583342 342.85680154142585 147.38543294270835
                                                        347.2396917148362 147.38543294270835C 348.70065510597306 147.38543294270835 349.95290944123315 152.33758348958338 351.41387283237 152.33758348958338C 352.87483622350675 152.33758348958338 354.1270905587669
                                                        142.43328239583332 355.58805394990367 142.43328239583332C 357.0490173410405 142.43328239583332 358.3012716763006 152.5734001822916 359.7622350674374 152.5734001822916C 361.2231984585742 152.5734001822916
                                                        362.47545279383434 104.70261156250001 363.9364161849711 104.70261156250001C 368.31930635838154 104.70261156250001 372.07606936416187 108.00404526041666 376.4589595375723 108.00404526041666C 377.91992292870907
                                                        108.00404526041666 379.1721772639692 106.35332841145828 380.633140655106 106.35332841145828C 382.0941040462428 106.35332841145828 383.3463583815029 92.20432684895832 384.80732177263974 92.20432684895832C
                                                        386.2682851637765 92.20432684895832 387.52053949903666 97.39229408854169 388.98150289017343 97.39229408854169C 390.44246628131026 97.39229408854169 391.69472061657035 101.16536117187502 393.1556840077072
                                                        101.16536117187502C 397.53857418111755 101.16536117187502 401.29533718689794 105.41006164062503 405.6782273603083 105.41006164062503C 408.6001541425819 105.41006164062503 411.10466281310215 104.93842825520846
                                                        414.02658959537575 104.93842825520846C 415.4875529865125 104.93842825520846 416.7398073217727 110.83384557291674 418.20077071290945 110.83384557291674C 419.6617341040463 110.83384557291674 420.91398843930637
                                                        120.26651328125001 422.3749518304432 120.26651328125001C 426.75784200385357 120.26651328125001 430.51460500963395 101.87281125000004 434.8974951830443 101.87281125000004C 437.81942196531793 101.87281125000004
                                                        440.32393063583817 86.30890953124992 443.24585741811177 86.30890953124992C 444.7068208092486 86.30890953124992 445.9590751445087 100.22209440104166 447.4200385356455 100.22209440104166C 448.8810019267823
                                                        100.22209440104166 450.13325626204244 91.26106007812496 451.5942196531792 91.26106007812496C 455.97710982658964 91.26106007812496 459.73387283236997 95.74157723958342 464.1167630057804 95.74157723958342C
                                                        465.57772639691717 95.74157723958342 466.8299807321773 91.02524338541662 468.2909441233141 91.02524338541662C 469.7519075144509 91.02524338541662 471.004161849711 78.76277536458338 472.46512524084784
                                                        78.76277536458338C 473.9260886319846 78.76277536458338 475.17834296724476 79.70604213541674 476.63930635838153 79.70604213541674C 478.10026974951836 79.70604213541674 479.35252408477845 92.20432684895832
                                                        480.8134874759153 92.20432684895832C 485.19637764932565 92.20432684895832 488.95314065510604 90.55361000000005 493.3360308285164 90.55361000000005C 494.7969942196532 90.55361000000005 496.04924855491333
                                                        90.78942669270839 497.5102119460501 90.78942669270839C 498.97117533718693 90.78942669270839 500.223429672447 97.15647739583324 501.68439306358385 97.15647739583324C 503.1453564547206 97.15647739583324
                                                        504.3976107899808 100.69372778645845 505.85857418111755 100.69372778645845C 507.3195375722544 100.69372778645845 508.57179190751447 94.79831046875006 510.0327552986513 94.79831046875006C 515.8766088631985
                                                        94.79831046875006 520.885626204239 95.50576054687497 526.7294797687862 95.50576054687497C 528.190443159923 95.50576054687497 529.4426974951831 88.43125976562499 530.9036608863199 88.43125976562499C 532.3646242774566
                                                        88.43125976562499 533.6168786127168 91.96851015624998 535.0778420038536 91.96851015624998C 536.5388053949904 91.96851015624998 537.7910597302505 86.78054291666672 539.2520231213873 86.78054291666672C
                                                        543.6349132947977 86.78054291666672 547.3916763005781 88.66707645833333 551.7745664739884 88.66707645833333C 553.2355298651253 88.66707645833333 554.4877842003854 82.06420906249991 555.9487475915222
                                                        82.06420906249991C 557.409710982659 82.06420906249991 558.6619653179191 95.74157723958342 560.1229287090559 95.74157723958342C 561.5838921001928 95.74157723958342 562.8361464354529 98.33556085937505
                                                        564.2971098265897 98.33556085937505C 565.7580732177264 98.33556085937505 567.0103275529866 86.30890953124992 568.4712909441233 86.30890953124992C 572.8541811175337 86.30890953124992 576.6109441233141
                                                        91.96851015624998 580.9938342967245 91.96851015624998C 582.4547976878613 91.96851015624998 583.7070520231214 82.30002575520837 585.1680154142582 82.30002575520837C 586.628978805395 82.30002575520837
                                                        587.8812331406551 84.894009375 589.342196531792 84.894009375C 590.8031599229288 84.894009375 592.0554142581889 92.675960234375 593.5163776493257 92.675960234375C 594.9773410404625 92.675960234375 596.2295953757225
                                                        67.91520750000007 597.6905587668593 67.91520750000007C 602.0734489402698 67.91520750000007 605.8302119460501 79.23440874999994 610.2131021194606 79.23440874999994C 611.6740655105973 79.23440874999994
                                                        612.9263198458575 73.33899143229166 614.3872832369942 73.33899143229166C 615.848246628131 73.33899143229166 617.1005009633911 75.22552497395827 618.561464354528 75.22552497395827C 620.0224277456648 75.22552497395827
                                                        621.2746820809249 79.94185882812508 622.7356454720617 79.94185882812508C 624.1966088631985 79.94185882812508 625.4488631984586 79.47022544270828 626.9098265895955 79.47022544270828C 632.7536801541427
                                                        79.47022544270828 637.7626974951831 70.98082450520826 643.6065510597304 70.98082450520826C 645.0675144508671 70.98082450520826 646.3197687861273 76.16879174479163 647.780732177264 76.16879174479163C
                                                        649.2416955684008 76.16879174479163 650.4939499036609 86.30890953124992 651.9549132947977 86.30890953124992C 653.4158766859346 86.30890953124992 654.6681310211947 81.35675898437512 656.1290944123315
                                                        81.35675898437512C 660.5119845857419 81.35675898437512 664.2687475915222 91.73269346354164 668.6516377649326 91.73269346354164C 670.1126011560694 91.73269346354164 671.3648554913295 80.41349221354164
                                                        672.8258188824664 80.41349221354164C 674.2867822736032 80.41349221354164 675.5390366088632 56.59600624999996 677 56.59600624999996 " pathFrom="M -1 990.430109375L -1 990.430109375L 4.78291586384072 990.430109375L
                                                        8.95709698137444 990.430109375L 13.131278098908158 990.430109375L 25.653821451509316 990.430109375L 29.828002569043033 990.430109375L 34.00218368657675 990.430109375L 38.17636480411047 990.430109375L
                                                        42.35054592164419 990.430109375L 54.873089274245345 990.430109375L 59.047270391779065 990.430109375L 63.221451509312786 990.430109375L 67.3956326268465 990.430109375L 71.56981374438023 990.430109375L
                                                        84.09235709698137 990.430109375L 88.2665382145151 990.430109375L 92.44071933204881 990.430109375L 96.61490044958254 990.430109375L 100.78908156711626 990.430109375L 113.31162491971742 990.430109375L
                                                        117.48580603725114 990.430109375L 121.65998715478486 990.430109375L 125.83416827231856 990.430109375L 130.0083493898523 990.430109375L 142.53089274245346 990.430109375L 146.70507385998715 990.430109375L
                                                        150.87925497752087 990.430109375L 155.0534360950546 990.430109375L 159.2276172125883 990.430109375L 180.2724470134875 990.430109375L 184.4466281310212 990.430109375L 188.62080924855493 990.430109375L
                                                        201.1433526011561 990.430109375L 205.31753371868982 990.430109375L 209.49171483622354 990.430109375L 213.66589595375723 990.430109375L 217.84007707129095 990.430109375L 230.3626204238921 990.430109375L
                                                        234.53680154142583 990.430109375L 238.71098265895955 990.430109375L 242.88516377649327 990.430109375L 247.059344894027 990.430109375L 259.5818882466281 990.430109375L 263.7560693641619 990.430109375L
                                                        267.93025048169557 990.430109375L 276.278612716763 990.430109375L 288.8011560693642 990.430109375L 292.9753371868979 990.430109375L 297.14951830443164 990.430109375L 301.32369942196533 990.430109375L
                                                        305.4978805394991 990.430109375L 318.0204238921002 990.430109375L 322.19460500963396 990.430109375L 326.36878612716765 990.430109375L 330.5429672447014 990.430109375L 334.7171483622351 990.430109375L
                                                        347.2396917148362 990.430109375L 351.41387283237 990.430109375L 355.58805394990367 990.430109375L 359.7622350674374 990.430109375L 363.9364161849711 990.430109375L 376.4589595375723 990.430109375L 380.633140655106
                                                        990.430109375L 384.80732177263974 990.430109375L 388.98150289017343 990.430109375L 393.1556840077072 990.430109375L 405.6782273603083 990.430109375L 414.02658959537575 990.430109375L 418.20077071290945
                                                        990.430109375L 422.3749518304432 990.430109375L 434.8974951830443 990.430109375L 443.24585741811177 990.430109375L 447.4200385356455 990.430109375L 451.5942196531792 990.430109375L 464.1167630057804
                                                        990.430109375L 468.2909441233141 990.430109375L 472.46512524084784 990.430109375L 476.63930635838153 990.430109375L 480.8134874759153 990.430109375L 493.3360308285164 990.430109375L 497.5102119460501
                                                        990.430109375L 501.68439306358385 990.430109375L 505.85857418111755 990.430109375L 510.0327552986513 990.430109375L 526.7294797687862 990.430109375L 530.9036608863199 990.430109375L 535.0778420038536
                                                        990.430109375L 539.2520231213873 990.430109375L 551.7745664739884 990.430109375L 555.9487475915222 990.430109375L 560.1229287090559 990.430109375L 564.2971098265897 990.430109375L 568.4712909441233 990.430109375L
                                                        580.9938342967245 990.430109375L 585.1680154142582 990.430109375L 589.342196531792 990.430109375L 593.5163776493257 990.430109375L 597.6905587668593 990.430109375L 610.2131021194606 990.430109375L 614.3872832369942
                                                        990.430109375L 618.561464354528 990.430109375L 622.7356454720617 990.430109375L 626.9098265895955 990.430109375L 643.6065510597304 990.430109375L 647.780732177264 990.430109375L 651.9549132947977 990.430109375L
                                                        656.1290944123315 990.430109375L 668.6516377649326 990.430109375L 672.8258188824664 990.430109375L 677 990.430109375 "></path>
                                                                        <g id="SvgjsG1573 " class="apexcharts-series-markers-wrap ">
                                                                            <g class="apexcharts-series-markers
                                                        ">
                                                                                <circle id="SvgjsCircle1632 " r="0 " cx="0 " cy="0 " class="apexcharts-marker wcdjz65s1 no-pointer-events " stroke="#ffffff " fill="#5fd0a5 " fill-opacity="1 " stroke-width="2 " stroke-opacity="0.9
                                                        " default-marker-size="0 "></circle>
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG1574 " class="apexcharts-datalabels "></g>
                                                                    </g>
                                                                </g>
                                                                <line id="SvgjsLine1627 " x1="0 " y1="0 " x2="677 " y2="0 " stroke="#b6b6b6 " stroke-dasharray="0 " stroke-width="1
                                                        " class="apexcharts-ycrosshairs "></line>
                                                                <line id="SvgjsLine1628 " x1="0 " y1="0 " x2="677 " y2="0 " stroke-dasharray="0 " stroke-width="0 " class="apexcharts-ycrosshairs-hidden "></line>
                                                                <g id="SvgjsG1629
                                                        " class="apexcharts-yaxis-annotations "></g>
                                                                <g id="SvgjsG1630 " class="apexcharts-xaxis-annotations "></g>
                                                                <g id="SvgjsG1631 " class="apexcharts-point-annotations "></g>
                                                                <rect id="SvgjsRect1633 " width="0
                                                        " height="0 " x="0 " y="0 " rx="0 " ry="0 " fill="#fefefe " opacity="1 " stroke-width="0 " stroke="none " stroke-dasharray="0 " class="apexcharts-zoom-rect "></rect>
                                                                <rect id="SvgjsRect1634 " width="0
                                                        " height="0 " x="0 " y="0 " rx="0 " ry="0 " fill="#fefefe " opacity="1 " stroke-width="0 " stroke="none " stroke-dasharray="0 " class="apexcharts-selection-rect "></rect>
                                                            </g>
                                                            <rect id="SvgjsRect1556 " width="0
                                                        " height="0 " x="0 " y="0 " rx="0 " ry="0 " fill="#fefefe " opacity="1 " stroke-width="0 " stroke="none " stroke-dasharray="0 "></rect>
                                                            <g id="SvgjsG1604 " class="apexcharts-yaxis " rel="0 " transform="translate(-21,
                                                        0) "></g>
                                                        </svg>
                                                        <div class="apexcharts-legend "></div>
                                                        <div class="apexcharts-tooltip light ">
                                                            <div class="apexcharts-tooltip-title " style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; "></div>
                                                            <div class="apexcharts-tooltip-series-group "><span class="apexcharts-tooltip-marker " style="background-color: rgb(95, 208, 165); "></span>
                                                                <div class="apexcharts-tooltip-text " style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; ">
                                                                    <div class="apexcharts-tooltip-y-group "><span class="apexcharts-tooltip-text-label "></span><span class="apexcharts-tooltip-text-value "></span></div>
                                                                    <div class="apexcharts-tooltip-z-group "><span class="apexcharts-tooltip-text-z-label "></span><span class="apexcharts-tooltip-text-z-value "></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light ">
                                                            <div class="apexcharts-xaxistooltip-text " style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; "></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-5">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="row ">
                                                        <div class="col-7 mb-2 ">
                                                            <p style="font-size: 1.1rem; "><b>Top Referals</b></p>
                                                        </div>
                                                        <div class="col-5 d-flex justify-content-end ">

                                                            <p style="font-size: 13px; ">View all</p>
                                                        </div>

                                                        <div class="col-3 d-flex justify-content-center">
                                                            <div class="m-0" style="border-radius: 50%;background-color: rgba(59,89,153,0.2);width: 35px;text-align: center;height: 35px;">
                                                                <i class="fab fa-facebook-f" style="color:#3b5999;font-size:1.3rem;margin-top:25%;"></i>
                                                            </div>

                                                        </div>
                                                        <div class="col-6 ">
                                                            <p style="font-size: 1.2rem;"><b>Facebook</b></p>


                                                        </div>
                                                        <div class="col-3 d-flex justify-content-end">
                                                            <p><b>234</b></p>


                                                        </div>



                                                        <div class="col-3 d-flex justify-content-center">
                                                            <div class="m-0" style="border-radius: 50%;background-color:rgba(85,172,238,0.2);width: 35px;text-align: center;height: 35px;">
                                                                <i class="fab fa-twitter" style="color: #55acee;font-size:1.3rem;margin-top:25%;"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <p style="font-size: 1.2rem;"><b>Twitter</b></p>


                                                        </div>
                                                        <div class="col-3 d-flex justify-content-end">
                                                            <p><b>234</b></p>


                                                        </div>

                                                        <div class="col-3 d-flex justify-content-center">
                                                            <div class="m-0" style="border-radius: 50%;background-color: rgba(205,32,31,0.2);width: 35px;text-align: center;height: 35px;">
                                                                <i class="fab fa-youtube" style="color: 	#cd201f;font-size:1.3rem;margin-top:25%;"></i>
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <p style="font-size: 1.2rem;"><b>YouTube</b></p>


                                                        </div>
                                                        <div class="col-3 d-flex justify-content-end">
                                                            <p><b>234</b></p>


                                                        </div>

                                                        <div class="col-3 d-flex justify-content-center">
                                                            <div class="m-0" style="border-radius: 50%;background-color: rgba(275,75,57,0.2);;width: 35px;text-align: center;height: 35px;">
                                                                <i class="fab fa-google-plus-g" style="color: #dd4b39;font-size:1.3rem;margin-top:25%;"></i>
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <p style="font-size: 1.2rem;"><b>Google</b></p>


                                                        </div>
                                                        <div class="col-3 d-flex justify-content-end">
                                                            <p><b>234</b></p>


                                                        </div>





                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="card ">
                                                <div class="card-body ">
                                                    <div class="row ">
                                                        <div class="col-8 mb-4 ">
                                                            <h5><b>LATEST POST</b></h5>
                                                        </div>
                                                        <div class="col-4 d-flex justify-content-end ">

                                                            <p style="font-size: 13px; ">Last 7 days</p>
                                                        </div>

                                                        <div class="col-3 pr-2 "><img src="https://via.placeholder.com/60x60 ">
                                                        </div>
                                                        <div class="col-9 ">
                                                            <h5 style="line-height: 2; "><b>SEO Optimizations</b></h5>
                                                            <p style="font-size: 13px; ">19th October 2020</p>
                                                        </div>

                                                        <div class="col-3 pr-2 "><img src="https://via.placeholder.com/60x60 ">
                                                        </div>

                                                        <div class="col-9 mt-2 ">
                                                            <h5 style="line-height: 2; "><b>5 best Business Trips</b></h5>
                                                            <p style="font-size: 13px; ">19th October 2020</p>
                                                        </div>

                                                        <div class="col-3 pr-2 "><img src="https://via.placeholder.com/60x60 ">
                                                        </div>

                                                        <div class="col-9 mt-2 ">
                                                            <h5 style="line-height: 2; "><b>5 best Business Trips</b></h5>
                                                            <p style="font-size: 13px; ">19th October 2020</p>
                                                        </div>

                                                    </div>

                                                    <div class="d-flex flex-row-reverse ">
                                                        <i class="material-icons ">keyboard_arrow_right</i>
                                                        <i class=" material-icons ">keyboard_arrow_left</i>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <div class="card ">
                                    <div class="card-body p-3">
                                        <div class="row ">
                                            <div class="col-7 mb-2 ">
                                                <p style="font-size: 1.1rem; "><b>Discussion</b></p>
                                            </div>
                                            <div class="col-5 d-flex justify-content-end ">

                                                <p style="font-size: 13px; ">View all</p>
                                            </div>

                                            <div class="col-3 "><img src="https://via.placeholder.com/40x40 " style="border-radius: 50%; ">
                                            </div>
                                            <div class="col-7 ">
                                                <p class="mb-0 " style="font-size: 1rem "><b>Luthhfi Chan</b></p>
                                                <p style="font-size: 0.85rem ">Jan 25, 2021</p>

                                            </div>
                                            <div class="col-2">
                                                <i class="material-icons float-right ">more_vert</i>
                                            </div>

                                            <div class="col-3 "><img src="https://via.placeholder.com/40x40 " style="border-radius: 50%; ">
                                            </div>
                                            <div class="col-7 ">
                                                <p class="mb-0 " style="font-size: 1rem "><b>Luthhfi Chan</b></p>
                                                <p style="font-size: 0.85rem ">Jan 25, 2021</p>

                                            </div>
                                            <div class="col-2">
                                                <i class="material-icons float-right ">more_vert</i>
                                            </div>

                                            <div class="col-3 "><img src="https://via.placeholder.com/40x40 " style="border-radius: 50%; ">
                                            </div>
                                            <div class="col-7 ">
                                                <p class="mb-0 " style="font-size: 1rem "><b>Luthhfi Chan</b></p>
                                                <p style="font-size: 0.85rem ">Jan 25, 2021</p>

                                            </div>
                                            <div class="col-2">
                                                <i class="material-icons float-right ">more_vert</i>
                                            </div>

                                            <div class="col-3 "><img src="https://via.placeholder.com/40x40 " style="border-radius: 50%; ">
                                            </div>
                                            <div class="col-7 ">
                                                <p class="mb-0 " style="font-size: 1rem "><b>Luthhfi Chan</b></p>
                                                <p style="font-size: 0.85rem ">Jan 25, 2021</p>

                                            </div>
                                            <div class="col-2">
                                                <i class="material-icons float-right ">more_vert</i>
                                            </div>

                                            <div class="col-3 "><img src="https://via.placeholder.com/40x40 " style="border-radius: 50%; ">
                                            </div>
                                            <div class="col-7 ">
                                                <p class="mb-0 " style="font-size: 1rem "><b>Luthhfi Chan</b></p>
                                                <p style="font-size: 0.85rem ">Jan 25, 2021</p>

                                            </div>
                                            <div class="col-2">
                                                <i class="material-icons float-right ">more_vert</i>
                                            </div>




                                        </div>


                                    </div>
                                </div>
                                <div class="card ">
                                    <div class="card-body p-3">
                                        <div class="row ">
                                            <div class="col-7 ">
                                                <p style="font-size: 1.1rem;"><b>Platforms</b></p>
                                            </div>
                                            <div class="col-5 d-flex justify-content-end ">

                                                <p style="font-size: 13px; ">Last 7 days</p>
                                            </div>

                                            <div class="col-2 d-flex justify-content-start mt-3 ">
                                                <i class="material-icons float-right ">computer</i>
                                            </div>
                                            <div class="col-10 mt-3 mb-3 ">
                                                <p><b>Desktop</b></p>
                                                <div class="progress mt-3 ">
                                                    <div class="progress-bar " role="progressbar " style="width: 25%; " aria-valuenow="25 " aria-valuemin="0 " aria-valuemax="100 ">25%</div>
                                                </div>

                                            </div>

                                            <div class="col-2 d-flex justify-content-start mt-3 ">
                                                <i class="material-icons float-right ">phone_iphone</i>
                                            </div>
                                            <div class="col-10 mt-3 mb-3 ">
                                                <p><b>Mobile</b></p>
                                                <div class="progress mt-3 ">
                                                    <div class="progress-bar " role="progressbar " style="width: 75%; " aria-valuenow="75 " aria-valuemin="0 " aria-valuemax="100 ">75%</div>
                                                </div>

                                            </div>

                                            <div class="col-2 d-flex justify-content-start mt-3 ">
                                                <i class="material-icons float-right">tablet</i>
                                            </div>
                                            <div class="col-10 mt-3 mb-3 ">
                                                <p><b>Tablet</b></p>
                                                <div class="progress mt-3 ">
                                                    <div class="progress-bar " role="progressbar " style="width: 50%; " aria-valuenow="50 " aria-valuemin="0 " aria-valuemax="100 ">50%</div>
                                                </div>

                                            </div>
                                        </div>
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
        <script>
            // $('#dark-theme-toggle').click(function() {
            //     $(".top-icons").css({
            //         "background-color": "transpa",
            //         "font-size": "200%"
            //     });

            // });
            // setTimeout(
            //     function() {

            //         $('#sub').replaceWith($('.sub'));
            //         $('.sub').show();
            //         $('#post').replaceWith($('.post'));
            //         $('.post').show();
            //         $('#descrip').replaceWith($('.descrip'));
            //         $('.descrip').show();
            //         $('#com').replaceWith($('.com'));
            //         $('.com').show();

            //     },
            //     5000
            // );
        </script>
    </body>

    </html>
<?php }
?>