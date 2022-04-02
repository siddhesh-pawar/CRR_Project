<?php

require_once 'link.php';


if (isset($_POST['email'])) {
    session_start();
    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $hashed_password = hash("sha512", $password);

    $result = mysqli_query($link, "SELECT * FROM `sports-main-user` WHERE `email` = '$email' AND `password` = '$hashed_password' ");

    if (mysqli_num_rows($result) != 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $id = $row['id'];
        }
        // $row=mysqli_fetch_array($result);
        // if($row['account_status']== 'active'){

        $data['status'] = 201;

        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_id'] = $id;
        // $_SESSION['access_id']=$row['access_id'];
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        $data['error'] = 'Invalid Email or Password';
        echo json_encode($data);
    }
}
