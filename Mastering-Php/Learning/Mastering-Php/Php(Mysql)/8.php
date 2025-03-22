<?php

    /* Delete Data */
    $connect = mysqli_connect("localhost", "root", "", "my_db");
    if (!$connect) {
        die("Connection Failed: " . mysqli_connect_error());
    }
    // query satatement : 
    $sql = "DELETE FROM my_guests WHERE id=6";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "The Data of The user Specified is deleted";
    } else{ die("Cannot delete the data: ". mysqli_error($connect)); }

    print "<br>";
    print "<br>";

    /* Upating data */
    $first_name = "khalid";
    $last_name = "price";
    $email = "Khalidlam67@gmail.com";
    // sql query
    $sql = "UPDATE my_guests SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=5";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "Records updated successfully";
    } else { die("Cannot Update Records: " . mysqli_error($connect)); }

    print "<br>";
    print "<br>";

    /*limit data selection: */
    $sql = "SELECT id, email FROM my_guests LIMIT 4";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: $row[id] | email: $row[email]" . "<br><br>";
        }
    }
