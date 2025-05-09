<?php

    // Headers : 
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once "../../config/Database.php";
    require_once "../../models/Post.php";

    // Instantiate db & connect : 
    $database = new Database_api();
    $db = $database->connect();

    // instantiate blog post object :
    $post = new Post($db);

    // blog post query : 
    $result = $post->read();
    // get row count : 
    $num = $result->rowCount();

    // cheking if any post :
    if($num > 0){
        // post array : 
        $posts_arr = array();
        $posts_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $post_item = array(
                'id'=>$id,
                'title'=>$title,
                'category_id'=>$category_id,
                'body'=>html_entity_decode($body),
                'author'=>$author,
                'category_name'=>$category_name,
            );
            // push to data : 
            array_push($posts_arr['data'], $post_item);
        }

        // turn it to json code : 
        echo json_encode($posts_arr);
    }
    else{
        // no posts : 
        echo json_encode(["message"=>"There no posts."]);
    }