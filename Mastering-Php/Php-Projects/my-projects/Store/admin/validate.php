<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validate Getting Product</title>
        <style>
            body {
                font-family: 'SUSE', sans-serif;
                background-color: #f8f9fa;
                padding: 20px;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            table {
                width: 100%;
                margin-bottom: 20px;
            }

            th, td {
                padding: 10px;
                text-align: left;
            }

            thead th {
                background-color: #6c757d; /* Grey background for the header */
                color: lightcoral; /* White text color */
            }

            td {
                border-bottom: 1px solid #ddd;
            }

            button {
                background-color: #28a745;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            button:hover {
                background-color: #218838;
            }

            a {
                text-decoration: none;
                color: #007bff;
                font-size: 16px;
            }

            a:hover {
                text-decoration: underline;
            }

            .alert {
                color: #dc3545;
                font-size: 16px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <?php
                include("config.php");
                // preparing the statement : 
                $id     = $_GET['id'];
                $stmt   = mysqli_prepare($connect, "SELECT * FROM products WHERE id=?");
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row    = mysqli_fetch_assoc($result);
            ?>
            <h4 class="text-center">Are you sure you want to get this product?</h4>
            <form action="my_shops.php" method="post">
                <!-- hidden inputs to send product data -->
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
                <input type="hidden" name="price" value="<?php echo htmlspecialchars($row['price']); ?>">
                <!-- Table to validate the user request -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['category']); ?></td>
                            <td><?php echo htmlspecialchars($row['price']); ?></td>
                            <td><input type="number" name="quantity" required min="1" value="1"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <button type="submit" name="add">Yes, Get Product</button><br><br>
                    <a href="products.php">Return to Products Page</a>
                </div>
            </form>
        </div>
    </body>
</html>
