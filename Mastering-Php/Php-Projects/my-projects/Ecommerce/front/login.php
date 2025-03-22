<?php
    session_start();
    $alert = "";
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

    require_once '../admin/include/db.php';
    if (isset($_POST['login'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $password = $_POST['password']; // Get the plain text password
            // Validate email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Check if the email exists in the database
                $stmt = mysqli_prepare($connect, "SELECT * FROM users WHERE email=?");
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $user = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) === 1) {
                    // Verify the password
                    if (password_verify($password, $user['password'])) {
                        $_SESSION['user_id'] = $user['id'];
                        header("Location: categories.php");
                        exit();
                    } 
                    else {
                        $_SESSION['attempts']++;
                        $alert = "<div class='alert alert-danger' role='alert'> Incorrect Password !! </div>";
                    }
                } 
                else {
                    $alert = "<div class='alert alert-danger' role='alert'> Email Not Exists !! </div>";
                }
            } 
            else {
                $alert = "<div class='alert alert-danger' role='alert'> Use A Valid Email !! </div>";
            }
        } 
        else {
            $alert = "<div class='alert alert-danger' role='alert'> Required Email And Password !! </div>";
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
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <!-- alert message -->
            <?php if(!empty($alert)){ echo $alert; }?>
            <div class="present">
                <h3>Login</h3>
            </div>
            <div class="info">
                <img src="../front_images/login_image-removebg-preview.png" alt="login_image">
                <label for="em">Email</label>
                <input type="email" name="email" id="em"><br>
                <label for="ps">Password</label>
                <input type="password" name="password" id="ps">
                <!-- submit the form -->
                <button type="submit" name="login">Login</button><br>
                <p>Don't Have Account?</p>
                <a href="signup.php" id="sign">Sign-Up</a>
            </div>
        </div>
    </form>
    <br><br><br><br><br>
</body>
</html> 