<?php

    header("Access-Control-ALlow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: ccess-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorieation, X-Requested-With");

    require_once "../../config/Database.php";
    require_once "../../models/Post.php";

    // Instantiate DB & connect
    $database = new Database_api();
    $db = $database->connect();

    // Instantiate blog post object
    $post = new Post($db);

    // get raw posted data : 
    $data = json_decode(file_get_contents("php://input"));
    $post->title = $data->title;
    $post->body = $data->body;
    $post->category_id = $data->category_id;
    $post->author = $data->author;

    // create post :
    if($post->createPost()){
        echo json_encode(array("message"=>"Post Created Successgully"));
    }else{
        echo json_encode(array("Message"=>"Post Not Created"));
    }