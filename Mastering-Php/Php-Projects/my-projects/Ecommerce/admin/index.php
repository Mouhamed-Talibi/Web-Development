<?php
    require_once "include/db.php";
    session_start();
    $alert = '';
    $max_attempts = 5;  // Maximum number of attempts allowed
    $lockout_time = 15 * 60; // Lockout time in seconds (15 minutes)
    // Initialize session variables
    if (!isset($_SESSION['attempts'])) {
        $_SESSION['attempts'] = 0;
        $_SESSION['last_attempt_time'] = time();
    }
    // Check if the user is locked out
    if ($_SESSION['attempts'] >= $max_attempts) {
        $time_since_last_attempt = time() - $_SESSION['last_attempt_time'];
        if ($time_since_last_attempt < $lockout_time) {
            $remaining_time = $lockout_time - $time_since_last_attempt;
            $minutes_remaining = ceil($remaining_time / 60);
            $alert = "<div class='alert alert-danger' role='alert'>Too many attempts. Please try again after $minutes_remaining minute(s).</div>";
        } else {
            // Reset attempts after the lockout period
            $_SESSION['attempts'] = 0;
            $_SESSION['last_attempt_time'] = time();
        }
    }
    if(isset($_POST['login'])){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            // setting the vars : 
            $email       = mysqli_real_escape_string($connect, $_POST['email']);
            $password    = mysqli_real_escape_string($connect, $_POST['password']);
            $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
            // checking the data : 
            if($valid_email){
                $stmt   = mysqli_prepare($connect, "SELECT email, password FROM admin WHERE email=?");
                mysqli_stmt_bind_param($stmt, "s", $valid_email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $admin  = mysqli_fetch_assoc($result);
                if($admin){
                    if(password_verify($password, $admin['password'])){
                        // creating an admin session : 
                        $_SESSION['admin_email'] = $admin['email'];
                        header("Location: dashboard.php");
                        exit();
                    }
                    else{
                        $alert = "
                            <div class='alert alert-danger' role='alert'>
                                Incorrect Password!!
                            </div>
                        ";
                    }
                } 
                else{
                    $alert = "
                        <div class='alert alert-danger' role='alert'>
                            Email Not Found!!
                        </div>
                    ";
                }
            }
            else{
                $alert = "
                    <div class='alert alert-danger' role='alert'>
                        Invalid Email Format!!
                    </div>
                ";
            }
        }
        else{
            $alert = "
                <div class='alert alert-danger' role='alert'>
                    Empty Email Or Password!!
                </div>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- style link -->
    <link rel="stylesheet" href="style/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
</head>
<body>
    <form action="" method="post">
        <!-- displaying the alert errors -->
        <?php if(!empty($alert)){ echo $alert;}?>
        <div class="container">
            <label for="em">Email</label>
            <input type="email" name="email" id="em" placeholder="Write Your Valid Email" required><br>
            <label for="ps">Password</label>
            <input type="password" name="password" id="ps" placeholder="Write Your Password" required>

            <button type="submit" name="login">Login</button><br>
            You Don't Have Account ? <a href="signup.php">Register Now</a>
        </div>
    </form>
</body>
</html>