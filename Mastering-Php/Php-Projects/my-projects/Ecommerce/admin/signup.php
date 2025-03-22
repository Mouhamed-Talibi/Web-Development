<?php
    require_once "include/db.php";
    
    // Variable to store error messages
    $alert = '';
    $max_attempts = 5;  
    $lockout_time = 15 * 60; 
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
    if (isset($_POST['signup'])) {
        if (!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $full_name   = mysqli_real_escape_string($connect, $_POST['full_name']);
            $email       = mysqli_real_escape_string($connect, $_POST['email']);
            $password    = mysqli_real_escape_string($connect, $_POST['password']);
            
            $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if ($valid_email) {
                // Checking if the email already exists
                $stmt = mysqli_prepare($connect, "SELECT email FROM admin WHERE email = ?");
                mysqli_stmt_bind_param($stmt, "s", $valid_email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 0) {
                    // Hash the password before saving
                    $hashed_pass = password_hash($password, PASSWORD_BCRYPT);
                    // Inserting the data
                    $stmt = mysqli_prepare($connect, "INSERT INTO admin(full_name, email, password) VALUES (?, ?, ?)");
                    mysqli_stmt_bind_param($stmt, "sss", $full_name, $valid_email, $hashed_pass);
                    if (mysqli_stmt_execute($stmt)) {
                        // Successful signup, redirect to login
                        header("Location: index.php");
                        exit();
                    } else {
                        $alert = "
                            <div class='alert alert-danger' role='alert'>
                                Admin Not Added!! Database Error.
                            </div>
                        ";
                    }
                } else {
                    $alert = "
                        <div class='alert alert-danger' role='alert'>
                            Email Already Exists, Use Another Email!!
                        </div>
                    ";
                }
            } else {
                $alert = "
                    <div class='alert alert-danger' role='alert'>
                        Invalid Email, Use A Valid One!!
                    </div>
                ";
            }
        } else {
            $alert = "
                <div class='alert alert-danger' role='alert'>
                    Full Name, Email, or Password is missing!!
                </div>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Link to Signup Style -->
    <link rel="stylesheet" href="style/signup.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - SignUp</title>
</head>
<body>
    <form action="" method="post">
        <!-- displaying the alert errors -->
        <?php if(!empty($alert)){echo $alert;}?>

        <h2>Sign Up</h2>
        <div class="container">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="signup">Sign Up</button>
            <p>Already have an account? <a href="index.php">Login</a></p>
        </div>
    </form>
</body>
</html>
