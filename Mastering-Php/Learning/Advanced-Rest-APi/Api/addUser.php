<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once "../Config/Database.php";
    require_once "../Models/Users.php";

    $database = new My_Database();
    $user = new Users();

    // adding new User : 
    $adding = $user->addUser();

    echo json_encode($adding);