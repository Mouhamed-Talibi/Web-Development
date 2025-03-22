<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "geeksforgeeks";
    $connect = mysqli_connect($host, $user, $password, $db);
    if(!$connect){
        die("Error With Connection : " . mysqli_connect_error());
    }