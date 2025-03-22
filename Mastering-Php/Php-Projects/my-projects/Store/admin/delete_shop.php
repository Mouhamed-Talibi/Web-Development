<?php
    include("config.php");
    $id = $_GET['id'];
    // prepare the statement : 
    $stmt = mysqli_prepare($connect, "DELETE FROM my_shops WHERE id=?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    if(mysqli_stmt_execute($stmt)){
        header("Location: my_shops.php");
        exit();
    }
?>