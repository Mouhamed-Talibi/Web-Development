<?php

    require "4_Db.php";
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");

    $method = $_SERVER['REQUEST_METHOD'];
    $input = json_decode(file_get_contents("php://input"), true);

    if($method === "GET"){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = mysqli_query($connect, "SELECT * FROM users WHERE id=$id");
            $users = mysqli_fetch_assoc($query);
            echo json_encode($users);
        }else{
            $query = mysqli_query($connect, "SELECT * FROM users");
            $users = [];
            while($row = mysqli_fetch_assoc($query)){
                $users[] = $row;
            }
            echo json_encode($users);
        }
    }elseif($method === "POST"){
        $name = $input['name'];
        $email = $input['email'];
        $age = $input['age'];
        $query = mysqli_query($connect, "INSERT INTO users(name, email, age) VALUES('$name','$email',$age)");
        if($query){
            echo json_encode(["message"=>"User Added Succesfully"]);
        }else{
            echo json_encode(["message"=>"User Doesn't Added"]);
        }
    }elseif($method === "PUT"){
        $id = $_GET['id'];
        $name = $input['name'];
        $email = $input['email'];
        $age = $input['age'];
        $query = mysqli_query($connect, "UPDATE users SET name='$name', email='$email', age=$age WHERE id=$id");
        if($query){
            echo json_encode(["message"=>"User Updated Successfully"]);
        }else{
            echo "User Dosn't Updated";
        }
    }elseif($method === 'DELETE'){
        $id = $_GET['id'];
        $query = mysqli_query($connect, "DELETE FROM users WHERE id=$id");
        if($query){
            echo json_encode(["message"=>"User Deleted Successfully"]);
        }else{
            echo json_encode(["message"=>"User Doesn't Deleted"]);
        }
    }else{
        echo json_encode(["message"=>"Method Not Allowed"]);
    }