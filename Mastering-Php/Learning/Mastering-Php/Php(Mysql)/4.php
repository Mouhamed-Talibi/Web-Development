<?php

    $connect = mysqli_connect("localhost", "root", "", "my_db");
    if ($connect) {
        // inserting multiple records : 
        $sql = "INSERT INTO my_guests(first_name, last_name, email)
        VALUES('mouhamed', 'talibi', 'mouha22@gmail.com');
        ";
        $sql .= "INSERT INTO my_guests(first_name, last_name, email)
        VALUES('yassin', 'elbehja', 'yassinel@gmail.com');
        ";
        $sql .= "INSERT INTO my_guests(first_name, last_name, email)
        VALUES('achraf', 'fahim', 'fahimAchh67@gmail.com');
        ";
        $sql .= "INSERT INTO my_guests(first_name, last_name, email) 
        VALUES('oumaima', 'Elbaz', 'oumaEl45@gmail.com');
        "; // Using the (.=) to assign multiple records.
        if (mysqli_multi_query($connect, $sql)) {
            echo "Records Inserted Successfully.";
        } else {
            echo "There is a problem with inserting multi records.";
        }
    } else {
        die('Connection Faile: ' . mysqli_connect_error());
    }