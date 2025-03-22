<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "my_db";
    $connect = mysqli_connect($host, $user, $pass, $db);
    if ($connect) {
        echo "Coneecting successfuly " . "<br>";
    } else { dir("Connnection failed : " . mysqli_error($connect)); }

    // creating table : 
    $sql = "CREATE TABLE IF NOT EXISTS my_guests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if (mysqli_query($connect, $sql)) {
        echo "TABLE CREATED SUCCESSFULLY.";
    } else  { die("CREATING TABLE FAILED : " . mysqli_error($conect)); }
    // clausing the database : 
    mysqli_close($connect);