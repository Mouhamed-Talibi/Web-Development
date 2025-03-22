<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "my_db";
    $connect = mysqli_connect($host, $user, $pass, $db);
    // checking connection : 
    if ($connect) {
        echo "Connecting to database successfully" . "<br>";
    } else { die("Connection failed :" . mysqli_connect_error()); }

    // inserting data : 
    $sql = "INSERT INTO my_guests(firstname, lastname, email)
        VALUES('yassin', 'behja', 'yassiEL8@gmail.com')
    ";
    if (mysqli_query($connect, $sql)) {
        echo "Adding Records successfully." . "<br>";
        // getting last id : 
        $last_ID = mysqli_insert_id($connect);
        echo "The last inserted ID is : " . $last_ID . "<br>";
    } else { die("Adding Records Failed : " . mysqli_error($connect)); }

    print "<br>";
    print "<br>";
