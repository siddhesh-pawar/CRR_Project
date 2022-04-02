<?php
// Include the database configuration file 
require_once 'link.php';
if (mysqli_connect_error()) {
    die("<script>console.log('There is a problem with mysql connection')</script>");
}

session_start();

$data = array();
$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];
date_default_timezone_set("Asia/Calcutta");
$date_now = date("r");
// Count total files
$countfiles = count($_FILES['files']['name']);

// Upload directory
$upload_location = "../assets/images/uploads/sidebar/";

// To store uploaded files path
$files_arr = array();
$uploadOk = 1;
$error = "";

// Loop all files
for ($index = 0; $index < $countfiles; $index++) {

    if (isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != '') {
        $random1 = substr(number_format(time() * rand(), 0, '', ''), 0, 10);


        // File name
        $filename = $random1 . $_FILES['files']['name'][$index];
        $target_file = $upload_location . basename($filename);

        // Get extension
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));





        $image_info = getimagesize($_FILES['files']['tmp_name'][$index]);
        $image_width = $image_info[0];
        // $image_height = $image_info[1]; 

        // Check extension
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "webp" ) {
            
            $uploadOk = 0;
            $error= "Please upload a valid image";
            break;
        }
        // width check

        if ( $image_width > 320) {
           
            $uploadOk = 0;
            $error= "The width of the image is greater than 320px";
            break;
        }
    

        // Upload file


        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES['files']['tmp_name'][$index], $target_file)) {
            $files_arr[] = mysqli_real_escape_string($link, basename($filename));
        }
    }
}
if ($uploadOk == 0) {
    $data['status'] = 601;
    $data['error'] = $error;
    echo json_encode($data);
} else {
   
    $arrLength = count($files_arr);
    for ($index = 0; $index < $arrLength; $index++) {
        $element =  $files_arr[$index];
        $result = mysqli_query($link, "INSERT INTO `sidebar`(`image`,`from_ip`, `from_browser`, `time`) VALUES ('$element','$from_ip','$from_browser','$date_now')");
    }

    $data['status'] = 200;
    $data['success'] = "File uploaded";
    echo json_encode($data);
}







