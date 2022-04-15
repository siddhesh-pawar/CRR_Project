<?php

require_once 'link.php';
session_start();


if (isset($_POST['tour_id'])) {

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");



    function create_slug($string)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
    }






    // Allow certain file formats

    $tour_id = mysqli_real_escape_string($link, $_POST['tour_id']);
    $event_id = mysqli_real_escape_string($link, $_POST['event_id']);
    $tour_descrip = mysqli_real_escape_string($link, $_POST['tour_descrip']);
    $start_date = mysqli_real_escape_string($link, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($link, $_POST['end_date']);
    $event_id = mysqli_real_escape_string($link, $_POST['event_id']);
    $end_date_event = "";
    $start_date_event = "";
    $temp = "";

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = $_SESSION['admin_id'];
    }


    $result = mysqli_query($link, "SELECT * FROM `events` WHERE `event_id` = '$event_id'");

    if (mysqli_num_rows($result) != 0) {

        while ($row = $result->fetch_assoc()) {
            $end_date_event = $row['end_date'];
            $start_date_event = $row['start_date'];
        }
    }

    if ($start_date < $start_date_event || $start_date > $end_date_event) {
        $temp = "start-date";
        $data['status'] = 701;
        $data['error'] = "Invalid start date";
        echo json_encode($data);
    } else if ($end_date > $end_date_event || $end_date < $start_date_event) {
        $temp = "end-date";
        $data['status'] = 701;
        $data['error'] = "Invalid end date";
        echo json_encode($data);
    } else {
        $query = "UPDATE `tournaments` SET `tour_descrip`='$tour_descrip',`start_tour_date`='$start_date',`end_tour_date`='$end_date',`from_ip`='$from_ip',`from_browser`='$from_browser',`time`='$date_now',`created_by`='$user_id' WHERE `id`='$tour_id'";



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
}
