<?php
    require "include/user_session.php";
    require "../admin/include/db.php";

    // get the id : 
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    $valid_id = filter_var($id, FILTER_VALIDATE_INT);
    if($valid_id){
        // select product data : 
        $stmt = mysqli_prepare($connect, "SELECT * FROM product WHERE id=?");
        mysqli_stmt_bind_param($stmt, "i", $valid_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $product = mysqli_fetch_assoc($result);
    }
    // add order : 
    $alert = '';
    if(isset($_POST['add'])){
        $order_name = $product['name'];
        $order_price = $product['price'];
        $user_id = $_SESSION['user_id'];
        $quantity = mysqli_real_escape_string($connect, $_POST['quantity']);
        $valid_quantity = filter_var($quantity, FILTER_VALIDATE_INT);
        // select all orders : 
        $query = mysqli_prepare($connect, "SELECT * FROM orders WHERE name=? AND user_id=?");
        mysqli_stmt_bind_param($query, "si", $order_name, $user_id);
        mysqli_stmt_execute($query);
        $res = mysqli_stmt_get_result($query);
        if(mysqli_num_rows($res) === 0){
            $inserted_stmt = mysqli_prepare($connect, "INSERT INTO orders(name, price, quantity, user_id) VALUES(?,?,?,?)");
            mysqli_stmt_bind_param($inserted_stmt, "sdii", $order_name, $order_price, $valid_quantity, $user_id);
            if(mysqli_stmt_execute($inserted_stmt)){
                $alert = '
                    <div class="alert alert-success" role="alert">
                        Order Added Successfully — check it out!
                    </div>
                ';
            }else{
                $alert = '
                    <div class="alert alert-info" role="alert">
                        Failed To Add Order!
                    </div>
                ';
            }
        }else{
            $alert = '
                <div class="alert alert-warning" role="alert">
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
    <link rel="stylesheet" href="style/details.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/validate.css">
    <title>Validate-Order</title>
</head>
<body>
    <!-- alert message -->
    <?php if(!empty($alert)) { echo $alert;} ?>
    <form action="" method="post">
        <table class="tbl">
            <thead>
                <tr>
                    <th>Product-name</th>
                    <th>Product-Price</th>
                    <th>Product-Quantity</th>
                </tr>
            </thead>
            <tbody>
                <!-- product info -->
                            <tr>
                                <td><?php echo $product['name']?></td>
                                <td><?php echo $product['price']?> Mad</td>
                                <td><input type="number" name="quantity" id="" min="1" max="20" style="padding: 10px"></td>
                            </tr>
            </tbody>
        </table>
        <button type="submit" name="add">Add To Your Orders</button>
    </form>
</body>
</html>