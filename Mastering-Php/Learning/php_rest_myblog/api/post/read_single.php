<?php

    header("Access-Control-ALlow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once "../../config/Database.php";
    require_once "../../models/Post.php";

    // Instantiate DB & connect
    $database = new Database_api();
    $db = $database->connect();

    // Instantiate blog post object
    $post = new Post($db);
    // get id : 
    $post->id = isset($_GET['id']) ? $_GET['id'] : die();

    // read signle : 
    $post->read_sigle();

    // post array : 
    $post_arr = array(
        "id"=>$post->id,
        "title"=>$post->title,
        "body"=>$post->body,
        "category_id"=>$post->category_id,
        "category_name"=>$post->category_name,
        "author"=>$post->author
    );

    // converting post array to json data : 
    print_r(json_encode($post_arr));