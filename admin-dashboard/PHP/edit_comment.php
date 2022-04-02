<?php

require_once 'link.php';

if(isset($_POST['comment_id'])){
    session_start();
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $comment_id = mysqli_real_escape_string($link, $_POST['comment_id']);
    $article_id= mysqli_real_escape_string($link, $_POST['article_id']);
    $comment= mysqli_real_escape_string($link, $_POST['comment']);



        $query = "UPDATE `comments` SET `comment`='$comment',`article_id` = '$article_id' WHERE `comment_id` = '$comment_id' ";
        
        if($result = mysqli_query($link, $query))  
        {        
            $data['status'] = 201;
            $data['id'] = $comment_id;
            echo json_encode($data);
        }  
        else  
        {  
            $data['status'] = 601;
            $data['error'] = "error";
            echo json_encode($data);
        } 

}
?>