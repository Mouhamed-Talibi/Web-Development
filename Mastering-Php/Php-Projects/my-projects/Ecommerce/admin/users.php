<?php 
    require_once "include/admin_session.php";
    require_once "include/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="style/users.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Users</title>
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
        <h3>All Users</h3>
        <table class="tbl">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $query = mysqli_query($connect, "SELECT * FROM users");
                    $all_users = 0;
                    while($user = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td data-label="Id"><?= $user['id']?></td>
                    <td data-label="First Name"><?= $user['first_name']?></td>
                    <td data-label="Last Name"><?= $user['last_name']?></td>
                    <td data-label="Email"><?= $user['email']?></td>
                    <td data-label="Registration Date"><?= $user['registration']?></td>
                    <td>
                        <a href="deleteUser.php?id=<?= $user['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
