<?php

    /* Filetring data with WHERE clause: */

    $connect = mysqli_connect("localhost", "root", "", "my_db");
    if (!$connect) { die("Connection Failed: ". mysqli_connect_error()); }
    // where clause and order by
    $sql = "SELECT id, first_name, email FROM my_guests WHERE id <= 5 ORDER BY first_name ASC";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: $row[id] / FIRST NAME: $row[first_name] / EMAIL: $row[email]";
            echo "<br><br>";
        }
    }
?>