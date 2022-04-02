<?php
require_once('PHP/link.php');
$id = $_REQUEST['id'];
$query = "SELECT * from articles_sub_category where sub_category_id ='" . $id . "'";
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
                        <li class="active-page">
                            <a href="index"><i class="material-icons-outlined">text_format</i>Posts</a>
                        </li>
                        <li>
                            <a href="add_author_home"><i class="material-icons-outlined">account_circle</i>Authors</a>
                        </li>
                        <li>
                            <a href="add_comments_home"><i class="material-icons-outlined">create</i>Comments</a>
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

                    </div>
                    <div class="main-wrapper d-flex justify-content-center col-12">



                        <div class="row">
                            <div class="card">
                                <h2 class="d-flex justify-content-center  mb-0 pb-0 pt-4">Edit a Sub category</h2>
                                <div class="card-body pt-3">

                                    <div class="row pt-3">
                                        <div class="col-lg-12">
                                            <div class="form-group" id="category">
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Select Category</label>
                                                <select class="form-control custom-select" style="border-radius: 7px;width: 100%;padding: 12px 18px;font-size:15px" data-placeholder="Choose a Category" tabindex="1" onchange="categoryListner(this.value)">
                                                    <option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Sub Category name</label>

                                                <input type="text " id="sub_category_name" class="form-control " required="" placeholder="Add the sub category name" value="<?php echo $row['sub_category_name']; ?>" style="border-radius: 7px;width: 100%;padding: 12px 18px;font-size:15px">
                                                <input type="hidden" id="sub_category_id" class="form-control" required="" value="<?php echo $row['sub_category_id']; ?>">

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Sub Category slug</label>

                                                <input type="text " id="sub_category_slug" class="form-control " required="" placeholder="Add the category_slug " value="<?php echo $row['sub_category_slug']; ?>" style="border-radius: 7px;width: 100%;padding: 12px 18px;font-size:15px" readonly>

                                            </div>
                                        </div>




                                    </div>
                                    <div class="form-group pt-3 d-flex justify-content-center">
                                        <button class="btn" id="edit-subcategory" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">Edit Sub Category</button>

                                    </div>





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
            var slug;
            var category_list;
            var sub_category_list;
            var category_id;
            var sub_category_id;

            // Slug Generation sub category

            $("#sub_category_name").keyup(function() {
                var Text = $(this).val();

                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                console.log(Text);
                $("#sub_category_slug").val(Text);
            });

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
                        // console.log(data.category);
                        category_list = data.category;
                        for (var i = 0; i < category_list.length; i++) {
                            $("#category select").html($("#category select").html() + '<option value="' + category_list[i]['category_name'] + '">' + category_list[i]['category_name'] + ' </option>');
                        }



                    } else if (data.status == 301) {
                        //Email already registered
                        alert(data.error);
                    } else {
                        alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                    }
                }
            });

            function categoryListner(value) {


                console.log(value);
                for (var i = 0; i < category_list.length; i++) {
                    if (value == category_list[i]['category_name']) {
                        category_id = category_list[i].category_id;
                        break;
                    }

                }
            }
            $('#edit-subcategory').on('click', function(e) {
                e.preventDefault();
                var error = "";
                var formData = new FormData();

                if ($('#category select').val() == "") {
                    sweetAlert("Warning", "Please enter all fields", "warning");
                    error = error + 'category_name';
                } else {

                    formData.append('category_name', $('#category select').val());
                }
                if ($('#sub_category_name').val() == "") {
                    sweetAlert("Warning", "Please enter Sub category name", "warning");
                    error = error + '#sub_category_name';
                } else {

                    formData.append('sub_category_name', $('#sub_category_name').val());
                }
                if ($('#sub_category_slug').val() == "") {
                    sweetAlert("Warning", "Please enter sub category slug", "warning");
                    error = error + 'sub_category_slug';
                } else {
                    formData.append('sub_category_slug', $('#sub_category_slug').val());
                }


                if (error == "") {
                    var category_id_final = $("#category select").val();
                    for (var i = 0; i < category_list.length; i++) {
                        if (category_id_final == category_list[i]['category_name']) {
                            category_id = category_list[i].category_id;
                            break;
                        }

                    }
                    formData.append('sub_category_id', $('#sub_category_id').val());
                    formData.append('category_id', category_id);



                    $.ajax({
                        url: "PHP/editSubCategory.php",
                        type: "POST",
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,

                        success: function(data) {
                            console.log(data);
                            if (data.status == 201) {

                                window.location.replace("add_subcategory_home");


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
        </script>
    </body>

    </html>
<?php
}

?>