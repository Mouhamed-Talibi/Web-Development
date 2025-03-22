<?php

    $host = "localhost";
    $user = "root";
    $password = "";

    /* Example of mysqli(procedural) */
    $connect = mysqli_connect($host, $user, $password);
    // check connection : 
    if ($connect) {
        echo "Connection successfully from mysql(procedural)";
    } else { die("Connection Failed: " . mysqli_connect_error()); }
    echo "<br>";
    echo "<br>";

    /* create database : my_db*/
    $sql = "CREATE DATABASE my_db";
    if (mysqli_query($connect, $sql)) {
        echo "Creating database successfully";
    } else {
        die ("Create database failed: " . mysqli_error($connect));
    }








