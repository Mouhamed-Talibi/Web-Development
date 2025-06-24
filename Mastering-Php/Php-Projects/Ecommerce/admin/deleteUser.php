<?php

    require "include/db.php";
    $id = $_GET['id'];
    $valid_id = mysqli_real_escape_string($connect, $id);
    if($valid_id){
        $stmt = mysqli_prepare($connect, "DELETE FROM users WHERE id=?");
        mysqli_stmt_bind_param($stmt, "i", $valid_id);
        if(mysqli_stmt_execute($stmt)){
            header("Location: users.php");
        }
        else{
            throw new Exception("There Is A Problem With Deleting the user");
        }
    }