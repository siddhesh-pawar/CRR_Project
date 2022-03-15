<?php

require_once 'link.php';
session_start();

if (isset($_POST['event_name'])) {

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    function guidv4($data)
    {
        assert(strlen($data) == 16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    function create_slug($string)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
    }



    $target_dir = "../assets/images/uploads/";
    $temp = explode(".", $_FILES["logo"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . basename($newfilename);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST["event_name"])) {
        $check = getimagesize($_FILES["logo"]["tmp_name"]);


        if ($check !== false) {
            // echo "File is an i mage - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $data['status'] = 601;
            $data['error'] = "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["logo"]["size"] > 500000) {
        $data['status'] = 601;
        $data['error'] = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "webp"
    ) {
        echo "Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $data['status'] = 601;
        $data['error'] = "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {

        $event_name = mysqli_real_escape_string($link, $_POST['event_name']);
        $event_slug = create_slug($event_name);
        $event_descrip = mysqli_real_escape_string($link, $_POST['event_descrip']);
        $start_date = mysqli_real_escape_string($link, $_POST['start_date']);
        $end_date = mysqli_real_escape_string($link, $_POST['end_date']);
        $event_id = guidv4(openssl_random_pseudo_bytes(16));;
        $logo = mysqli_real_escape_string($link, basename($newfilename));
        $user_id = $_SESSION['user_id'];
    }


    $query = "INSERT INTO `events` (`event_id`, `event_name`,`event_slug`,`event_descrip`, `start_date`, `end_date`,`logo`,`from_ip`, `from_browser`,`time`,`created_by`) VALUES ('$event_id', '$event_name','$event_slug', '$event_descrip', '$start_date','$end_date','$logo','$from_ip', '$from_browser','$date_now','$user_id')";

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
