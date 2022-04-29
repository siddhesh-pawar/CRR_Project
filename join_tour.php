<?php
session_start();
require_once('admin-dashboard/php/link.php');
$id = $_REQUEST['id'];
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
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" integrity="sha512-Mo79lrQ4UecW8OCcRUZzf0ntfMNgpOFR46Acj2ZtWO8vKhBvD79VCp3VOKSzk6TovLg5evL3Xi3u475Q/jMu4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <div class="d-lg-none position-relative">
                <div class="mobile-header"></div>


                <!-- Enter Code for Mobile UI here -->



            </div>
            <div class="container-fluid join">
                <?php
                $query = "SELECT * from tournaments where id = '" . $id . "'";
                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_array($result);

                ?>
                <h2 class="text-center"><?php echo ($row['tour_name']); ?></h2>
                <div class="container ">
                    <div class="card" style="background: transparent;border: none;">
                        <div class="row mt-lg-5">

                            <div class="col-lg-12">
                                <form class="justify-content-center">


                                    <label style="color:#ff4800;">Tournament description:<span class="join-info"> <?php echo ($row['tour_descrip']); ?> </span></label>
                                    <br>


                                    <label style="color:#ff4800;">Event Name: <span class="join-info">IPL 2022<span></label>

                                    <br>
                                    <label style="color:#ff4800;">Start Date: <span class="join-info"><?php echo (date("d/m/Y", strtotime($row['start_tour_date']))); ?><span></label>


                                    <br>

                                    <label style="color:#ff4800;">End Date: <span class="join-info"><?php echo (date("d/m/Y", strtotime($row['end_tour_date']))); ?><span></label>

                                    <br>





                                    <div class="form-group pt-2">

                                        <input type="hidden" id="tour_id" value="<?php echo ($row['id']); ?>">

                                        <label class="pr-2 pt-3">Team Name</label>
                                        <input type="text" class="form-control mt-3 mb-4" placeholder="Team Name" style="padding: 18px;" id="team_name">

                                        <div class="form-group" id="player_add"></div>




                                        <div class=" d-flex justify-content-center pt-4 pb-5">

                                            <button type="submit" class="btn w-40" id="add-entries">Join</button>
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

            <!-- mobile view -->



        </div>

        <div class="footer-top footer-bg third-footer-bg">

        </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

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

            // init();
            $(document).ready(function() {
                $(".header").load('template/header.php');
                $(".footer-top").load('template/footer.html');
                $(".mobile-header").load('template/mobile-header.html');



                $(window).on('scroll', function() {
                    var scroll = $(window).scrollTop();
                    if (scroll < 245) {


                        $(".social-parent").fadeIn(1000)
                        $(".header").fadeIn(500);

                    } else {

                        $(".social-parent").fadeOut(500)



                    }
                });
                var value = $("#tour_id").val();
                $.ajax({
                    type: 'POST',
                    url: 'admin-dashboard/PHP/get_player_limit.php',
                    dataType: "json",
                    async: false,
                    data: {
                        type: 'tour',
                        tour_id: value
                    },
                    success: function(data) {
                        if (data.status == 201) {

                            // $("#team_add").html($("#team_add").html() + '<label class="control-label" style="font-weight:bold;font-size:1.3rem;color:#717BA2;">Enter team name</label><input type="text" class="form-control" placeholder="Enter team name" id="team_name">');

                            player_limit = data.player_limit;
                            for (var i = 1; i <= player_limit; i++) {
                                $("#player_add").html($("#player_add").html() + '<div class="player"><label class="pr-2 pt-3">Player ' + i + '</label><input type="text" class="form-control" placeholder="Enter player name" name="task[]" id="task"></div>');
                            }
                            // console.log(player_limit);




                        } else if (data.status == 301) {
                            //Email already registered
                            alert(data.error);
                        } else {
                            alert("Some error occured. Our team is dedicatedly addressing this issue. Thankyou for your patience");
                        }
                    }
                });
            });

            $('#add-entries').on('click', function(e) {
                e.preventDefault();

                var player_list = $("input[id='task']")
                    .map(function() {
                        return $(this).val();
                    }).get();
                var error = "";
                var formData = new FormData();

                if (player_list.length == 0) {
                    error = error + 'meta';
                    sweetAlert("Warning", "Please enter player", "warning");
                } else {
                    formData.append('player_list', player_list);
                }

                if ($('#team_name').val() == "") {
                    sweetAlert("Warning", "Please enter a valid name", "warning");
                    error = error + 'team_name';
                } else {

                    formData.append('team_name', $('#team_name').val());
                }

                if (error == "") {
                    // console.log(formData);
                    formData.append('tour_id', $("#tour_id").val());



                    $.ajax({
                        url: "admin-dashboard/PHP/addPlayers.php",
                        type: "POST",
                        dataType: "json",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,

                        success: function(data) {

                            if (data.status == 201) {
                                alert("Joined tournament successfully");

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