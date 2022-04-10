<?php

require_once 'link.php';
session_start();

if (isset($_POST['tour_id'])) {


    $data = array();
    $team = array();


    $tour_id = mysqli_real_escape_string($link, $_POST['tour_id']);


    $result = mysqli_query($link, "SELECT * FROM fixtures WHERE tournament_id = '$tour_id' ");

    if (mysqli_num_rows($result) != 0) {
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            // $team[$i]['id'] = $row['uuid'];
            $team[$i]['team_1_id'] = $row['team_1_uuid'];
            $team[$i]['team_1_name'] = $row['team_1_name'];
            $team[$i]['team_2_id'] = $row['team_2_uuid'];
            $team[$i]['team_2_name'] = $row['team_2_name'];
            $i = $i + 1;
        }


        $data['status'] = 201;
        $data['team'] = $team;
        $data['tour_id'] = $tour_id;
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        echo json_encode($data);
    }
}
