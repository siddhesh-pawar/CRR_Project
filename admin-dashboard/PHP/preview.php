<?php
require_once 'link.php';
if (mysqli_connect_error()) {
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
if (isset($_POST['blog'])) {
    session_start();

    $data = array();
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    function guidv4($data)
    {
        assert(strlen($data) == 16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    function create_slug($string)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
    }


    if (isset($_FILES["hero-image"]["name"])) {
        $target_dir = "../assets/images/uploads/";
        $temp = explode(".", $_FILES["hero-image"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($newfilename);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (isset($_POST["blog"])) {
            $check = getimagesize($_FILES["hero-image"]["tmp_name"]);


            if ($check !== false) {
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
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "webp"
        ) {
            echo "Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $data['status'] = 601;
            $data['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["hero-image"]["tmp_name"], $target_file)) {
                $title = mysqli_real_escape_string($link, $_POST['title']);
                // $category_id = mysqli_real_escape_string($link, $_POST['category_id']) ;
                $slug = mysqli_real_escape_string($link, $_POST['slug']);
                // $sub_category_id = mysqli_real_escape_string($link, $_POST['sub_category_id']) ;
                $date_of_posting = mysqli_real_escape_string($link, $_POST['date_of_posting']);
                $time_of_posting = mysqli_real_escape_string($link, $_POST['time_of_posting']);
                $excerpt = mysqli_real_escape_string($link, $_POST['excerpt']);
                $hero_image_alt = mysqli_real_escape_string($link, $_POST['hero_image_alt']);
                $content = mysqli_real_escape_string($link, $_POST['blog']);
                $type = mysqli_real_escape_string($link, $_POST['type']);
                $author_id = mysqli_real_escape_string($link, $_POST['author']);
                // $url = mysqli_real_escape_string($link, $_POST['url']) ;
                $status = mysqli_real_escape_string($link, $_POST['status']);
                $article_id = guidv4(openssl_random_pseudo_bytes(16));;
                $keywords = mysqli_real_escape_string($link, $_POST['keywords']);
                $visibility = mysqli_real_escape_string($link, $_POST['visibility']);
                $comments = mysqli_real_escape_string($link, $_POST['comments']);
                $meta_title = mysqli_real_escape_string($link, $_POST['meta_title']);
                $meta_description = mysqli_real_escape_string($link, $_POST['meta_description']);
                $meta_image = $baseurl . "article-dashboard/assets/images/uploads/" . basename($newfilename);

                $hero_image = mysqli_real_escape_string($link, basename($newfilename));





                if ($_POST['sub_category_id'] !== "") {
                    $sub_category_id_lines = explode(",", $_POST['sub_category_id']);
                    foreach ($sub_category_id_lines as $key => $value) {

                        $query2 = "SELECT * FROM `articles_sub_category` WHERE `sub_category_id` = '$value'";
                        $result = mysqli_query($link, $query2);
                        $row = mysqli_fetch_array($result);
                        $category_lines_id = $row['category_id'];
                        $sub_category_name = $row['sub_category_name'];
                        $sub_category_slug = create_slug($sub_category_name);
                        $category_name = $row['category_name'];
                        $category_slug = create_slug($category_name);
                        $url = $baseurl . "blog" . "/" . $category_slug . "/" . $sub_category_slug . "/" . $slug;
                        $query3 = "INSERT INTO `article_lines` (`article_id`,`category_id`,`category_name`,`category_slug`,`sub_category_name`,`sub_category_slug`,`sub_category_id`,`url_lines`,`from_ip`, `from_browser`, `time`) VALUES ('$article_id','$category_lines_id','$category_name','$category_slug','$sub_category_name','$sub_category_slug','$value','$url','$from_ip','$from_browser','$date_now')";
                        $result3 = mysqli_query($link, $query3);
                    }
                }


                if ($_POST['category_id'] !== "") {
                    $category_id_lines = explode(",", $_POST['category_id']);

                    foreach ($category_id_lines as $key => $value) {
                        $query2 = "SELECT * FROM `articles_category` WHERE `category_id` = '$value'";
                        $result = mysqli_query($link, $query2);
                        $row = mysqli_fetch_array($result);


                        $category_lines_id = $row['category_id'];
                        $category_slug = $row['category_slug'];
                        $category_name = $row['category_name'];
                        $url = $baseurl . "blog-cat" . "/" . $category_slug . "/" . $slug;
                        $query3 = "INSERT INTO `article_lines` (`article_id`,`category_id`,`category_name`,`category_slug`,`url_lines`,`from_ip`, `from_browser`, `time`) VALUES ('$article_id','$category_lines_id','$category_name','$category_slug','$url','$from_ip','$from_browser','$date_now')";
                        $result3 = mysqli_query($link, $query3);
                    }
                }

                $query = "INSERT INTO `preview` (`visibility`,`title`,`comments`,`slug`,`date_of_posting`, `time_of_posting`,`hero_image`, `excerpt`, `content`, `type`, `author_id`, `created_at`, `updated_at`, `from_ip`, `from_browser`, `hero_image_alt`,`status` , `article_id`,`keywords`,`meta_title`,`meta_url`,`meta_description`,`meta_image`) VALUES ('$visibility','$title','$comments','$slug','$date_of_posting', '$time_of_posting', '$hero_image', '$excerpt', '$content', '$type', '$author_id', '$date_now', '$date_now', '$from_ip', '$from_browser', '$hero_image_alt', '$status', '$article_id', '$keywords','$meta_title','$url','$meta_description','$meta_image')";


                if (mysqli_query($link, $query)) {

                    $data['status'] = 201;
                    $data['success'] = "User added";
                    $data['article_id'] = $article_id;
                    $data['url'] = $url;
                    echo json_encode($data);
                } else {
                    $data['status'] = 301;
                    $data['error'] = 'Error';
                    echo json_encode($data);
                }
            } else {
                // duplicate Url found. Change the slug
                $data['status'] = 603;
                $data['error'] = 'Duplicate Url Found. Please change the slugs';
                echo json_encode($data);
            }
        }
    } else {
        $title = mysqli_real_escape_string($link, $_POST['title']);
        // $category_id = mysqli_real_escape_string($link, $_POST['category_id']) ;
        $slug = mysqli_real_escape_string($link, $_POST['slug']);
        // $sub_category_id = mysqli_real_escape_string($link, $_POST['sub_category_id']) ;
        $date_of_posting = mysqli_real_escape_string($link, $_POST['date_of_posting']);
        $time_of_posting = mysqli_real_escape_string($link, $_POST['time_of_posting']);
        $excerpt = mysqli_real_escape_string($link, $_POST['excerpt']);
        $hero_image_alt = mysqli_real_escape_string($link, $_POST['hero_image_alt']);
        $content = mysqli_real_escape_string($link, $_POST['blog']);
        $type = mysqli_real_escape_string($link, $_POST['type']);
        $author_id = mysqli_real_escape_string($link, $_POST['author']);
        // $url = mysqli_real_escape_string($link, $_POST['url']) ;
        $status = mysqli_real_escape_string($link, $_POST['status']);
        $article_id = guidv4(openssl_random_pseudo_bytes(16));;
        $keywords = mysqli_real_escape_string($link, $_POST['keywords']);
        $visibility = mysqli_real_escape_string($link, $_POST['visibility']);
        $comments = mysqli_real_escape_string($link, $_POST['comments']);
        $meta_title = mysqli_real_escape_string($link, $_POST['meta_title']);
        $meta_description = mysqli_real_escape_string($link, $_POST['meta_description']);
        $meta_image = $baseurl . "article-dashboard/assets/images/uploads/" .  $_POST['old-hero-image'];

        $hero_image = mysqli_real_escape_string($link, $_POST['old-hero-image']);





        if ($_POST['sub_category_id'] !== "") {
            $sub_category_id_lines = explode(",", $_POST['sub_category_id']);
            foreach ($sub_category_id_lines as $key => $value) {

                $query2 = "SELECT * FROM `articles_sub_category` WHERE `sub_category_id` = '$value'";
                $result = mysqli_query($link, $query2);
                $row = mysqli_fetch_array($result);
                $category_lines_id = $row['category_id'];
                $sub_category_name = $row['sub_category_name'];
                $sub_category_slug = create_slug($sub_category_name);
                $category_name = $row['category_name'];
                $category_slug = create_slug($category_name);
                $url = $baseurl . "read" . "/" . $category_slug . "/" . $sub_category_slug . "/" . $slug;
                $query3 = "INSERT INTO `article_lines` (`article_id`,`category_id`,`category_name`,`category_slug`,`sub_category_name`,`sub_category_slug`,`sub_category_id`,`url_lines`,`from_ip`, `from_browser`, `time`) VALUES ('$article_id','$category_lines_id','$category_name','$category_slug','$sub_category_name','$sub_category_slug','$value','$url','$from_ip','$from_browser','$date_now')";
                $result3 = mysqli_query($link, $query3);
            }
        }


        if ($_POST['category_id'] !== "") {
            $category_id_lines = explode(",", $_POST['category_id']);

            foreach ($category_id_lines as $key => $value) {
                $query2 = "SELECT * FROM `articles_category` WHERE `category_id` = '$value'";
                $result = mysqli_query($link, $query2);
                $row = mysqli_fetch_array($result);


                $category_lines_id = $row['category_id'];
                $category_slug = $row['category_slug'];
                $category_name = $row['category_name'];
                $url = $baseurl . "read-cat" . "/" . $category_slug . "/" . $slug;
                $query3 = "INSERT INTO `article_lines` (`article_id`,`category_id`,`category_name`,`category_slug`,`url_lines`,`from_ip`, `from_browser`, `time`) VALUES ('$article_id','$category_lines_id','$category_name','$category_slug','$url','$from_ip','$from_browser','$date_now')";
                $result3 = mysqli_query($link, $query3);
            }
        }

        $query = "INSERT INTO `preview` (`visibility`,`title`,`comments`,`slug`,`date_of_posting`, `time_of_posting`,`hero_image`, `excerpt`, `content`, `type`, `author_id`, `created_at`, `updated_at`, `from_ip`, `from_browser`, `hero_image_alt`,`status` , `article_id`,`keywords`,`meta_title`,`meta_url`,`meta_description`,`meta_image`) VALUES ('$visibility','$title','$comments','$slug','$date_of_posting', '$time_of_posting', '$hero_image', '$excerpt', '$content', '$type', '$author_id', '$date_now', '$date_now', '$from_ip', '$from_browser', '$hero_image_alt', '$status', '$article_id', '$keywords','$meta_title','$url','$meta_description','$meta_image')";


        if (mysqli_query($link, $query)) {

            $data['status'] = 201;
            $data['success'] = "User added";
            $data['article_id'] = $article_id;
            $data['url'] = $url;
            echo json_encode($data);
        } else {
            $data['status'] = 301;
            $data['error'] = 'Error';
            echo json_encode($data);
        }
    }
    // This function will generate  
    // Random string of length 10 










    //backup data start //

    // $query1 = "INSERT INTO `user_data_history`(`user_uid`,`username`, `password`,`name`,`phone`,`fixed reduction`,`sql_operation`,`updated_by`,`from_ip`,`from_browser`,`time`) VALUES ('$user_uid','$username', '$hashed_password','$name','$phone','$fixed_reduction','insert','".$_SESSION['userlogin']."','$from_ip','$from_browser','$date_now')";                

    //backup data end // 
}
