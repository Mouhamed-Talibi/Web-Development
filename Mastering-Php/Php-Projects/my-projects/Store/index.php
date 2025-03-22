<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            body {
                font-family: 'Ubuntu', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
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

            input[type="email"], input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type="email"]:focus, input[type="password"]:focus {
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

            a {
                text-decoration: none;
                color: #007bff;
                display: block;
                margin-top: 10px;
            }

            a:hover {
                color: #0056b3;
            }

            span {
                color: #007bff;
            }

            p {
                font-size: 14px;
                color: #555;
                margin-top: 10px;
            }

            .footer {
                font-size: 14px;
                color: #777;
                text-align: center;
                margin-top: 20px;
            }
        </style>
    </head>

    <body>
        <main>
            <form action="login.php" method="post">
                <label for="em">Email</label>
                <input type="email" name="email" id="em" required><br>
                <label for="ps">Password</label>
                <input type="password" name="password" id="ps" required><br>
                <button type="submit" name="login">Login</button>
                <a href="signup.php">Sign Up</a>
                <p>You Don't Have an Account? Click On <span>Sign Up.</span></p>
            </form>
        </main>
        <div class="footer">
            Developed By <span>Mouhamed Talibi</span>
        </div>
    </body>
</html>
