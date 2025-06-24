<?php

    /*
            - Php mysqli select data:
            -------------------------

        . 
    */

    $connect = mysqli_connect("localhost", "root", "", "my_db");
    if (!$connect) {
        die("CONNECTION FAILED: " . mysqli_connect_error());
    }
    $sql ="SELECT id, first_name, last_name FROM my_guests";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table border=1>";
            echo "
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            ";
            while ($row = mysqli_fetch_assoc($result)) {
                echo <<<HTMLCODE
                    <tr>
                        <td> $row[id] </td>
                        <td> $row[first_name] </td>
                        <td> $row[last_name] </td>
                    </tr>
                HTMLCODE;
            }
        echo "</table>";
    } 
    else {
        echo "There is No Result.";
    }