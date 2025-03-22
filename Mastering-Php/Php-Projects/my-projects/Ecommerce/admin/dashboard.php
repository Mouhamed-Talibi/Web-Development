<?php
    require_once "include/admin_session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <!-- google font -->
    <!-- style -->
    <link rel="stylesheet" href="style/dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
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
    <!-- messages for the Admin :  -->
    <?php
        require_once "include/db.php";
        $stmt = mysqli_prepare($connect, "SELECT * FROM admin WHERE email=?");
        mysqli_stmt_bind_param($stmt, "s", $_SESSION['admin_email']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) == 1){
            $admin = mysqli_fetch_assoc($result);
            ?>
                <center>
                    <h2>Hello <?php echo $admin['full_name']?>, Happy To See You.</h2>
                </center>
            <?php
        }
    ?>
</body>
</html>