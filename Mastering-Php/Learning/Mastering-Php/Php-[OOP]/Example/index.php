<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            margin: 20px;
            box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid lightgray;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: lightcoral;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #d64545;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: lightcoral;
            text-decoration: none;
        }

        a:hover {
            color: darkred;
        }

        center {
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }

        span {
            color: lightcoral;
            font-weight: bold;
        }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <div class="container">
                <input type="email" name="email">
                <br>
                <input type="password" name="password">
                <br>
                <button type="submit" name="login">Login</button>
                <br><br>
                <a href="signup.php">Sign Up</a>
                <br><br>
                <center>
                    If You Don't Have Account <span>Sign Up</span> From The Link.
                </center>
            </div>
        </form>
    </body>
</html>