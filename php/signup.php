<?php

// Include database connection file

include_once('link.php');


if (isset($_POST['email'])) {

    $name   = $link->real_escape_string($_POST['name']);
    $mobile = $link->real_escape_string($_POST['mobile']);
    $email  = $link->real_escape_string($_POST['email']);

    $otp    = mt_rand(1111, 9999);

    $query  = "INSERT INTO users (name,email,mobile_number,otp) VALUES ('$name','$email','$mobile','$otp')";
    $result = $link->query($query);

    if ($result) {
        echo "yes";
    } else {
        echo "no";
    }
}
