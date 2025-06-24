<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once "../Config/Database.php";
    require_once "../Models/Products.php";

    $datbase = new My_Database();
    $product = new Products();

    $delete = $product->deleteProduct();
    echo json_encode($delete);