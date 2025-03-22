<?php

    header("Acces-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once "../Config/Database.php";
    require_once "../Models/Products.php";

    $database = new My_Database();
    $product = new Products();

    $inserting = $product->addProduct();
    echo json_encode($inserting);