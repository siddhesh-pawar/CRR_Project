<?php

require_once 'link.php';

if(isset($_POST['type'])){

    if($_POST['type'] == 'blogs'){
        $data = array();
        $comment = array();

        $result = mysqli_query($link, "SELECT * FROM `comments`");

        if (mysqli_num_rows($result) !=0 ) {
            $i=0;
            while($row = $result->fetch_assoc()) {
                $comment[$i]['comment_id'] = $row['comment_id'];
                $comment[$i]['comment'] = $row['comment'];
                $comment[$i]['article_id'] = $row['article_id'];
       
                $i=$i+1;
            } 

            $data['status'] = 201;
            $data['comment'] = $comment;
            echo json_encode($data);
            
        }else { 
            $data['status'] = 301;
            echo json_encode($data);
        }
    }   

    


}


?>
