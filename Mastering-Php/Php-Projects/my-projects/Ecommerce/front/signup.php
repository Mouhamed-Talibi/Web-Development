<?php
    // rate limiting the attempts :
    session_start();
    $alert = "";
    $max_attempts = 5;  // Maximum number of attempts allowed
    $lockout_time = 15 * 60; // Lockout time in seconds (15 minutes)
    $ip_address = $_SERVER['REMOTE_ADDR']; // Get the user's IP address
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
            $alert = "
                <div class='alert alert-danger' role='alert'>
                    Too many attempts. Please try again after $minutes_remaining minute(s).
                </div>
            ";
        } else {
            // Reset attempts after the lockout period
            $_SESSION['attempts'] = 0;
            $_SESSION['last_attempt_time'] = time();
        }
    }

    require_once "../admin/include/db.php";
    $alert = "";
    if(isset($_POST['create'])){
        if(!empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['email']) && !empty($_POST['password'])){
            $f_name   = mysqli_real_escape_string($connect, $_POST['f_name']);
            $l_name   = mysqli_real_escape_string($connect, $_POST['l_name']);
            $email    = mysqli_real_escape_string($connect, $_POST['email']);
            $password = mysqli_real_escape_string($connect, $_POST['password']);
            // valid email : 
            $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if($valid_email){
                // checking if the email doesn't exists : 
                $stmt = mysqli_prepare($connect, "SELECT email FROM users WHERE email=?");
                mysqli_stmt_bind_param($stmt, "s", $valid_email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $emails = mysqli_fetch_array($result);
                if(mysqli_num_rows($result) === 0){
                    if(strlen($password) >= 8 && preg_match('/[A-Z]/', $password) && preg_match('/\d/', $password)){
                        // insert the data : 
                        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
                        $stmt = mysqli_prepare($connect, "INSERT INTO users(first_name, last_name, email, password) VALUES(?,?,?,?);");
                        mysqli_stmt_bind_param($stmt, "ssss", $f_name, $l_name, $valid_email, $hashed_pass);
                        if(mysqli_stmt_execute($stmt)){
                            header("Location: login.php");
                            exit();
                        } 
                        else{
                            $alert = "
                                <div style='margin-top: 10px;' class='alert alert-danger' role='alert'>
                                    Cannot Create Account!
                                </div>
                            ";
                        }
                    }
                    else{
                        $alert = "
                            <div style='margin-top: 10px;' class='alert alert-danger' role='alert'>
                                Password must be at least 8 characters long, contain at least one uppercase letter, and one number.
                            </div>
                        ";
                    }
                }
                else{
                    $alert = "
                        <div style='margin-top: 10px;' class='alert alert-danger' role='alert'>
                            Cannot Create Account, Please Try Again!
                        </div>
                    ";
                }
            }
            else{
                $alert = "
                    <div style='margin-top: 10px;' class='alert alert-danger' role='alert'>
                        Use A Valid Email!
                    </div>
                ";
            }
        }
        else{
            $alert = "
                <div style='margin-top: 10px;' class='alert alert-danger' role='alert'>
                    Empty First Name, Last Name, Email Or Password!
                </div>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- style -->
    <link rel="stylesheet" href="style/signup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <!-- alert message -->
            <?php if(!empty($alert)){ echo $alert;}?>
            <h3>Create Your Account</h3>
            <img src="../front_images/login_image-removebg-preview.png" alt="login_image">
            <br>
            <label for="fn">First Name <i class="fa-regular fa-user"></i></label>
            <input type="text" name="f_name" id="fn"><br>
            <label for="ln">Last Name <i class="fa-regular fa-user"></i></label>
            <input type="text" name="l_name" id="l_n"><br>
            <label for="em">Email <i class="fa-solid fa-envelope"></i></label>
            <input type="email" name="email" id="em">
            <label for="ps">Password <i class="fa-solid fa-lock"></i></label>
            <input type="password" name="password" id="ps"><br>
            <!-- submit the form -->
            <button type="submit" name="create">Create Account</button>
            Already Have Account ? <a href="login.php">Login</a>
        </div>
    </form>
</body>
</html>