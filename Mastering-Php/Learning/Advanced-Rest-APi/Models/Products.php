<?php

    require_once "../Config/Database.php";
    class Products{
        // properties : 
        private $table = "products";
        private $connect;

        // constructor : 
        public function __construct(){
            $database = new My_Database();
            $this->connect = $database->connection();
        }

        // get products  :
        public function getProducts(){
            $query = mysqli_query($this->connect, "SELECT * FROM products");
            if($query && mysqli_num_rows($query) > 0){
                return mysqli_fetch_all($query, MYSQLI_ASSOC);
            }
            else{
                return array("success"=>False, "Message"=>"No users Found !");
            }
        }

        // get products By id : 
        public function getProduct_ById(){
            if(isset($_GET['id'])){
                $id = intval($_GET['id']);
                if($id <= 0){
                    return array("success"=>False, "Message"=>"Invalid Id");
                }
                // prepare , bind , excute stmt : 
                $stmt = mysqli_prepare($this->connect, "SELECT * FROM " . $this->table . " WHERE id=?");
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) === 1){
                    mysqli_stmt_close($stmt);
                    return mysqli_fetch_assoc($result);
                }
                else{
                    mysqli_stmt_close($stmt);
                    return array("success"=>False, "Message"=>"No Product Found!");
                }
            }else{
                return array("success"=>False, "Message"=>"Connot Get Product Without Id !");
            }
        }

        public function addProduct() {
            // Decode JSON data:
            $data = json_decode(file_get_contents("php://input"), true);
        
            // Extract and validate product data:
            $name = mysqli_real_escape_string($this->connect,$data['name'] ?? null);
            $description = mysqli_real_escape_string($this->connect, $data['description'] ?? null);
            $price = floatval($data['price'] ?? null);
        
            // Check if any required field is missing:
            if (is_null($name) || is_null($description) || is_null($price)) {
                return array("Success" => false, "Message" => "Name, description, and price are required.");
            }
        
            // Check if fields are empty:
            if (empty($name) || empty($description) || empty($price)) {
                return array("Success" => false, "Message" => "Cannot accept empty data.");
            }
        
            // Prepare and execute SQL query to check if product exists:
            $stmt = mysqli_prepare($this->connect, "SELECT * FROM " . $this->table . " WHERE name=? AND description=? AND price=?");
            mysqli_stmt_bind_param($stmt, "ssd", $name, $description, $price);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        
            if (mysqli_num_rows($result) === 1) {
                mysqli_stmt_close($stmt);
                return array("success" => false, "Message" => "Product already exists!");
            }
        
            // Insert new product:
            $stmt = mysqli_prepare($this->connect, "INSERT INTO " . $this->table . " (name, description, price) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "ssd", $name, $description, $price);
        
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);
                return array("Success" => true, "Message" => "Product inserted successfully.");
            } else {
                mysqli_stmt_close($stmt);
                return array("Success" => false, "Message" => "Product not inserted.");
            }
        }

        // Update product : 
        public function updateProduct(){
            if(isset($_GET['id'])){
                $id = intval($_GET['id']);
                // decode json data : 
                $data = json_decode(file_get_contents("php://input"), true);
                // product data : 
                $name = mysqli_real_escape_string($this->connect, $data['name'] ?? null);
                $description = mysqli_real_escape_string($this->connect, $data['description'] ?? null);
                $price = floatval( $data['price'] ?? null);

                // invlaid id : 
                if($id <=0 ) {
                    return array("Success"=>False, "Message"=>"Invalid Id!");
                }
                // null data : 
                if(is_null($name) || is_null($description) || is_null($price)){
                    return array("Success"=>False, "Message"=>"Name, Description And price are required !");
                }
                // empty data : 
                if(empty($name) || empty($description) || $price <= 0){
                    return array("Success"=>False, "Message"=>"Cannot Accept Empty Fields !");
                }

                // prepare, bind, excute, update product : 
                $stmt = mysqli_prepare($this->connect, "UPDATE " . $this->table . " SET name=?, description=?, price=? WHERE id=?");
                mysqli_stmt_bind_param($stmt, "ssdi", $name, $description, $price, $id);
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_close($stmt);
                    return array("Success"=>True, "Message"=>"Product Updated Successfully");
                }
                else{
                    mysqli_stmt_close($stmt);
                    return array("Success"=>false, "Message"=>"Product Not Updated !");
                }
            }
            else{
                return array("Success"=>False, "Message"=>"id Required !!");
            }
        }

        // Delete Product : 
        public function deleteProduct(){
            if(!isset($_GET['id'])){
                return array("Message"=>"Id Required !");
            }
            else{
                // id : 
                $id = intval($_GET['id']);
                if($id <= 0){
                    return array("Message"=>"Invalid Id!");
                }

                // prepare, bind, excute : 
                $stmt = mysqli_prepare($this->connect, "DELETE FROM " . $this->table . " WHERE id=?");
                mysqli_stmt_bind_param($stmt, "i", $id);
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_close($stmt);
                    return array("Success"=>true, "Message"=>"Product Deleted Successfully");
                }
                else{
                    mysqli_stmt_close($stmt);
                    return array("Message"=>"Product Not Deleted !");
                }
            }
        }
    }        