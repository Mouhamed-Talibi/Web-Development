<?php
// Set headers to allow CORS and specify content type as JSON
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Connect to the database
$connect = mysqli_connect("localhost", "root", "", "rest_api");

// Get the request method
$method = $_SERVER['REQUEST_METHOD'];

// Handle different request methods
switch ($method) {
    case 'GET':
        // If an ID is provided, fetch a specific product, else fetch all products
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $query = mysqli_query($connect, "SELECT * FROM products WHERE id = $id");
            $product = mysqli_fetch_assoc($query);

            if ($product) {
                echo json_encode($product);
            } else {
                echo json_encode(["message" => "Product not found"]);
            }
        } else {
            $query = mysqli_query($connect, "SELECT * FROM products");
            $products = mysqli_fetch_all($query, MYSQLI_ASSOC);
            echo json_encode($products);
        }
        break;

    case 'POST':
        // Add a new product
        $input = json_decode(file_get_contents("php://input"), true);
        if (isset($input['name']) && isset($input['price'])) {
            $name = mysqli_real_escape_string($connect, $input['name']);
            $description = isset($input['description']) ? mysqli_real_escape_string($connect, $input['description']) : '';
            $price = floatval($input['price']);

            $query = mysqli_query($connect, "INSERT INTO products (name, description, price) VALUES ('$name', '$description', $price)");

            if ($query) {
                echo json_encode(["message" => "Product added successfully"]);
            } else {
                echo json_encode(["message" => "Failed to add product"]);
            }
        } else {
            echo json_encode(["message" => "Please provide name and price"]);
        }
        break;

    case 'PUT':
        // Update an existing product
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $input = json_decode(file_get_contents("php://input"), true);
            if (isset($input['name']) && isset($input['price'])) {
                $name = mysqli_real_escape_string($connect, $input['name']);
                $description = isset($input['description']) ? mysqli_real_escape_string($connect, $input['description']) : '';
                $price = floatval($input['price']);

                $query = mysqli_query($connect, "UPDATE products SET name = '$name', description = '$description', price = $price WHERE id = $id");

                if (mysqli_affected_rows($connect) > 0) {
                    echo json_encode(["message" => "Product updated successfully"]);
                } else {
                    echo json_encode(["message" => "Failed to update product"]);
                }
            } else {
                echo json_encode(["message" => "Please provide name and price"]);
            }
        } else {
            echo json_encode(["message" => "Product ID is required"]);
        }
        break;

    case 'DELETE':
        // Delete an existing product
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $query = mysqli_query($connect, "DELETE FROM products WHERE id = $id");

            if (mysqli_affected_rows($connect) > 0) {
                echo json_encode(["message" => "Product deleted successfully"]);
            } else {
                echo json_encode(["message" => "Failed to delete product"]);
            }
        } else {
            echo json_encode(["message" => "Product ID is required"]);
        }
        break;

    default:
        // Handle unsupported methods
        http_response_code(405);
        echo json_encode(["message" => "Method not allowed"]);
        break;
}

// Close the database connection
mysqli_close($connect);
?>
