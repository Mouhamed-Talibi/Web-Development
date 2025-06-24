<?php
    require_once "include/admin_session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    <!-- style -->
    <link rel="stylesheet" href="style/categories.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <!-- code njs -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-Categories</title>
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
    <center><h2>Here Are All The Categories</h2></center>
    <br>
    <h5>Add A Catgerory : <a href="add_category.php">Add-Category</a></h5>
    <table class="tbl">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category-Name</th>
                <th>Icon</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <!-- select all the categories from the categiry table -->
                <?php
                    require_once "include/db.php";
                    $query = mysqli_query($connect, "SELECT * FROM category");
                    $sum_categories = 0;
                    while($category = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?= $category['id']?></td>
                            <td><?= $category['name']?></td>
                            <td><i class="<?= $category['icon']?>"></i></td>
                            <td><?= $category['description']?></td>
                            <td>
                                <a href="update_category.php?id=<?= $category['id']?>" id="update">Update</a>
                                <a href="delete_category.php?id=<?= $category['id']?>" id="delete" onclick="return confirm('Are You Sure You Want To Delete This Category?')">Delete</a>
                            </td>
                        </tr>
                        <?php
                    $sum_categories += 1;
                    }
                ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5"><center>The Number Of Categories Is : <?= $sum_categories?></center></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>