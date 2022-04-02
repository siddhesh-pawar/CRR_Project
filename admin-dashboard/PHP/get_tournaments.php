<?php

require_once 'link.php';
session_start();

if (isset($_POST['type'])) {

    if ($_POST['type'] == 'tour') {
        $data = array();
        $tour = array();

        $admin_id = $_SESSION['admin_id'];
        $result = mysqli_query($link, "SELECT * FROM `tournaments` WHERE `created_by` = '$admin_id' ");

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
}
