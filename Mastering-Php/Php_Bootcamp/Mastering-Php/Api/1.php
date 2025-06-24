<?php

    /*
        What is Rest Api : 
        ------------------
            - [ Rest Api ] : EST (Representational State of Resource) is an architectural style for designing networked applications. It is 
                based on the idea of resources, which are identified by URIs (Uniform Resource Identifiers), and can be manipulated using a 
                fixed set of operations.

            - [ Restful Api ] : A RESTful API is an API that conforms to the REST architectural style. It is a web service that uses HTTP 
                methods to manipulate and retrieve data.
    */

    header("Access-Control-Allow-Origin");
    header("Content-Type: application/json; charset=UTF-8");

    $users = array(
        array("id"=>1, "name"=>"Mouhamed talibi"),
        array("id"=>2, "name"=>"Hamza talibi")
    );

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        // conver php aray to json string 
        $json_data = json_encode($users);
        echo $json_data;
    }else {
        http_response_code(405);
        echo json_encode(array("messsage"=>"Method Not Allowed"));  
    }