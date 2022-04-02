<?php

require_once 'link.php';
session_start();

if (isset($_POST['type'])) {

    if ($_POST['type'] == 'events') {
        $data = array();
        $event = array();

        $admin_id = $_SESSION['admin_id'];
        $result = mysqli_query($link, "SELECT * FROM `events` WHERE `created_by` = '$admin_id' ");

        if (mysqli_num_rows($result) != 0) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $event[$i]['event_id'] = $row['event_id'];
                $event[$i]['event_name'] = $row['event_name'];
                $i = $i + 1;
            }

            $data['status'] = 201;
            $data['event'] = $event;
            echo json_encode($data);
        } else {
            $data['status'] = 301;
            echo json_encode($data);
        }
    }
}
