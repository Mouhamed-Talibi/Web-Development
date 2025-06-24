<?php 
    require_once "include/admin_session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    <!-- style -->
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/products.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Products</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="add_category.php">Add-category</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="categories.php">List-Of-categories</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="add_product.php">Add-Product</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="products.php">List-Of-Products</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="users.php">All-Users</a>
                    </li>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item" id="logout">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h4>All Website Products</h4>
        <a href="add_product.php" class="btn btn-success">Add Your Product</a>
    </div>
    
    <div class="container">
        <table id="tbl" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product-Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Image</th>
                    <th>Category-ID</th>
                    <th>Creation-Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- selecting all products -->
                <?php
                    require_once "include/db.php";
                    $query = mysqli_query($connect, "SELECT * FROM product");
                    $all_products = 0;
                    while($product = mysqli_fetch_assoc($query)){
                        ?>
                            <tr>
                                <td><?= $product['id']?></td>
                                <td><?= $product['name']?></td>
                                <td><?= $product['description']?></td>
                                <td><?= $product['price']?> MAD</td>
                                <td><?= $product['discount']?> %</td>
                                <td><img src="<?= $product['image']?>" alt="<?= $product['name']?>" width="60"></td>
                                <td><?= $product['category_id']?></td>
                                <td><?= $product['creation_date']?></td>
                                <td>
                                    <a href="update_product.php?id=<?= $product['id']?>" class="btn btn-primary" id="modif">Modify</a>
                                    <a href="delete_product.php?id=<?= $product['id']?>" class="btn btn-danger" id="del" onclick="return confirm('Are You Sure You Want To Delete This Product?')">Delete</a>
                                </td>
                            </tr>
                        <?php
                        $all_products += 1;
                    }
                ?>
            </tbody>
            <tfoot>
                <td colspan="9">The Number Of All Products Is: <span><?= $all_products;?></span></td>
            </tfoot>
        </table>
    </div>
</body>
</html>
