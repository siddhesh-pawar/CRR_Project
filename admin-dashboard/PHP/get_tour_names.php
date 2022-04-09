<?php

require_once 'link.php';
session_start();

if (isset($_POST['event_id'])) {


    $data = array();
    $tour = array();


    $event_id = mysqli_real_escape_string($link, $_POST['event_id']);


    $result = mysqli_query($link, "SELECT * FROM `tournaments` WHERE `event_id` = '$event_id' ");

    if (mysqli_num_rows($result) != 0) {
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $tour[$i]['tour_id'] = $row['id'];
            $tour[$i]['tour_name'] = $row['tour_name'];
            $i = $i + 1;
        }

        $data['status'] = 201;
        $data['tour'] = $tour;
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        echo json_encode($data);
    }
}
