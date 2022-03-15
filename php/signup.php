<?php

require_once 'link.php';

function guidv4($data)
{
    assert(strlen($data) == 16);

    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

if (isset($_POST['name'])) {

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $user_uuid = guidv4(openssl_random_pseudo_bytes(16));

    $name = mysqli_real_escape_string($link, $_POST['name']);
    $phone = mysqli_real_escape_string($link, $_POST['phone']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $hashed_password = hash("sha512", $password);


    // echo guidv4(openssl_random_pseudo_bytes(16)); 

    //
    // $result = mysqli_query($link, "SELECT * FROM `adminlogin` WHERE `email` = '$email'");
    // $result1 = mysqli_query($link, "SELECT * FROM `adminlogin` WHERE `phone` = '$phone'");
    // if (mysqli_num_rows($result) != 0) {
    //     $data['status'] = 301;
    //     $data['error'] = 'This Email ID is already registered';
    //     echo json_encode($data);
    // } else if (mysqli_num_rows($result1) != 0) {
    //     $data['status'] = 302;
    //     $data['error'] = 'This Phone Number is already registered.';
    //     echo json_encode($data);
    // } else {
    $query = "INSERT INTO `sports-main-user` (`id`,`name`, `phone`, `email`, `password`, `from_ip`, `from_browser`,`time`) VALUES ('$user_uuid','$name', '$phone', '$email', '$hashed_password','$from_ip', '$from_browser','$date_now')";

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
