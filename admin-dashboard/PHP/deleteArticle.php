<?php
require_once 'link.php';
if (mysqli_connect_error()) {
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
if (isset($_POST['article_id'])) {
    
    session_start();
    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $article_id = mysqli_real_escape_string($link, $_POST['article_id']);
    // $query2 = "SELECT * FROM `authors` WHERE author_id = '$author_id' ";
    // $result = mysqli_query($link,$query2);
   
    // $row = mysqli_fetch_array($result);
    
    // $username = $row['username'];
    // $hashed_password = $row['password'];
    // $phone = $row['phone'];
    // $name =  $row['name'];
    // $fixed_reduction = $row['fixed reduction'];
    
    $query = "DELETE FROM `articles` WHERE article_id = '$article_id' ";
    $query2 = "DELETE FROM `comments` WHERE article_id = '$article_id' ";
    $query3 = "DELETE FROM `article_lines` WHERE article_id = '$article_id' ";
        // //backup data start //
            
        // $query1 = "INSERT INTO `user_data_history`(`user_uid`,`username`, `password`,`name`,`phone`,`fixed reduction`,`sql_operation`,`updated_by`,`from_ip`,`from_browser`,`time`) VALUES ('$user_uid','$username', '$hashed_password','$name','$phone','$fixed_reduction','delete','".$_SESSION['userlogin']."','$from_ip','$from_browser','$date_now')";                
       
        // //backup data end // 
    if (mysqli_query($link, $query) && mysqli_query($link, $query2) && mysqli_query($link, $query3)) {

        $data['status'] = 201;
        $data['success'] = "User deleted";
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        $data['error'] = 'Error';
        echo json_encode($data);
    }
}