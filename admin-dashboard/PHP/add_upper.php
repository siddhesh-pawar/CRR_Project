<?php

require_once 'link.php';
session_start();


if (isset($_POST['team_id'])) {

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");




    $team_id = mysqli_real_escape_string($link, $_POST['team_id']);;
    $team_name = mysqli_real_escape_string($link, $_POST['team_name']);;
    $fixture_id = mysqli_real_escape_string($link, $_POST['fixture_id']);;
    $bye = mysqli_real_escape_string($link, $_POST['bye']);;







    $query = "INSERT INTO `upper_half`(`fixture_id`, `team_uuid`, `team_name`,`bye`) VALUES ('$fixture_id','$team_id','$team_name','$bye')";
    if ($result = mysqli_query($link, $query)) {
        $data['status'] = 201;
        echo json_encode($data);
    } else {
        $data['status'] = 601;
        $data['error'] = $link->error;
        echo json_encode($data);
    }
}
