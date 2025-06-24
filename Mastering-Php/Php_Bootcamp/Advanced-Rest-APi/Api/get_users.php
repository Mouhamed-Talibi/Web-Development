<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json");

    require_once "../Config/Database.php";
    require_once "../Models/Users.php";

    $database = new My_Database();
    $user = new Users();

    // get without id : 
    $result = $user->getUsers();    
    if($result){
        echo json_encode($result);
    }else{
        echo json_encode(array("Message"=>"There Is No Users !!"));
    }

    // Get by id : 
    $result = $user->getUsers_byId();
    if($result){
        echo json_encode($result);
    }else{
        echo json_encode(array("Message"=>"No User Found !!"));
    }