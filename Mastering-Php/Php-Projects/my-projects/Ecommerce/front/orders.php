<?php
    require "include/user_session.php";
    require "../admin/include/db.php";
    $user_id = $_SESSION['user_id'];
    $query = mysqli_query($connect, "SELECT * FROM orders WHERE user_id=$user_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- style -->
    <link rel="stylesheet" href="style/orders.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <div class="container">
        <table class="tbl">
            <thead>
                <tr>
                    <th>Order-Name</th>
                    <th>Order-Price</th>
                    <th>Order-Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                    while($orders = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td id="name"><?= $orders['name']?></td>
                            <td><?= $orders['price']?> Mad</td>
                            <td><?= $orders['quantity']?></td>
                            <td>
                                <?php
                                    $price = $orders['price'];
                                    $quantity = $orders['quantity'];
                                    $total = $price * $quantity;
                                    echo $total . " Mad";
                                ?>
                            </td>
                            <td>
                                <a href="delete_order.php?id=<?= $orders['id']?>" onclick="return confirm('Are You Sure That You Want To Delete This Orders?')" class="btn btn-danger">Delete</a>
                                <a href="#" class="btn btn-primary">Pay-Ticket</a>
                            </td>
                        </tr>
                        <?php
                        $total_price += $total;
                    }
                ?>
            </tbody>
            <tfoot>
                <td colspan="4">Total Price</td>
                <td>
                    <?= $total_price . " Mad";?>
                </td>
            </tfoot>
        </table>
        <a href="categories.php" class="btn btn-secondary">Return To Home Page</a>
        <a href="#" class="btn btn-success">Pay All</a>
    </div>
</body>
</html>
