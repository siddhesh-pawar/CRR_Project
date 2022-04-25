<?php
require_once('PHP/link.php');
session_start();
if (!isset($_SESSION['user_email'])) {
    header("location:sign_in");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Enter a proper page title here -->
        <title>Kriyata</title>

        <!-- CSS to include bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- css to include style.css -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="assets/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
        <!-- <link rel="stylesheet" href="Date-Time-Picker-Bootstrap-4/build/css/bootstrap-datetimepicker.min.css"> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/dropify/dist/css/dropify.min.css">

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
        <link rel="icon" href="assets/images/f_logo_temp_mob.png">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>


        <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
        <style>

        </style>
    </head>

    <body>
        <!-- <div class="container-fluid  vh-100 preloader" style=" background-color: #172027;">


        &nbsp;

        <img src=" images/no-halftime-loaders-petrick.gif" style="  position: absolute;background-color: #172027;
            top: 50%; right: 50%;
            transform: translate(50%,-50%);  margin: 0;">


    </div> -->
        <div class="main">
            <div class="d-none d-lg-block">
                <div class="container-fluid pl-0 pr-0 header fixed-top">
                </div>


            </div>

            <!-- mobile view -->
            <div class="d-lg-none position-relative">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand p-3 pt-4" href="#"> <img src="assets/images/f_logo.png"></a>
                    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav p-4">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Community</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                        </ul>
                    </div>
                </nav>

                <!-- Enter Code for Mobile UI here -->



            </div>
            <div class="container-fluid create">
                <h2 class="text-center">CREATE<span style="color: #ffffff;"> EVENT</span></h2>
                <div class="container ">
                    <div class="card" style="background: transparent;border: none;">
                        <div class="row mt-lg-5">
                            <div class="col-lg-6 ">
                                <img src="assets/images/sign_in.png" style="width:100%;filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));">
                            </div>
                            <div class="col-lg-6">
                                <form>

                                    <label class="pr-2 pt-3">Name of the Event</label>
                                    <input type="text" class="form-control mt-3 mb-4" placeholder="Event name" style="padding: 22px;" id="event_name">


                                    <div class="form-group pt-2">
                                        <label class="pr-4 mt-2 mb-4">Event Description</label>
                                        <textarea class="form-control" id="event_descrip" rows="3"></textarea>

                                        <label class="pr-4 pt-4 mt-3 pb-4">Event logo</label>
                                        <input type="file" id="logo" class="dropify" />


                                        <label class="pr-4 pt-3 mt-3">Start date</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="start-date">

                                        <label class="pr-4 pt-4 mt-3 ">End date</label>
                                        <input type="text" class="form-control " placeholder="2017-06-04" id="end-date">

                                        <div class=" d-flex justify-content-center pt-4 pb-5">

                                            <button type="submit" class="btn w-40" id="create">Create
                                                Event</button>
                                        </div>



                                    </div>




                                    <div class="form-group pt-4">


                                    </div>


                                </form>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="footer-top footer-bg third-footer-bg">

        </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="assets/js/popper.min.js "></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- <script src="js/bootstrap-datepicker.min.js"></script> -->
        <script src="assets/moment/moment.js"></script>
        <script src="assets/dropify/dist/js/dropify.min.js"></script>
        <script src="assets/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
        <!-- <script src="Date-Time-Picker-Bootstrap-4/build/js/bootstrap-datetimepicker.min.js"></script> -->



        <script>
            // const loader = document.querySelector('.preloader');
            // const main = document.querySelector('.main');

            // function init() {
            //     setTimeout(() => {
            //         loader.style.opacity = 0;
            //         loader.style.display = 'none';

            //         main.style.display = 'block';

            //         setTimeout(() => (main.style.opacity = 1), 50);
            //     }, 4000);

            // }



            //  date 


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


            $(document).ready(function() {

                // Basic
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
            $("#create").on("click", function(e) {
                e.preventDefault();
                var error = "";
                var formData = new FormData();

                if ($("event_name").val() == "") {
                    sweetAlert("Warning", "Please enter a valid name", "warning");
                    error = error + 'name';
                } else {
                    formData.append('event_name', $("#event_name").val());
                }
                if ($("#event_descrip").val() == "") {
                    sweetAlert("Warning", "Please enter a valid name", "warning");
                    error = error + 'event_descrip';
                } else {
                    formData.append('event_descrip', $("#event_descrip").val());
                }
                if ($("#start-date").val() == "") {
                    sweetAlert("Warning", "Please enter a valid start date", "warning");
                    error = error + 'date';
                } else {
                    formData.append('start_date', $("#start-date").val());
                }
                if ($("#end-date").val() == "") {
                    sweetAlert("Warning", "Please enter a end date", "warning");
                    error = error + 'date';
                } else {
                    formData.append('end_date', $("#end-date").val());
                }
                if ($("#logo").val() == "") {
                    sweetAlert("Warning", "Please enter a valid image", "warning");
                    error = error + 'image';
                } else {
                    formData.append('logo', $("#logo")[0].files[0]);
                }



                if (error == "") {

                    $.ajax({
                        type: 'POST',
                        url: 'admin-dashboard/PHP/add_event.php',
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,
                        success: function(data) {
                            if (data.status == 201) {

                                alert(
                                    "registration sucessful, Please contact with admin to active your account"
                                );
                                // window.location = "index_1";

                            } else if (data.status == 301) {
                                //Email already registered
                                alert(data.error);
                            } else if (data.status == 302) {
                                //mobie already registered
                                alert(data.error);
                            } else if (data.status == 501) {
                                alert("please contact with admin to active your account");
                            } else if (data.status == 601) {
                                alert("unsucessfully check your details. fill up again");
                            } else {
                                alert(
                                    "Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience"
                                );
                            }
                        }
                    });
                }
            });

            $(document).ready(function() {
                $(".header").load('template/header.php');
                $(".footer-top").load('template/footer.html');

                $(window).on('scroll', function() {
                    var scroll = $(window).scrollTop();
                    if (scroll < 245) {


                        $(".social-parent").fadeIn(1000)
                        $(".header").fadeIn(500);

                    } else {

                        $(".social-parent").fadeOut(500)



                    }
                });



            });
        </script>
    </body>

    </html>
<?php
}
?>