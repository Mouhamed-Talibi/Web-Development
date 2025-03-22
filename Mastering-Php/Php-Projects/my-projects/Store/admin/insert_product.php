<?php

    include("config.php");
    $error_message = "";

    // Handling the form:
    if (isset($_POST['insert'])) {
        // Check if fields are not empty:
        if (!empty($_POST['name']) && !empty($_POST['category']) && !empty($_POST['price']) && !empty($_FILES['image']['name'])) {
            // Setting the variables:
            $name     = mysqli_real_escape_string($connect, $_POST['name']);
            $category = mysqli_real_escape_string($connect, $_POST['category']); 
            $price    = mysqli_real_escape_string($connect, $_POST['price']);
            
            // Handling the image:
            $image          = $_FILES['image'];
            $image_name     = $_FILES['image']['name'];
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_folder   = "images/" . $image_name;
            
            // Move the uploaded image to the target folder:
            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                // Preparing the statement:
                $stmt = mysqli_prepare($connect, "INSERT INTO products(name, category, price, image) VALUES(?, ?, ?, ?)");
                mysqli_stmt_bind_param($stmt, "ssss", $name, $category, $price, $image_folder);
                
                if (mysqli_stmt_execute($stmt)) {
                    header("Location: products.php");
                    exit();
                } else {
                    $error_message = "Query Failed: " . mysqli_error($connect);
                }
            } else {
                $error_message = "Failed to upload image.";
            }
        } else {
            $error_message = "Please fill all the fields!";
        }
    }
    if (!empty($error_message)) {
        echo "<b style='color: red; font-size: 20px;'>" . $error_message . "</b>";
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert Product</title>
        <style>
            body {
                font-family: 'SUSE', sans-serif;
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
                width: 400px;
                text-align: center;
            }

            h2 {
                color: #333;
                margin-bottom: 20px;
            }

            .container {
                margin: 0 auto;
                text-align: center;
            }

            img {
                max-width: 100%;
                height: 150px;
                margin-bottom: 20px;
            }

            input[type="text"], select, input[type="file"] {
                width: calc(100% - 22px);
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type="text"]:focus, select:focus {
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
                margin-top: 10px;
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
        <main>
            <h2>Insert Your Product</h2>
            <div class="container">
                <img src="store.png" alt="store-image"><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Product Name" required><br>
                    <select name="category" required>
                        <option value="" disabled selected>Select Category</option>
                        <option value="Books">Books</option>
                        <option value="Phones">Phones</option>
                        <option value="Computers">Computers</option>
                    </select><br>
                    <input type="text" name="price" placeholder="Price" required><br>
                    <label for="img">Upload Image</label>
                    <input type="file" name="image" id="img" required hidden><br><br>
                    <button type="submit" name="insert">Insert Product</button><br>
                    <a href="products.php">See The Available Products</a>
                </form>
            </div>
            <div class="footer">
                <b>Developed By <span>Mouhamed Talibi</span></b>
            </div>
        </main>
    </body>
</html>
