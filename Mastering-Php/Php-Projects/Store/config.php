<?php
    // connecting to database & checking connection : 
    $host     = "localhost";
    $user     = "root";
    $password = "";
    $database = "store";
    $connect = mysqli_connect($host, $user, $password, $database);
    if (!$connect) {
        die("Connection Failed: " . mysqli_connect_error());
    }
?>