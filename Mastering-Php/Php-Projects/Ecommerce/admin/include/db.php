<?php

    // connect to database : 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "ecosite";
    $connect = mysqli_connect($host, $user, $pass, $db);
    if(!$connect){
        die("There Is A Problem With [ Database Connection!! ]");
    }