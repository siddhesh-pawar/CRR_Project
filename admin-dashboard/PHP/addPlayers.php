<?php

require_once 'link.php';
session_start();


if (isset($_POST['player_list'])) {

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");


    function guidv4($data)
    {
        assert(strlen($data) == 16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    $uuid = guidv4(openssl_random_pseudo_bytes(16));
    $players = explode(",", mysqli_real_escape_string($link, $_POST['player_list']));
    $tour_id = mysqli_real_escape_string($link, $_POST['tour_id']);


    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = $_SESSION['admin_id'];
    }



    foreach ($players as $key => $value) {
        $query = "INSERT INTO `entries`(`tournament_id`,`player_name`,`from_ip`,`from_browser`,`time`,`created_by`,`uuid`) VALUES ('$tour_id','$value','$from_ip','$from_browser','$date_now','$user_id','$uuid')";
        if ($result = mysqli_query($link, $query)) {
            $data['status'] = 201;
            echo json_encode($data);
        } else {
            $data['status'] = 601;
            $data['error'] = $link->error;
            echo json_encode($data);
        }
    }
}
