<?php

require_once 'link.php';
session_start();

if (isset($_POST['event_id'])) {


    $data = array();


    $event_id = mysqli_real_escape_string($link, $_POST['event_id']);
    $start_date = "";
    $end_date = "";


    $result = mysqli_query($link, "SELECT * FROM `events` WHERE `event_id` = '$event_id' ");

    if (mysqli_num_rows($result) != 0) {

        while ($row = $result->fetch_assoc()) {
            $start_date = ($row['start_date']);
            $end_date = ($row['end_date']);
        }

        $data['status'] = 201;
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        echo json_encode($data);
    }
}
