<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=UTF-8");

    require_once "../Models/Users.php";
    require_once "../Config/Database.php";

    $database = new My_Database();
    $user = new Users();

    $delete = $user->deleteUser();
    echo json_encode($delete);