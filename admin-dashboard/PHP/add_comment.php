<?php
require_once 'link.php';
if (mysqli_connect_error()) {
    die("<script>console.log('There is a problem with mysql connection')</script>");
}




if (isset($_POST['email']) && $_POST['response']) {
    session_start();

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $response = $_POST['response'];

    $secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
    //get verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $response);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        function guidv4($data)
        {
            assert(strlen($data) == 16);

            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }




        $comment_id = guidv4(openssl_random_pseudo_bytes(16));
        $name = mysqli_real_escape_string($link, $_POST['name']);
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $article_id = mysqli_real_escape_string($link, $_POST['article_id']);
        $comment = mysqli_real_escape_string($link, $_POST['comment']);


        $query = "INSERT INTO `comments`(`comment_id`, `name`,`article_id`, `email`, `comment`, `from_ip`, `from_browser`, `from_time`) VALUES ('$comment_id','$name','$article_id','$email','$comment','$from_ip','$from_browser','$date_now')";

        if (mysqli_query($link, $query)) {

            $data['status'] = 201;
            $data['success'] = "User added";
            echo json_encode($data);
        } else {
            $data['status'] = 501;
            $data['error'] = 'Error';
            echo json_encode($data);
        }
    } else {
        $data['status'] = 301;
        $data['error'] = 'Robot verification failed';
        echo json_encode($data);
    }
















    //backup data start //

    // $query1 = "INSERT INTO `user_data_history`(`user_uid`,`username`, `password`,`name`,`phone`,`fixed reduction`,`sql_operation`,`updated_by`,`from_ip`,`from_browser`,`time`) VALUES ('$user_uid','$username', '$hashed_password','$name','$phone','$fixed_reduction','insert','".$_SESSION['userlogin']."','$from_ip','$from_browser','$date_now')";                

    //backup data end // 


}
