<?php

require_once 'link.php';
session_start();


if (isset($_POST['player_id'])) {

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");


    $player_id = mysqli_real_escape_string($link, $_POST['player_id']);
    $player_name = mysqli_real_escape_string($link, $_POST['player_name']);


    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = $_SESSION['admin_id'];
    }


    $query = "UPDATE `entries` SET `player_name`='$player_name',`from_ip`='$from_ip',`from_browser`='$from_browser',`time`='$date_now',`created_by`='$user_id' WHERE player_id = '$player_id'";



    // echo $query;

    if ($result = mysqli_query($link, $query)) {
        $data['status'] = 201;
        echo json_encode($data);
    } else {
        $data['status'] = 601;
        $data['error'] = $link->error;
        echo json_encode($data);
    }
}
