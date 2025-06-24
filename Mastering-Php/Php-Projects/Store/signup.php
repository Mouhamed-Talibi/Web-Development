<?php

    include("config.php");
    // handling the user data : 
    if (isset($_POST['signup'])) {
        // checking the fields aren't empty : 
        if (!empty($_POST['f_name']) && !empty($_POST['u_name']) && !empty(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) && !empty($_POST['password'])) {
            // setting the variables : 
            $f_name = mysqli_real_escape_string($connect, $_POST['f_name']);
            $u_name = mysqli_real_escape_string($connect, $_POST['u_name']);
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            // hashing the password : 
            $password = mysqli_real_escape_string($connect, $_POST['password']);
            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
            // preparing the statement & inserting data: 
            $stmt = mysqli_prepare($connect, "INSERT INTO users(f_name, u_name, email, password) VALUES(?, ?, ?, ?);");
            mysqli_stmt_bind_param($stmt, "ssss", $f_name, $u_name, $email, $hashed_pass);
            if (mysqli_stmt_execute($stmt)){
                header("Location: index.php");
                exit();
            } 
            else{
                die("Inderting failed:" . mysqli_error($connect));
            }
        } 
        else{
            die("You Have To Full All The Fields!!");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <style>
            body {
                font-family: 'Ubuntu', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            main {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
                text-align: center;
            }

            label {
                display: block;
                margin-bottom: 8px;
                font-weight: 500;
                color: #333;
            }

            input[type="text"], input[type="email"], input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
                border-color: #007bff;
                outline: none;
                box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            }

            button[type="submit"] {
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }

            button[type="submit"]:hover {
                background-color: #0056b3;
            }

            .footer {
                margin-top: 20px;
                font-size: 14px;
                color: #777;
            }

            .footer span {
                color: #007bff;
            }
        </style>
    </head>

    <body>
        <center>
            <main>
                <form action="" method="post">
                    <label for="f_n">Family Name</label>
                    <input type="text" name="f_name" id="f_n" required><br>
                    <label for="u_n">Username</label>
                    <input type="text" name="u_name" id="u_n" required><br>
                    <label for="em">Email</label>
                    <input type="email" name="email" id="em" required><br>
                    <label for="ps">Password</label>
                    <input type="password" name="password" id="ps" required><br>
                    <button type="submit" name="signup">Sign Up</button>
                </form>
            </main>
            <div class="footer">
                Developed By <span>Mouhamed Talibi</span>
            </div>
        </center>
    </body>
</html>
