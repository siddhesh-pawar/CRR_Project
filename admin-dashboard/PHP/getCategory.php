<?php

require_once 'link.php';

if(isset($_POST['type'])){

    if($_POST['type'] == 'blogs'){
        $data = array();
        $category = array();

        $result = mysqli_query($link, "SELECT * FROM `articles_category`");

        if (mysqli_num_rows($result) !=0 ) {
            $i=0;
            while($row = $result->fetch_assoc()) {
                $category[$i]['category_id'] = $row['category_id'];
                $category[$i]['category_name'] = $row['category_name'];
                $category[$i]['category_slug'] = $row['category_slug'];
                $category[$i]['created_at'] = $row['created_at'];
                $i=$i+1;
            } 

            $data['status'] = 201;
            $data['category'] = $category;
            echo json_encode($data);
            
        }else { 
            $data['status'] = 301;
            echo json_encode($data);
        }
    }   

    


}


?>
