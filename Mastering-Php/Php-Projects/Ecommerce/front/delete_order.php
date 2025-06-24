<?php

    require "../admin/include/db.php";
    $id = $_GET['id'];
    $valid_id = filter_var($id, FILTER_VALIDATE_INT);
    if($valid_id){
        $stmt = mysqli_prepare($connect, "DELETE FROM orders WHERE id=?");
        mysqli_stmt_bind_param($stmt, "i", $valid_id);
        if(mysqli_stmt_execute($stmt)){
            header("Location: orders.php");
            exit();
        }
    }