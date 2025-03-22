<?php

    // Headers:
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: PUT");
    header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With");

    require_once "../../config/Database.php";
    require_once "../../models/Post.php";

    // Instantiate DB & connect:
    $database = new Database_api(); 
    $db = $database->connect();

    // Instantiate blog post object:
    $post = new Post($db);

    // Get raw posted data:
    $data = json_decode(file_get_contents("php://input"));

    if (!$data) {
        echo json_encode(array("message" => "Invalid input."));
        die();
    }

    // Set ID to update:
    $post->id = $data->id ?? null; // Use null coalescing to prevent errors if 'id' is missing

    // Set post properties:
    $post->title = $data->title;
    $post->body = $data->body;
    $post->category_id = $data->category_id;
    $post->author = $data->author;

    // Update post:
    if ($post->updatePost()) {
        echo json_encode(array("message" => "Post Updated Successfully"));
    } else {
        echo json_encode(array("message" => "Post Not Updated"));
    }
?>
