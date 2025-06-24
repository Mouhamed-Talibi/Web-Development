<?php
    require_once "include/db.php"; 
    require_once "include/admin_session.php";
    $id   = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $stmt = mysqli_prepare($connect, "DELETE FROM category WHERE id=?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    if(mysqli_stmt_execute($stmt)){
        header("Location: categories.php");
        exit();
    }
    else{
        echo "There Is A Problem With Deleting This Category";
    }
?>