<?php
    require "../admin/include/db.php";
    require "include/user_session.php";
    $alert = "";
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    $valid_id = filter_var($id, FILTER_VALIDATE_INT);
    if($valid_id){
        // select all product data : 
        $stmt = mysqli_prepare($connect, "SELECT * FROM product WHERE id=?");
        mysqli_stmt_bind_param($stmt, "i", $valid_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $product = mysqli_fetch_assoc($result);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- style -->
    <link rel="stylesheet" href="style/details.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product["name"]?> - Details</title>
</head>
<body>
    <nav>
        <ul>
            <p>Product : <b><?= $product["name"]?></b></p>
            <a href="categories.php" id="home">Home</a>
            <li><a href="orders.php" id="orders">Orders</a></li>
            <li><a href="logout.php" class="btn btn-danger logout-btn">Logout</a></li>
        </ul>
    </nav>
    <main>
        <form action="" method="post">
            <!-- alert message -->
            <?php if(!empty($alert)){ echo $alert;}?>
            <div class="container">
                <div class="product-image">
                    <img src="../admin/<?= $product["image"]?>" alt="Image of <?= $product["name"]?>" width="300px" height="200px"><br>
                </div>
                <div class="details">
                    <p><strong>Product Name:</strong> <?= $product["name"]?></p>
                    <p><strong>Description:</strong> <?= $product["description"]?></p>
                    <p><strong>Price:</strong> 
                        <?php
                            $price = $product["price"];
                            $discount = $product["discount"];
                            $total_price = $price - (($price * $discount)/100);
                            if($discount != 0){
                                echo $total_price;
                            } else{
                                echo $price;
                            }
                        ?> 
                        MAD
                    </p>
                    <a href="validate_order.php?id=<?= $product['id']?>" class="btn btn-primary">Add To Your Orders</a>
                </div>
            </div>
        </form>
        <div class="access">
            <a href="orders.php">Check Your Orders</a>
            <a href="categories.php">Return To Home Page</a>
        </div>
    </main>
</body>
</html>
