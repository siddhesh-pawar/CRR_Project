<?php

require_once 'link.php';

if(isset($_POST['title_id'])){
    session_start();
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $title_id = mysqli_real_escape_string($link, $_POST['title_id']);
    $title= mysqli_real_escape_string($link, $_POST['title']);
    $descrip= mysqli_real_escape_string($link, $_POST['descrip']);

     /* ---------------------------- category backup insert  start--------------------------- */  
    // $query = "SELECT * FROM `adminlogin` where `uid` ='" .$admin_id. "'"; 
    // $result = mysqli_query($link,$query);    
    //  if (mysqli_num_rows($result) !=0 ) {   
    //     $row=mysqli_fetch_array($result);                
    //     $pre_data="";
    //     $pre_data_value="";
    //     if(!($row['username']==$admin_name)){
    //         $pre_data.="`username`,";
    //         $pre_data_value.="'".$row['username']."',";            
    //     }
    //     if(!($row['email']==$admin_email)){
    //         $pre_data.="`email`,";
    //         $pre_data_value.="'".$row['email']."',";            
    //     }
    //     if(!($row['password']==$hashed_password)){
    //         $pre_data.="`password`,";
    //         $pre_data_value.="'".$row['password']."',";            
    //     }
    //     if(!($pre_data=="")){                
    //         $link->query("INSERT INTO `adminlogin_history` (`sql_operation`,`uid`,$pre_data `updated_by`,`from_ip`, `from_browser`, `time`)VALUES ('update','" . $admin_id . "',$pre_data_value'".$_SESSION['userlogin']."','$from_ip','$from_browser','$date_now')");    
    //     }          
    // }
    // /* ---------------------------- category backup  data insert end--------------------------- */

        $query = "UPDATE `title_name` SET `title`='$title', `description` = '$descrip' WHERE `id` = '$title_id' ";
        
        if($result = mysqli_query($link, $query))  
        {        
            $data['status'] = 201;
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
