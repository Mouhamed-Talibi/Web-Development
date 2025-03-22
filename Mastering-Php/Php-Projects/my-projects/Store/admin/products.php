<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body {
            font-family: 'SUSE', sans-serif;
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        h3 {
            margin-bottom: 20px;
            font-weight: 700;
            color: #343a40;
        }

        .category-section {
            margin-bottom: 40px;
        }

        .category-section nav {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 15px;
            padding: 2px;
            border-radius: 8px;
            background-color: #007bff; /* Background color */
            color: #ffffff; /* Text color */
            text-align: center;
        }

        .card {
            border: none;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 12rem; 
            margin: 2px; 
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 180px; 
            object-fit: cover; 
            display: block;
        }

        .card-body {
            padding: 10px; 
        }

        .card-title {
            font-size: 16px;
            font-weight: 600;
            color: #343a40;
        }

        .card-text {
            font-size: 14px;
            color: #6c757d;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 2px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <h3>The Available Products</h3>
        </center>

        <!-- Books Section -->
        <div class="category-section">
            <nav>Category: Books</nav>
            <div class="row">
                <?php
                    include("config.php");
                    $category = "Books";
                    $stmt = mysqli_prepare($connect, "SELECT * FROM products WHERE category=?");
                    mysqli_stmt_bind_param($stmt, "s", $category);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            echo <<<HTMLCODE
                                <div class="col-md-2"> <!-- Adjusted column width -->
                                    <div class="card">
                                        <img src="{$row['image']}" class="card-img-top" alt="{$row['name']}">
                                        <div class="card-body">
                                            <h5 class="card-title">{$row['name']}</h5>
                                            <p class="card-text">{$row['price']}</p>
                                            <a href="validate.php?id=$row[id]" class="btn btn-success">Get Product</a>
                                        </div>
                                    </div>
                                </div>
                            HTMLCODE;
                        }
                    } else {
                        echo "<p>No products available in this category.</p>";
                    }
                ?>
            </div>
        </div>

        <!-- Phones Section -->
        <div class="category-section">
            <nav>Category: Phones</nav>
            <div class="row">
                <?php
                    include("config.php");
                    $category = "Phones";
                    $stmt = mysqli_prepare($connect, "SELECT * FROM products WHERE category=?");
                    mysqli_stmt_bind_param($stmt, "s", $category);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            echo <<<HTMLCODE
                                <div class="col-md-2"> <!-- Adjusted column width -->
                                    <div class="card">
                                        <img src="{$row['image']}" class="card-img-top" alt="{$row['name']}">
                                        <div class="card-body">
                                            <h5 class="card-title">{$row['name']}</h5>
                                            <p class="card-text">{$row['price']}</p>
                                            <a href="validate.php?id=$row[id]" class="btn btn-success">Get Product</a>
                                        </div>
                                    </div>
                                </div>
                            HTMLCODE;
                        }
                    } else {
                        echo "<p>No products available in this category.</p>";
                    }
                ?>
            </div>
        </div>

        <!-- Computers Section -->
        <div class="category-section">
            <nav>Category: Computers</nav>
            <div class="row">
                <?php
                    include("config.php");
                    $category = "Computers";
                    $stmt = mysqli_prepare($connect, "SELECT * FROM products WHERE category=?");
                    mysqli_stmt_bind_param($stmt, "s", $category);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                            echo <<<HTMLCODE
                                <div class="col-md-2"> <!-- Adjusted column width -->
                                    <div class="card">
                                        <img src="{$row['image']}" class="card-img-top" alt="{$row['name']}">
                                        <div class="card-body">
                                            <h5 class="card-title">{$row['name']}</h5>
                                            <p class="card-text">{$row['price']}</p>
                                            <a href="validate.php?id=$row[id]" class="btn btn-success">Get Product</a>
                                        </div>
                                    </div>
                                </div>
                            HTMLCODE;
                        }
                    } else {
                        echo "<p>No products available in this category.</p>";
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-2c5hUjrxH+K7c2gbk5TpT3Wq5Y6n1F5FV5V8I4+8+TqLgu0K4h6pP8cG61Ck0DlZ" crossorigin="anonymous"></script>
</body>
</html>
