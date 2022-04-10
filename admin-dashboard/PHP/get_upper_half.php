<?php

require_once 'link.php';
session_start();

if (isset($_POST['fixture_id'])) {


    $data = array();
    $team = array();


    $fixture_id = mysqli_real_escape_string($link, $_POST['fixture_id']);


    $result = mysqli_query($link, "SELECT * FROM `upper_half` WHERE `fixture_id` = '$fixture_id' ");

    if (mysqli_num_rows($result) != 0) {
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $team[$i]['team_id'] = $row['team_uuid'];
            $team[$i]['team_name'] = $row['team_name'];
            $i = $i + 1;
        }

        $data['status'] = 201;
        $data['team_upper'] = $team;
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        echo json_encode($data);
    }
}
