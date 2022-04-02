<?php
require_once 'link.php';
if (mysqli_connect_error()) {
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
if (isset($_POST['sub_category_id'])) {
    session_start();

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    // This function will return a random 
        // string of specified length 
        // function random_strings($length_of_string) { 
            
        //     // md5 the timestamps and returns substring 
        //     // of specified length 
        //     return substr(md5(time()), 0, $length_of_string); 
        // } 

        

        // This function will generate  
        // Random string of length 10 
      
                $sub_category_id= mysqli_real_escape_string($link, $_POST['sub_category_id']);
  
                $sub_category_name = mysqli_real_escape_string($link, $_POST['sub_category_name']);
                $category_name = mysqli_real_escape_string($link, $_POST['category_name']);
                $category_id = mysqli_real_escape_string($link, $_POST['category_id']);
    
                $sub_category_slug = mysqli_real_escape_string($link, $_POST['sub_category_slug']);
  
                $query = "UPDATE `articles_sub_category` SET `sub_category_name`= '$sub_category_name',`category_id`='$category_id',`category_name`='$category_name',`sub_category_slug`='$sub_category_slug' WHERE `sub_category_id` = '$sub_category_id' ";
               

                  
                if (mysqli_query($link, $query) ) {

                    $data['status'] = 201;
                    $data['success'] = "User added";
                    echo json_encode($data);
                } else {
                    $data['status'] = 301;
                    $data['error'] = 'Error';
                    echo json_encode($data);
                }
         

        
     
  
 
   

    
   
       
    //backup data start //
            
    // $query1 = "INSERT INTO `user_data_history`(`user_uid`,`username`, `password`,`name`,`phone`,`fixed reduction`,`sql_operation`,`updated_by`,`from_ip`,`from_browser`,`time`) VALUES ('$user_uid','$username', '$hashed_password','$name','$phone','$fixed_reduction','insert','".$_SESSION['userlogin']."','$from_ip','$from_browser','$date_now')";                
       
    //backup data end // 
  

}