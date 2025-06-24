<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charet=UTF-8");

    require_once "../Config/Database.php";
    require_once "../Models/Products.php";

    $database = new My_Database();
    $product = new Products();

    $updating = $product->updateProduct();
    echo json_encode($updating);