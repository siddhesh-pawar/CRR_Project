<?php

require_once 'link.php';
session_start();

if (isset($_POST['type'])) {

    if ($_POST['type'] == 'tour') {
        $data = array();


        $tour_id = mysqli_real_escape_string($link, $_POST['tour_id']);


        $result = mysqli_query($link, "SELECT * FROM `tournaments` WHERE `id` = '$tour_id' ");

        if (mysqli_num_rows($result) != 0) {

            while ($row = $result->fetch_assoc()) {
                $player_limit = $row['player_limit'];
            }

            $data['status'] = 201;
            $data['player_limit'] = $player_limit;
            echo json_encode($data);
        } else {
            $data['status'] = 301;
            echo json_encode($data);
        }
    }
}
