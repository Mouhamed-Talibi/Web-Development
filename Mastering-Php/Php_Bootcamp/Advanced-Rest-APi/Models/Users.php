<?php

    require_once "../Config/Database.php";
    class Users{
        // property : 
        public $connect;

        // connection to database : 
        public function __construct(){
            // creatin instance from database : 
            $database = new My_Database();
            // connecting to database : 
            $this->connect = $database->connection();
        }

        // get all users : 
        public function getUsers(){
            $query = mysqli_query($this->connect, "SELECT * FROM users");
            if($query && mysqli_num_rows($query) > 0){
                return mysqli_fetch_all($query, MYSQLI_ASSOC);
            }
            else{
                return False;
            }
        }

        // get users by id : 
        public function getUsers_byId(){
            if(isset($_GET['id'])){
                // sanitizing is and preparing stmt : 
                $id = intval(mysqli_real_escape_string($this->connect, $_GET['id']));
                $stmt = mysqli_prepare($this->connect, "SELECT * FROM users WHERE id=?");

                if($stmt){
                    // binding and excuting stmt : 
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    mysqli_stmt_execute($stmt);
                    // getting result : 
                    $result = mysqli_stmt_get_result($stmt);

                    // if result === one user :
                    if(mysqli_num_rows($result ) === 1){
                        $user = mysqli_fetch_assoc($result);
                        mysqli_stmt_close($stmt);
                        // return user data : 
                        return $user;
                    }else{
                        mysqli_stmt_close($stmt);
                        return False;
                    }
                }
                else{
                    return False;
                }
            }
            else{
                return False;
            }
        }

        // Add User : 
        public function addUser(){
            // decode json data : 
            $data = json_decode(file_get_contents("php://input"), true);
            // extracting data : 
            $f_name = $data["first_name"] ?? null;
            $l_name = $data["last_name"] ?? null;

            if(isset($l_name) && isset($f_name)){
                // Preparing, binding, excuting stmt : 
                $stmt = mysqli_prepare($this->connect, "SELECT * FROM users WHERE first_name=? AND last_name=?");
                mysqli_stmt_bind_param($stmt, "ss", $f_name, $l_name);
                mysqli_stmt_execute($stmt);

                // getting result : 
                $result = mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result) > 0){
                    mysqli_stmt_close($stmt);
                    return array("Message"=>"User Already Exists !", "success"=>False);
                }
                else{
                    $stmt = mysqli_prepare($this->connect, "INSERT INTO users(first_name, last_name) VALUES(?,?)");
                    mysqli_stmt_bind_param($stmt, "ss", $f_name, $l_name);
                    if(mysqli_stmt_execute($stmt)){
                        // closing database : 
                        mysqli_stmt_close($stmt);
                        // retrun json response : 
                        return array("Message"=>"User Added successfully ✅", "success"=>True);
                    }
                    else{
                        mysqli_stmt_close($stmt);
                        return array("Message"=>"Error Adding User !", "success"=>False);
                    }
                }
            }
            else{
                return array("Message"=>"First and Last name Are Required !", "success"=>False);
            }
        }

        // Update User : 
        public function updateUser(){
            if(isset($_GET['id'])){
                $id = intval($_GET['id']);
                $data = json_decode(file_get_contents("php://input"), true);

                // vars : 
                $f_name = $data['first_name'] ?? null;
                $l_name = $data['last_name'] ?? null;

                if(isset($f_name) && isset($l_name)){
                    if($id <= 0){
                        return array("success"=>false, "message"=>"Invalid Id !!");
                    }
                    // prepare , bind , excute stmt : 
                    $stmt = mysqli_prepare($this->connect, "UPDATE users SET first_name=?, last_name=? WHERE id=?");
                    mysqli_stmt_bind_param($stmt, "ssi", $f_name, $l_name, $id);
                    if(mysqli_stmt_execute($stmt)){
                        mysqli_stmt_close($stmt);
                        return array("message"=>"User Updated Successfully ✔", "success"=>True);
                    }
                    else{
                        mysqli_stmt_close($stmt);
                        return array("message"=>"User Isn't Updated !", "success"=>false);
                    }
                }
                else{
                    return array("message"=>"First, Last Name are Required !", "success"=>false);
                }
            }
            else{
                return array("success"=>False, "message"=>"Cannot Update User Without Id !!");
            }
        }

        // Delete User : 
        public function deleteUser(){
            if(isset($_GET['id'])){
                $id = intval($_GET['id']);
                
                // prepare, bind, excute : 
                $stmt = mysqli_prepare($this->connect, "DELETE FROM users WHERE id=?");
                mysqli_stmt_bind_param($stmt, "i", $id);
                if($id <= 0){
                    mysqli_stmt_close($stmt);
                    return array("message"=>"Invalid Id !!", "success"=>false);
                }
                else{
                    if(mysqli_stmt_execute($stmt)){
                        mysqli_stmt_close($stmt);
                        return array("success"=>true, "message"=>"User Deleted Successfully");
                    }
                    else{
                        mysqli_stmt_close($stmt);
                        return array("success"=>false, "message"=>"User Not Deleted !!");
                    }
                }
            }
            else{
                return array("Success"=>false, "message"=>"Cannot Delete without Id !!");
            }
        }
    }