<?php

    /* 
        Mysqli Prepared Statement : 
        ---------------------------
            - Prepared statement are very useful against sql injection. 
            - in the bind function : 
                The argument may be one of four types:
                    i - integer
                    d - double
                    s - string
                    b - BLOB

            - If we want to insert any data from external sources (like user input), it is very important that the data is sanitized and validated.
    */


    $connect = mysqli_connect("localhost", "root", "", "my_db");
    if ($connect) {
        $first_name = "sarab";
        $last_name = "kids";
        $email = "sarKid51@gmail.com";
        // Prepare and bind.
        $stmt = mysqli_prepare($connect, "INSERT INTO my_guests(first_name, last_name, email)
            VALUES(?, ?, ?);"
        );
        mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
        if (mysqli_stmt_execute($stmt)) {
            echo "Statement Executed Successfulyy.";
        } else {
            echo "There is a problem with the statement.";
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connect); 

    } 
    else {
        die("Connection Failed: " . mysqli_connect_error());
    }