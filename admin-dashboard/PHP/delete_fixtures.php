<?php
require_once 'link.php';


if (isset($_POST['tour_id'])) {

    session_start();
    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $tour_id = mysqli_real_escape_string($link, $_POST['tour_id']);


    $query = "DELETE FROM `fixtures` WHERE tournament_id = '$tour_id' ";

    if (mysqli_query($link, $query)) {

        $data['status'] = 201;
        $data['success'] = "User deleted";
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        $data['error'] = 'Error';
        echo json_encode($data);
    }
}
