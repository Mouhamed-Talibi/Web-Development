<?php
    require "include/user_session.php";
    require "../admin/include/db.php";
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
    <title>Books</title>
</head>
<body>
    <nav>
        <ul>
            <p>Category : <b>Books</b></p>
            <a href="categories.php">Home</a>
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
            $query = mysqli_query($connect, "SELECT * FROM category");
            while($category = mysqli_fetch_assoc($query)){
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
                $query_product = mysqli_query($connect, "SELECT * FROM product WHERE category_id=1");
                while($product = mysqli_fetch_assoc($query_product)){
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
