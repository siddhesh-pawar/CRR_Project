<?php
require_once('PHP/link.php');
$id = $_REQUEST['id'];
$query = "SELECT * from comments where comment_id ='" . $id . "'";
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

            .reply {
                margin-left: 120px;
            }

            @media (max-width: 991px) {
                .reply {
                    margin-left: 13px;
                }
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

                    </div>
                    <div class="main-wrapper">




                        <div class="card">
                            <h2 class="card-head text-center pt-4">Comment Info</h2>
                            <div class="card-body">

                                <div class="comment-info">

                                    <h3>Main comment</h3>
                                    <hr>
                                    <input type="hidden" id="article_id" value="<?php echo ($row['article_id']); ?> ">
                                    <input type="hidden" id="comment_id" value="<?php echo ($row['comment_id']); ?> ">


                                    <p class="mt-2  mr-3 pb-1 d-inline" style="font-weight: bold;font-size:17px;"><?php echo ($row['name']) ?></p>
                                    <p class="date d-inline" style="font-weight: bold;font-size:12px;"> <?php echo date("d/m/Y g:ia", strtotime($row['from_time'])); ?></p>
                                    <textarea class="form-control mt-3" id="main-comment" style="border-radius: 7px;font-size:15px;"><?php echo ($row['comment']); ?></textarea>
                                    <button class="btn mt-3" id="edit-comment" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">Edit Comment</button>

                                    <div class="reply pt-2">
                                        <h3 class="pt-4">Replies</h3>
                                        <hr>
                                        <?php
                                        $comment_id = $row['comment_id'];
                                        $result2 = mysqli_query($link, "SELECT * FROM `sub_comment` WHERE `comment_id` = '$comment_id'");
                                        if (mysqli_num_rows($result2) != 0) {

                                        ?>
                                            <?php

                                            while ($row2 = mysqli_fetch_array($result2)) {

                                            ?>

                                                <form class="comment-form">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <input type="hidden" name="sub_comment_id" value="<?php echo ($row2['sub_comment_id']); ?>">

                                                            <p class="mt-2 d-inline mr-3" style="font-weight: bold;font-size:17px;"><?php echo ($row2['user_name']); ?></p>
                                                            <p class="date d-inline" style="font-weight: bold;font-size:12px;"><?php echo date("d/m/Y g:ia", strtotime($row2['time'])); ?></p>

                                                        </div>
                                                        <div class="col-3 d-flex justify-content-end mb-4">

                                                            <div class="btn-group ">
                                                                <a href="edit_sub_comment.php?id=<?php echo ($row2['sub_comment_id']); ?>"><i class="fas fa-pencil-alt" style="color:#7d7d83"></i></a>
                                                                <button class="far fa-trash-alt  edit-sub-comment ml-2" onclick="del('<?php echo ($row2['sub_comment_id']); ?>')" style="border: none;background-color: transparent;color:#7d7d83"></button>
                                                            </div>



                                                        </div>
                                                        <div class="w-100 pl-3">
                                                            <input class="form-control p-4 w-100" name='sub-comment-text' style="border-radius: 7px;font-size:15px;" value="<?php echo ($row2['sub_comment']); ?>">
                                                        </div>

                                                    </div>






                                                    <hr>
                                                </form>


                                        <?php
                                            }
                                        }
                                        ?>

                                        <h3 class="pt-4 ">Add a new reply</h3>

                                        <hr>
                                        <!-- <div class="row pt-3">
                                            <div class="col-6">
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Name</label>
                                             
                                            </div>
                                            <div class="col-6">
                                                <label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Email</label>
                                             

                                            </div>
                                        </div> -->
                                        <input type="hidden" class="form-control" id="user_name" value="<?php echo ($_SESSION['session_name']); ?>">

                                        <input type="hidden" class="form-control" id="user_email" value="<?php echo ($_SESSION['session_user']); ?>">


                                        <label class="control-label mt-4" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Reply</label>
                                        <textarea class="form-control" id="reply" style="border-radius: 7px;font-size:15px;"></textarea>

                                        <button class="btn mt-3" id="add-sub-comment" type="button" style="font-size: 1rem;background-color: #2b8fe9;color: #ffffff;">Add Reply</button>



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
        <script src="assets/sweetalert/sweetalert.min.js"></script>
        <script src="assets/sweetalert/jquery.sweet-alert.custom.js"></script>


        <script>
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



            // Edit comment 


            $('#edit-comment').on('click', function(e) {
                e.preventDefault();
                var error = "";
                var formData = new FormData();


                if ($('#main-comment').val() == "") {
                    sweetAlert("Warning", "Please enter comment", "warning");
                    error = error + 'comment';
                } else {

                    formData.append('comment', $('#main-comment').val());
                }


                if (error == "") {
                    formData.append('comment_id', $('#comment_id').val());
                    formData.append('article_id', $('#article_id').val());
                    console.log(formData);

                    $.ajax({
                        url: "PHP/edit_comment.php",
                        type: "POST",
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,

                        success: function(data) {
                            console.log(data);
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

            // Edit reply

            $(".edit-sub-comment").on("click", function(e) {
                e.preventDefault();
                var error = "";

                var sub_comment = $(this).closest("form.comment-form").find("textarea[name='sub-comment-text']").val();
                var sub_comment_id = $(this).closest("form.comment-form").find("input[name='sub_comment_id']").val();

                if (sub_comment == "") {
                    alert('Sub Comment cannot be empty');
                    error = error + 'sub-comment';
                }




                if (error == "") {

                    $.ajax({
                        type: 'POST',
                        url: 'PHP/editSubComment',
                        dataType: "json",
                        data: {
                            sub_comment_id: sub_comment_id,
                            sub_comment: sub_comment

                        },
                        success: function(data) {
                            if (data.status == 201) {
                                window.location.reload();
                            } else if (data.status == 501) {
                                alert("please contact with admin to active your account");
                            } else {
                                alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                            }
                        }
                    });
                }

            });

            //Add A Reply

            $('#add-sub-comment').on('click', function(e) {



                e.preventDefault();
                var error = "";

                var formData = new FormData();






                if ($('#reply').val() == "") {
                    sweetAlert("Warning", "Please enter Sub comment name", "warning");
                    error = error + '#sub_comment';
                } else {

                    formData.append('sub_comment', $('#reply').val());
                }
                if ($('#user_name').val() == "") {
                    sweetAlert("Warning", "Please enter Sub comment name", "warning");
                    error = error + 'name';
                } else {

                    formData.append('name', $('#user_name').val());
                }
                if ($('#user_email').val() == "") {
                    sweetAlert("Warning", "Please enter Sub comment name", "warning");
                    error = error + 'email';
                } else {

                    formData.append('email', $('#user_email').val());
                }




                if (error == "") {
                    formData.append('comment_id', $('#comment_id').val());
                    formData.append('article_id', $('#article_id').val());



                    $.ajax({
                        url: "PHP/add_sub_comment.php",
                        type: "POST",
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,

                        success: function(data) {
                            console.log(data);
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
        </script>
    </body>

    </html>
<?php
}
?>