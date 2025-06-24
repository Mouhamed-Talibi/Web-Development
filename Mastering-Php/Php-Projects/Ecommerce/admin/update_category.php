<?php
    require_once "include/db.php";
    require_once "include/admin_session.php";
    $alert = "";
    if(isset($_POST['update'])){
        if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['icon'])){
            $category_name = mysqli_real_escape_string($connect, $_POST['name']);
            $description   = mysqli_real_escape_string($connect, $_POST['description']);
            $icon          = mysqli_real_escape_string($connect, $_POST['icon']);
            $id            = filter_var($_GET['id'], FILTER_VALIDATE_INT);
            // preparing the stmt : 
            $stmt = mysqli_prepare($connect, "UPDATE category SET name=?, icon=?, description=? WHERE id=?");
            mysqli_stmt_bind_param($stmt, "sssi", $category_name, $icon, $description, $id);
            if(mysqli_stmt_execute($stmt)){
                header("Location: categories.php");
                exit();
            }
            else{
                $alert = "
                    <div class='alert alert-danger' role='alert'>
                        There Is A Problem With Updating The Category!!
                    </div>
                ";
            }
        }
        else{
            $alert = "
                <div class='alert alert-danger' role='alert'>
                    Empty Category Name Or Description!!
                </div>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Category</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/add_category.css">
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
        <h3>Modify Category</h3><br>
        <!-- alert message -->
        <?php if(!empty($alert)){echo $alert;}?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="data-container">
                <div class="image-section">
                    <img src="website-images/category-2.jpeg" alt="category-img">
                </div>
                <div class="form-section">
                    <!-- selecting the data of the current category -->
                    <?php
                        $id = $_GET['id'];
                        $stmt = mysqli_prepare($connect , "SELECT * FROM category WHERE id=?");
                        mysqli_stmt_bind_param($stmt, "i", $id);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $category = mysqli_fetch_assoc($result);
                    ?>
                    <label for="cat">Category Name</label>
                    <input type="text" name="name" placeholder="Write Your Category Name" id="cat" value="<?= $category['name']?>" required><br>
                    <label for="icon">Icon</label>
                    <input type="text" name="icon" placeholder="Write Your icon code" id="icon" value="<?= $category['icon']?>" required><br>
                    <label for="des">Description</label>
                    <textarea name="description" id="des" placeholder="Write Your Category Description" required><?= $category['description']?></textarea><br>
                    <button type="submit" name="update">Update Category</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
