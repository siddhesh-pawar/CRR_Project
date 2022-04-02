<?php

require_once 'link.php';

if(isset($_POST['type']) && isset($_POST['category_id'])){

    if($_POST['type'] == 'blogs'){
        $data = array();
        $sub_category = array();
        $category_id = $_POST['category_id'];
        // echo "SELECT * FROM `articles_sub_category` WHERE `category_id` = " . $_POST['category_id'] . "WHERE `type` = 'blog'";
        // SELECT `sub_category_id`,`category_id`,`sub_category_name`,`sub_category_slug`,`created_at`,`updated_at` FROM `articles_sub_category` WHERE `category_id` = $category_id  AND `type` = 'blogs'"
        $result = mysqli_query($link, "SELECT * FROM `articles_sub_category` WHERE `category_id` = '$category_id'  AND `type` = 'blogs'");
        if (mysqli_num_rows($result) !=0 ) {
            $i=0;
            while($row = $result->fetch_assoc()) {
                $sub_category[$i]['sub_category_id'] = $row['sub_category_id'];
                $sub_category[$i]['category_id'] = $row['sub_category_id'];
                $sub_category[$i]['sub_category_name'] = $row['sub_category_name'];
                $sub_category[$i]['sub_category_slug'] = $row['sub_category_slug'];
                $sub_category[$i]['category_name'] = $row['category_name'];
                $sub_category[$i]['created_at'] = $row['created_at'];
                // $sub_category[$i]['updated_at'] = $row['updated_at'];
                $i=$i+1;
            } 

            $data['status'] = 201;
            $data['sub_category'] = $sub_category;
            echo json_encode($data);
            
        }else { 
            $data['status'] = 301;
            echo json_encode($data);
        }
    }   

    


}
if(isset($_POST['checked'])){

    if($_POST['checked'] == 'check'){
        $data = array();
        $sub_category = array();
        $sub_category_id = $_POST['sub_category_id'];
        // echo "SELECT * FROM `articles_sub_category` WHERE `category_id` = " . $_POST['category_id'] . "WHERE `type` = 'blog'";
        // SELECT `sub_category_id`,`category_id`,`sub_category_name`,`sub_category_slug`,`created_at`,`updated_at` FROM `articles_sub_category` WHERE `category_id` = $category_id  AND `type` = 'blogs'"
        $result = mysqli_query($link, "SELECT `category_id` FROM `articles_sub_category` WHERE `sub_category_id` = '$sub_category_id'");
        $row = mysqli_fetch_array($result);
        $data['status'] = 201;
        $data['category_id'] = $row['category_id'];
        echo json_encode($data);
            
        
    }   

    


}



?>