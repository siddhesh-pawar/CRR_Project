<?php
require_once 'link.php';
if (mysqli_connect_error()) {
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
if (isset($_POST['author'])) {
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
        function guidv4($data)
        {
            assert(strlen($data) == 16);

            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }
        

        // This function will generate  
        // Random string of length 10 
        $target_dir = "../assets/images/uploads/";
        $temp = explode(".", $_FILES["hero-image"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($newfilename);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        if(isset($_POST["author"])) {
            $check = getimagesize($_FILES["hero-image"]["tmp_name"]);
            if($check !== false) {
                // echo "File is an i mage - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $data['status'] = 601;
                $data['error'] = "File is not an image.";
                $uploadOk = 0;
            }
        }

     

        // Check file size
        if ($_FILES["hero-image"]["size"] > 500000) {
            $data['status'] = 601;
            $data['error'] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "webp" ) {
            echo "Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $data['status'] = 601;
            $data['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        }else{
            if (move_uploaded_file($_FILES["hero-image"]["tmp_name"], $target_file)) {
                $author_id = guidv4(openssl_random_pseudo_bytes(16)); 
                $author_name = mysqli_real_escape_string($link, $_POST['author']);
                $author_descrip = mysqli_real_escape_string($link, $_POST['author_descrip']);
                $image = mysqli_real_escape_string($link, basename($newfilename));
            
                $query = "INSERT INTO `authors`(`author_id`, `author_name`, `author_description`, `author_profile_image`, `from_ip`,`from_browser`,`created_at`) VALUES ('$author_id','$author_name','$author_descrip','$image','$from_ip','$from_browser','$date_now')";

                  
                if (mysqli_query($link, $query) ) {

                    $data['status'] = 201;
                    $data['success'] = "User added";
                    echo json_encode($data);
                } else {
                    $data['status'] = 301;
                    $data['error'] = 'Error';
                    echo json_encode($data);
                }
            }else{
                   // duplicate Url found. Change the slug
                   $data['status'] =603;
                   $data['error'] = 'Duplicate Url Found. Please change the slugs';
                   echo json_encode($data);
            }

        }
     
  
 
   

    
   
       
    //backup data start //
            
    // $query1 = "INSERT INTO `user_data_history`(`user_uid`,`username`, `password`,`name`,`phone`,`fixed reduction`,`sql_operation`,`updated_by`,`from_ip`,`from_browser`,`time`) VALUES ('$user_uid','$username', '$hashed_password','$name','$phone','$fixed_reduction','insert','".$_SESSION['userlogin']."','$from_ip','$from_browser','$date_now')";                
       
    //backup data end // 
  

}