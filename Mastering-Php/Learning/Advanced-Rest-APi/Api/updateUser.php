<?php

    header("Access-Control-Allow-origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once "../Config/Database.php";
    require_once "../Models/Users.php";

    $database = new My_Database();
    $user = new Users();

    $update = $user->updateUser();
    echo json_encode($update);