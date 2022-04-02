<?php
require_once 'link.php';
if (mysqli_connect_error()) {
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
if (isset($_POST['category_id'])) {
    
    session_start();
    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $category_id = mysqli_real_escape_string($link, $_POST['category_id']);
    // $query2 = "SELECT * FROM `authors` WHERE category_id = '$category_id' ";
    // $result = mysqli_query($link,$query2);
   
    // $row = mysqli_fetch_array($result);
    
    // $username = $row['username'];
    // $hashed_password = $row['password'];
    // $phone = $row['phone'];
    // $name =  $row['name'];
    // $fixed_reduction = $row['fixed reduction'];
    
    $query = "DELETE FROM `articles_category` WHERE category_id = '$category_id' ";
        // //backup data start //
            
        // $query1 = "INSERT INTO `user_data_history`(`user_uid`,`username`, `password`,`name`,`phone`,`fixed reduction`,`sql_operation`,`updated_by`,`from_ip`,`from_browser`,`time`) VALUES ('$user_uid','$username', '$hashed_password','$name','$phone','$fixed_reduction','delete','".$_SESSION['userlogin']."','$from_ip','$from_browser','$date_now')";                
       
        // //backup data end // 
    if (mysqli_query($link, $query) ) {

        $data['status'] = 201;
        $data['success'] = "User deleted";
        echo json_encode($data);
    } else {
        $data['status'] = 301;
        $data['error'] = 'Error';
        echo json_encode($data);
    }
}