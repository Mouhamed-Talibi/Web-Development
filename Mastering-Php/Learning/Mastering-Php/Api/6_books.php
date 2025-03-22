<?php

// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'rest_api';

// Establish a connection to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

// Set headers for CORS and JSON output
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Determine the HTTP method
$method = $_SERVER['REQUEST_METHOD'];

// Handle GET requests
if ($method === "GET") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM books WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $book = $result->fetch_assoc();
        echo json_encode($book);
    } else {
        $query = "SELECT * FROM books";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $books = array();
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
        echo json_encode($books);
    }
}

// Handle POST requests
elseif ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['name']) && isset($data['price']) && isset($data['discount'])) {
        $name = $data['name'];
        $price = $data['price'];
        $discount = $data['discount'];
        $query = "INSERT INTO books (name, price, discount) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssi", $name, $price, $discount);
        if ($stmt->execute()) {
            echo json_encode(["message" => "Book inserted successfully"]);
        } else {
            echo json_encode(["message" => "Failed to insert book"]);
        }
    } else {
        echo json_encode(["message" => "Invalid input data"]);
    }
}

// Handle PUT requests
elseif ($method === "PUT") {
    $id = $_GET['id'];
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['name']) && isset($data['price']) && isset($data['discount'])) {
        $name = $data['name'];
        $price = $data['price'];
        $discount = $data['discount'];
        $query = "UPDATE books SET name=?, price=?, discount=? WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssii", $name, $price, $discount, $id);
        if ($stmt->execute()) {
            echo json_encode(["message" => "Book updated successfully"]);
        } else {
            echo json_encode(["message" => "Failed to update book"]);
        }
    } else {
        echo json_encode(["message" => "Invalid input data"]);
    }
}

// Handle DELETE requests
elseif ($method === "DELETE") {
    $id = $_GET['id'];
    $query = "DELETE FROM books WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo json_encode(["message" => "Book deleted successfully"]);
    } else {
        echo json_encode(["message" => "Failed to delete book"]);
    }
}

// Close the database connection
$conn->close();

?>