<?php
    require "include/user_session.php";
    require "../admin/include/db.php";
    $query = mysqli_query($connect, "SELECT * FROM product WHERE category_id=2");
    if(isset($_POST['get'])){
        $order_name  = $product['name'];
        $order_price = $product['price'];
        $user_id     = $_SESSION['user_id'];
        // selecting orders from the table : 
        $query = mysqli_prepare($connect, "SELECT * FROM orders WHERE name=? AND user_id=?");
        mysqli_stmt_bind_param($query, "si", $order_name, $user_id);
        mysqli_stmt_execute($query);
        $result = mysqli_stmt_get_result($query);
        if(mysqli_num_rows($result) === 0){
            // insert the order to orders table : 
            $stmt = mysqli_prepare($connect, "INSERT INTO orders(name, price, user_id) VALUES(?,?,?)");
            mysqli_stmt_bind_param($stmt, "sdi", $order_name, $order_price, $user_id);
            if(mysqli_stmt_execute($stmt)){
                $alert = '
                <div class="alert alert-info" role="alert">
                    Order Added Successfully — check it out!
                </div>
                ';
            }
            else{
                $alert = '
                <div class="alert alert-info" role="alert">
                    Order Not Added — Try Again!
                </div>
                ';
            }
        }
        else{
            $alert = '
                <div class="alert alert-danger" role="alert">
                    Order Already In Your Orders List!
                </div>
            ';
        }
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
    <link rel="stylesheet" href="style/products.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computers</title>
</head>
<body>
    <nav>
        <ul>
            <p>Category : <b>Computers</b></p>
            <a href="categories.php" id="home">Home</a>
            <li>
                <a href="orders.php" class="btn btn-info">Your Orders</a>
            </li>
            <li><a href="logout.php" class="logout-btn">Logout</a></li>
        </ul>
    </nav>
    <aside>
        <b>List Of Categories</b>
        <br><br><br>
        <?php
            $query_category = mysqli_query($connect, "SELECT * FROM category");
            while($category = mysqli_fetch_assoc($query_category)){
                ?>
                    <ul>
                        <li>
                            <a href="products.php?id=<?= $category['id']?>">
                                <i class="<?= $category['icon']?>"></i> <?= $category['name']?> 
                            </a>
                        </li>
                    </ul>
                <?php
            }
        ?>
    </aside>
    <main>
        <form action="" method="post">
            <div class="container">
                <!-- select all books -->
            <?php
                while($product = mysqli_fetch_assoc($query)){
                    ?>
                        <div class="card">
                            <img src="../admin/<?= $product['image']?>" class="card-img-top" alt="<?= $product['name']?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product['name']?></h5>
                                <h6 class="card-text" style="color: grey"><?= $product['price']?> Mad</h6>
                                <a href="details.php?id=<?= $product['id']?>">More Details</a><br>
                                <a href="validate_order.php?id=<?= $product['id']?>" class="btn btn-primary">Add To Your Orders</a>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </form>
    </main>
</body>
</html>
