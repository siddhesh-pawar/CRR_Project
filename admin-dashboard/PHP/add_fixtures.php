<?php
require_once 'link.php';
session_start();


if (isset($_POST['fixtures'])) {
    $data = array();
    $array = json_decode($_POST['fixtures'], true);
    $tour_id = mysqli_real_escape_string($link, $_POST['tour_id']);
    for ($i = 0; $i < count($array); $i++) {
        $team_1 = $array[$i]['team_1'];
        $team_1_name = $array[$i]['team_1_name'];
        $team_2 = $array[$i]['team_2'];
        $team_2_name = $array[$i]['team_2_name'];
        $query = "INSERT INTO `fixtures`(`team_1_uuid`,`team_2_uuid`,`team_1_name`,`team_2_name`,`tournament_id`) VALUES ('$team_1','$team_2','$team_1_name','$team_2_name','$tour_id')";
        $result = mysqli_query($link, $query);
    }
    $data['status'] = 201;
    echo json_encode($data);
    // $fixture_id = guidv4(openssl_random_pseudo_bytes(16));
    // $no_of_teams = mysqli_real_escape_string($link, $_POST['no_of_teams']);
    // $no_of_rounds = mysqli_real_escape_string($link, $_POST['no_of_rounds']);
    // $no_of_matches = mysqli_real_escape_string($link, $_POST['no_of_matches']);
    // $no_of_byes = mysqli_real_escape_string($link, $_POST['no_of_byes']);
    // $no_of_byes_lh = mysqli_real_escape_string($link, $_POST['no_of_byes_lh']);
    // $no_of_byes_uh = mysqli_real_escape_string($link, $_POST['no_of_byes_uh']);
    // $upper_half_teams = mysqli_real_escape_string($link, $_POST['upper_half_teams']);
    // $lower_half_teams = mysqli_real_escape_string($link, $_POST['lower_half_teams']);

    // $query = "INSERT INTO `fixture_fomat`(`fixture_uuid`,`no_of_teams`, `no_of_matches`, `upper_half_teams`, `lower_half_teams`, `no_of_byes`, `no_of_rounds`, `no_of_byes_uh`, `no_of_byes_lh`) VALUES ('$fixture_id','$no_of_teams','$no_of_matches','$upper_half_teams','$lower_half_teams','$no_of_byes','$no_of_rounds','$no_of_byes_uh','$no_of_byes_lh')";
    // if ($result = mysqli_query($link, $query)) {
    //     $data['status'] = 201;
    //     $data['fixture_id'] =  $fixture_id;
    //     $data['number_of_teams'] = $no_of_teams;
    //     $data['uh_teams'] =  $upper_half_teams;
    //     $data['lh_teams'] =  $lower_half_teams;
    //     $data['number_of_byes'] = $no_of_byes;
    //     $data['number_of_rounds'] =   $no_of_rounds;
    //     $data['number_of_matches'] = $no_of_matches;
    //     $data['no_of_byes_uh'] = $no_of_byes_uh;
    //     $data['no_of_byes_lh'] = $no_of_byes_lh;
    //     echo json_encode($data);
    // } else {
    //     $data['status'] = 601;
    //     $data['error'] = $link->error;
    //     echo json_encode($data);
    // }


}
