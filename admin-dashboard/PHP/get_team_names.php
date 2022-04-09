<?php

require_once 'link.php';
session_start();

if (isset($_POST['tour_id'])) {


    $data = array();
    $team = array();


    $tour_id = mysqli_real_escape_string($link, $_POST['tour_id']);


    $result = mysqli_query($link, "SELECT DISTINCT uuid,team_name FROM entries WHERE tournament_id = '$tour_id' ");

    if (mysqli_num_rows($result) != 0) {
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            // $team[$i]['id'] = $row['uuid'];
            $team[$i]['team_name'] = $row['team_name'];
            $team[$i]['team_id'] = $row['uuid'];
            $i = $i + 1;
        }

        $data['status'] = 201;
        $data['team'] = $team;
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        echo json_encode($data);
    }
}
