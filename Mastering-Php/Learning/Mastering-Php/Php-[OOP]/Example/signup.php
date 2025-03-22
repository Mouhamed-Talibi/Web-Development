<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Signup</title>
            <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f4f7f8;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container {
                background-color: white;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                width: 100%;
                max-width: 400px;
            }

            label {
                font-size: 16px;
                font-weight: 600;
                color: #333;
                margin-bottom: 5px;
                display: block;
            }

            input {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 14px;
            }

            button {
                width: 100%;
                padding: 10px;
                background-color: #28a745;
                color: white;
                font-size: 16px;
                font-weight: bold;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            button:hover {
                background-color: #218838;
            }
        </style>
        </head>
        <body>
            <?php  
                if(isset($_POST['signup'])){
                    spl_autoload_register(function($class){
                        require $class . ".class.php";
                    });
                    $user = new Database("localhost", "root", "", "classes_training");
                    // setting the vars
                    $username = mysqli_real_escape_string($user->getConnection(), $_POST['username']);
                    $email    = mysqli_real_escape_string($user->getConnection(), $_POST['email']);
                    $password = mysqli_real_escape_string($user->getConnection(), $_POST['password']);
                    $user->insert($username, $email, $password);
                }
            ?>
            <form action="" method="post">
                <div class="container">
                    <label for="us">Username</label>
                    <input type="text" name="username" id="us"><br>
                    <label for="em">Email</label>
                    <input type="email" name="email" id="em"><br>
                    <label for="ps">Password</label>
                    <input type="password" name="password" id="ps"><br>
                    <button type="submit" name="signup">Sign Up</button>
                </div>
            </form>
        </body>
    </html>