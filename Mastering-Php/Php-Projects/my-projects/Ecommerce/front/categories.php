<?php
    require "../admin/include/db.php";
    require "include/user_session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- style -->
    <link rel="stylesheet" href="style/categories.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy-Shoping</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <nav>
            <ul>
                <li><a href="#">About-Us</a></li>
                <li><a href="#">Contact-Us</a></li>
                <li><a href="#">Tools</a></li>
                <li><a href="orders.php" class="btn btn-info">Your Orders</a></li>
                <li><a href="logout.php" class="logout-btn">Logout</a></li>
            </ul>
        </nav>
        <aside>
            <b>List Of Catgeories</b>
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
            <p id="define">Below There are Some Of Our Products</p>
            <div class="category_1">
                <b>Books</b>
                <div class="products">
                    <!-- selecting some books -->
                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM product WHERE category_id=1 LIMIT 2");
                        while($product = mysqli_fetch_assoc($query)){
                            ?>
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                        <img src="../admin/<?= $product['image']?>" class="img-fluid rounded-start" alt="<?= $product['name']?>">
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $product['name']?></h5>
                                            <p class="card-text"><?= $product['description']?></p>
                                            <p class="card-text"><small class="text-body-secondary">Created At : <?= $product['creation_date']?></small></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                    <br>
                </div>
                You Can Find More Products :
                <a href="books.php">Here</a>
            </div>
            <div class="category_2">
                <b>Computers</b>
                <div class="products">
                    <!-- selecting some books -->
                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM product WHERE category_id=2 LIMIT 2");
                        while($product = mysqli_fetch_assoc($query)){
                            ?>
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                        <img src="../admin/<?= $product['image']?>" class="img-fluid rounded-start" alt="<?= $product['name']?>">
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $product['name']?></h5>
                                            <p class="card-text"><?= $product['description']?></p>
                                            <p class="card-text"><small class="text-body-secondary">Created At : <?= $product['creation_date']?></small></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                    <br>
                </div>
                You Can Find More Products :
                <a href="computers.php">Here</a>
            </div>
            <div class="category_3">
                <b>Fruits</b>
                <div class="products">
                    <!-- selecting some books -->
                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM product WHERE category_id=3 LIMIT 2");
                        while($product = mysqli_fetch_assoc($query)){
                            ?>
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                        <img src="../admin/<?= $product['image']?>" class="img-fluid rounded-start" alt="<?= $product['name']?>">
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $product['name']?></h5>
                                            <p class="card-text"><?= $product['description']?></p>
                                            <p class="card-text"><small class="text-body-secondary">Created At : <?= $product['creation_date']?></small></p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                    <br>
                </div>
                You Can Find More Products :
                <a href="fruits.php">Here</a>
            </div>
        </main>
    </form>
    <footer>
        Developed By <span>Mouhamed Talibi</span>
        <br>
        Follow Us On :
        <a href="">Our-Instagram</a>
        <a href="">Our-Github</a>
    </footer>
</body>
</html>