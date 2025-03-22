<?php
    require_once "include/db.php";
    require_once "include/admin_session.php";
    $id       = mysqli_real_escape_string($connect, $_GET['id']);
    $valid_id = filter_var($id, FILTER_VALIDATE_INT);
    $stmt = mysqli_prepare($connect, "DELETE FROM product WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    if(mysqli_stmt_execute($stmt)){
        header(("Location: products.php"));
        exit();
    }
    else{
        die("The Product Isn't deleted: " . mysqli_error($connect));
    }
