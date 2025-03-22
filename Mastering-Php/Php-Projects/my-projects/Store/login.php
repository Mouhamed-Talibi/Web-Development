<?php

    include("config.php");
    $error_message = "";
    if(isset($_POST['login'])) {
        // check the data :
        if (!empty(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) && !empty($_POST['password'])) {
            // setting the variables : 
            $email    = mysqli_real_escape_string($connect, $_POST['email']);
            $password = mysqli_real_escape_string($connect, $_POST['password']);
            // praparing the statement : 
            $stmt   = mysqli_prepare($connect, "SELECT * FROM users WHERE email=?;");
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row    = mysqli_fetch_assoc($result);
            if ($row) {
                // verifying the password : 
                if (password_verify($password, $row['password'])) {
                    header("Location: admin/products.php");
                    exit();
                } 
                else {
                    $error_message = "Password Incorect!!";
                }
            } 
            else {
                $error_message = "User Not Found!";
            }
        }
        else{
            $error_message = "Please Fill All The Required Fields!";
        }
    }
    // showing the error messages : 
    if(!empty($error_message)) {
        echo "<b style= color:red; margin-button: 15px; >" . $error_message . "</b>";
    }
?>