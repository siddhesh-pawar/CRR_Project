<?php

require_once 'link.php';

if(isset($_POST['type'])){

    if($_POST['type'] == 'blogs'){
        $data = array();
        $article = array();

        $result = mysqli_query($link, "SELECT * FROM `articles` WHERE `status` = 'published'");

        if (mysqli_num_rows($result) !=0 ) {
            $i=0;
            while($row = $result->fetch_assoc()) {
                $article[$i]['article_id'] = $row['article_id'];
                $article[$i]['title'] = $row['title'];
                $i=$i+1;
            } 

            $data['status'] = 201;
            $data['article'] = $article;
            echo json_encode($data);
            
        }else { 
            $data['status'] = 301;
            echo json_encode($data);
        }
    }   

    


}


?>
