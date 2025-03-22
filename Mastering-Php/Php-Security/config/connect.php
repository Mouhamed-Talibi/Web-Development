<?php
    // connect to the database :
    $connect = mysqli_connect("localhost", "root", "", "security");
    if(!$connect) {
        echo "Connection error : " . mysqli_connect_error();
    }

?>