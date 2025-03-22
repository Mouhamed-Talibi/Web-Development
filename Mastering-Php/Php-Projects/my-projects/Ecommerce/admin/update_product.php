<?php
    require_once "include/db.php";
    require_once "include/admin_session.php";
    $alert = '';
    if(isset($_POST['update'])){
        $product_name        = mysqli_real_escape_string($connect, $_POST['name']);
        $product_description = mysqli_real_escape_string($connect, $_POST['description']);
        $price    = mysqli_real_escape_string($connect, $_POST['price']);
        $discount = mysqli_real_escape_string($connect, $_POST['discount']);
        $category = mysqli_real_escape_string($connect, $_POST['category']);
        $id       = mysqli_real_escape_string($connect, $_POST['id']);
        // valid price, discount, category : 
        $valid_id       = filter_var($id, FILTER_VALIDATE_INT);
        $valid_price    = filter_var($price, FILTER_VALIDATE_FLOAT);
        $valid_discount = filter_var($discount, FILTER_VALIDATE_INT);
        $valid_category = filter_var($category, FILTER_VALIDATE_INT);
        // handling the image : 
        $image        = $_FILES['image'];
        $image_name   = $_FILES['image']['name'];
        $image_tmp    = $_FILES['image']['tmp_name'];
        $image_folder = "Products-images/";
        $image_up     = $image_folder . uniqid() . $image_name;
        // if new image uploaded 
        if(!empty($image_name)){
            // moving the image : 
            if(move_uploaded_file($image_tmp, $image_up)){
                // preparing the stmt : 
                $stmt = mysqli_prepare($connect, "UPDATE product SET name=?, description=?, price=?, discount=?, image=?, category_id=? WHERE id=?");
                mysqli_stmt_bind_param($stmt, "ssdisii", $product_name, $product_description, $valid_price, $valid_discount, $image_up, $valid_category, $valid_id);
                if(mysqli_stmt_execute($stmt)){
                    header("Location: products.php");
                    exit();
                }
                else{
                    $alert = "
                    <div class='alert alert-danger' role='alert'>
                    There is A Problem With Updating The Product!!
                    </div>
                    ";
                }
            } else{
                $alert = "
                <div class='alert alert-danger' role='alert'>
                There is A Problem With Updating The Image!!
                </div>
                ";
            }
        } else{
            // No image upload, update everything else but the image
            $stmt = mysqli_prepare($connect, "UPDATE product SET name=?, description=?, price=?, discount=?, category_id=? WHERE id=?");
            mysqli_stmt_bind_param($stmt, "ssdisi", $product_name, $product_description, $valid_price, $valid_discount, $valid_category, $valid_id);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <!-- google font -->
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    <!-- style -->
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/add_product.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Product</title>
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
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <!-- alert erros -->
            <?php if(!empty($alert)){ echo $alert;}?>
            <h3 style="margin-left: 270px">Update Your Product</h3>
            <div class="data">
                <!-- seletind product data :  -->
                <?php
                    $id       = mysqli_real_escape_string($connect, $_GET['id']);
                    $valid_id = filter_var($id, FILTER_VALIDATE_INT);
                    $stmt     = mysqli_prepare($connect, "SELECT * FROM product WHERE id=?");
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    mysqli_stmt_execute($stmt);
                    $result   = mysqli_stmt_get_result($stmt);
                    $product  = mysqli_fetch_assoc($result);
                ?>
                <img src="website-images/product-2.jpeg" alt="add_product-image"><br>
                <input type="hidden" name="id" value="<?= $product['id']?>">
                <label for="p_n">Product Name</label>
                <input type="text" name="name" id="p_n" value="<?= $product['name']?>"><br>
                <label for="p_d">Product Description</label>
                <textarea name="description" id="p_d"><?= $product['description']?></textarea><br>
                <label for="pc">Price</label>
                <input type="text" name="price" id="pc" placeholder="only Numbers Allowed" min="0" value="<?= $product['price']?>"><br>
                <label for="dc">Discount</label>
                <input type="number" name="discount" id="dc" placeholder="only Numbers Allowed" min="0" max="70" value="<?= $product['discount']?>"><br>
                <label for="ct">Category</label>
                <select name="category" id="ct">
                    <!-- selecting the category name -->
                    <?php 
                        $query = mysqli_query($connect, "SELECT category.name AS cat_name, product.category_id FROM category INNER JOIN product ON category.id=product.category_id WHERE product.id='$valid_id'");
                        $category = mysqli_fetch_assoc($query);
                    ?>
                    <option value=""><?= $category['cat_name']?></option>
                    <!-- select All Actegories From category table -->
                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM category");
                        while($category = mysqli_fetch_assoc($query)){
                            ?>
                                <option value="<?= $category['id']?>"><?= $category['name']?></option>
                            <?php
                        }
                    ?>
                </select>
                <div class="submitted">
                    <label for="img" id="image-lab">Update-Product-Image</label>
                    <input type="file" name="image" id="img" hidden>
                    <button type="submit" name="update" id="add">Update-Product</button>
                </div>
            </div>
        </div>
    </form>
    <br><br>
</body>
</html>