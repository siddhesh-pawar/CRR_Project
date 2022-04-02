<?php

require_once 'link.php';

if(isset($_POST['type'])){

    if($_POST['type'] == 'article'){
        $data = array();
        $author = array();

        $result = mysqli_query($link, "SELECT * FROM `authors`");

        if (mysqli_num_rows($result) !=0 ) {
            $i=0;
            while($row = $result->fetch_assoc()) {
                $author[$i]['author_id'] = $row['author_id'];
                $author[$i]['author_name'] = $row['author_name'];
                $author[$i]['author_description'] = $row['author_description'];
                $author[$i]['created_at'] = $row['created_at'];
                $i=$i+1;
            } 

            $data['status'] = 201;
            $data['author'] = $author;
            echo json_encode($data);
            
        }else { 
            $data['status'] = 301;
            echo json_encode($data);
        }
    }   

}


?>