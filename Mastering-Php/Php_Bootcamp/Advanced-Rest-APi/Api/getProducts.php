<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once "../Config/Database.php";
    require_once "../Models/Products.php";

    $database = new My_Database();
    $product = new Products();

    // without id : 
    $get_product = $product->getProducts();
    echo json_encode($get_product);

    // with Id : 
    $product_withId = $product->getProduct_ById();
    echo json_encode($product_withId);