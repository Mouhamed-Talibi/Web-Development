<?php

    // db_connection 
    function db_connection($localhost="localhost", $user="root", $password="", $dbname="php_apps"){
        $connect = mysqli_connect($localhost, $user, $password, $dbname);
        return $connect;
        // if there is no connection : 
        if(!$connect){
            die("Connection Error : " . mysqli_connect_error());
        }
    }

    // usersList : 
    function usersList($connect){
        if($connect){
            $users = mysqli_query($connect, "SELECT * FROM users");
            return $users;
        }
    }

    // insertUser : 
    function insertUser($connect){
        if($connect){
            $f_name = mysqli_real_escape_string($connect, $_POST['f_name']);
            $l_name = mysqli_real_escape_string($connect, $_POST['l_name']);
            $age = intval($_POST['age']);
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $password = mysqli_real_escape_string($connect, $_POST['password']);
            if(isset($f_name) && isset($l_name) && isset($age) && isset($email) && isset($password)){
                // validate email, and hash password :
                $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
                $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
                if($valid_email && $hashed_pass){
                    // prepare stmt : 
                    $stmt = mysqli_prepare($connect, "INSERT INTO users(f_name, l_name, age, email, password)
                                                        VALUES(?, ?, ?, ?, ?);"
                    );
                    mysqli_stmt_bind_param($stmt, "ssiss", $f_name, $l_name, $age, $valid_email, $hashed_pass);
                    return mysqli_stmt_execute($stmt);
                }
                else{
                    echo "Invalid Email or Unashed Password !!";
                }
            }
            else{
                echo "All Fields Are Required !!";
            }
        }
        else{
            echo "Failed To Connecto To Database !!";
        }
    }

    // viewUser : 
    function viewUser($connect, $id){
        if($connect){
            $id = intval($_GET['id']);
            // prepare stmt : 
            $stmt = mysqli_prepare($connect, "SELECT * FROM users WHERE id=?");
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);
            return $user;
        }
    }

    // upateUser :
    function updateUser($connect, $id){
        if($connect){
            $id = intval($_POST['id']);
            $f_name = mysqli_real_escape_string($connect, $_POST['f_name']);
            $l_name = mysqli_real_escape_string($connect, $_POST['l_name']);
            $age = intval($_POST['age']);
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $password = $_POST['password'];

            // Validate input fields
            if (empty($f_name) || empty($l_name) || empty($age) || empty($email) || empty($password)) {
                throw new Exception("All fields are required");
            }
            // Validate email
            $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$valid_email) {
                throw new Exception("Invalid email address");
            }
            // Validate age
            if ($age <= 0) {
                throw new Exception("Age must be a positive integer");
            }

            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
            // Prepare statement
            $stmt = mysqli_prepare($connect, "UPDATE users 
                                                SET f_name=?,
                                                    l_name=?,
                                                    age=?,
                                                    email=?,
                                                    password=?
                                                WHERE id=?"
            );
            mysqli_stmt_bind_param($stmt, "ssissi", $f_name, $l_name, $age, $email, $hashed_pass, $id);
            if (!mysqli_stmt_execute($stmt)) {
                throw new Exception("Failed to update user: " . mysqli_stmt_error($stmt));
            }
            return true;
        }
        else {
            throw new Exception("Connection failed");
        }
    }

    // deleteUser : 
    function deleteUser($connect, $id){
        if($connect){
            $id = intval($_GET['id']);
            // stmt : 
            $stmt = mysqli_prepare($connect, "DELETE FROM users WHERE id=?");
            mysqli_stmt_bind_param($stmt, "i", $id);
            return mysqli_stmt_execute($stmt);
        }
    }