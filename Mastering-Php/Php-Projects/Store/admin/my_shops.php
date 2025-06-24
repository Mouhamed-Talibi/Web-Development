<?php
    include("config.php");

    // Check if the form is submitted
    if (isset($_POST['add'])) {
        // Retrieve and sanitize input data
        $name     = mysqli_real_escape_string($connect, $_POST['name']);
        $price    = mysqli_real_escape_string($connect, $_POST['price']);
        $quantity = mysqli_real_escape_string($connect, $_POST['quantity']);
        
        // Remove non-numeric characters (e.g., '$') from price
        $price = preg_replace('/[^0-9.]/', '', $price);
        
        // Calculate total price
        $total_price = $price * $quantity;
        
        // Prepare and execute the SQL statement
        $stmt = mysqli_prepare($connect, "INSERT INTO my_shops(name, price, quantity, total_price) VALUES(?, ?, ?, ?);");
        mysqli_stmt_bind_param($stmt, "ssis", $name, $price, $quantity, $total_price);
        if(mysqli_stmt_execute($stmt)){
            header("Location: my_shops.php");
            exit();
        };
    }
?>

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
    <title>My Shops</title>
    <style>
    body {
        font-family: 'SUSE', sans-serif;
        background-color: #f8f9fa;
        padding: 20px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    thead th {
        background-color: #007bff; /* Blue background for the header */
        color: lightcoral; /* White text color */
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2; /* Light grey background for even rows */
    }

    tbody tr:hover {
        background-color: #e9ecef; /* Light hover effect */
    }

    h2 {
        margin-bottom: 20px;
    }

    .del {
        text-decoration: none;
        background-color: #dc3545; /* Red background color */
        color: #fff; /* White text color */
        padding: 8px 16px; /* Padding for the button */
        border-radius: 4px; /* Rounded corners */
        display: inline-block; /* Makes the link look like a button */
        font-size: 14px; /* Adjust font size */
        text-align: center; /* Center text inside the button */
        transition: background-color 0.3s; /* Smooth transition for hover effect */
    }

    .del:hover {
        background-color: #c82333; /* Darker red when hovering */
    }

    .del:active {
        background-color: #bd2130; /* Even darker red when clicked */
    }

    .payement {
        text-decoration: none;
        background-color: #007bff; /* Blue background color */
        color: #fff; /* White text color */
        padding: 8px 16px; /* Padding for the button */
        border-radius: 4px; /* Rounded corners */
        display: inline-block; /* Makes the link look like a button */
        font-size: 14px; /* Adjust font size */
        text-align: center; /* Center text inside the button */
        transition: background-color 0.3s, transform 0.2s; /* Smooth transition for hover and active effects */
    }

    .payement:hover {
        background-color: #0056b3; /* Darker blue when hovering */
        transform: scale(1.05); /* Slightly enlarges the button on hover */
    }

    .payement:active {
        background-color: #004085; /* Even darker blue when clicked */
        transform: scale(0.95); /* Slightly shrinks the button on click */
    }
    </style>
</head>
<body>
    <?php
        include("config.php");
        // Select data from my_shops table
        $stmt = mysqli_prepare($connect, "SELECT id,name, quantity, price, total_price FROM my_shops");
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    ?>

    <div class="container">
        <h2 class="text-center">Your Shops Information</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['quantity']); ?></td>
                        <td><?php echo htmlspecialchars($row['price']) . "$"; ?></td>
                        <td><?php echo htmlspecialchars($row['total_price']) . "$"; ?></td>
                        <td>
                            <a href="delete_shop.php?id=<?php echo $row['id']?>" name="delete_shop" class="del">Delete</a>
                            <a href="#" name="pay_ticket.php" class="payement">Pay Ticket</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <div class="text-center">
            <a href="products.php" class="btn btn-primary">Return to Products Page</a>
        </div>
    </div>
</body>
</html>