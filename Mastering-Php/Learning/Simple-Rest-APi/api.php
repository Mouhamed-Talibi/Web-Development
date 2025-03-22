<?php

    header("Access-Contorl-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

    // requiring the database file : 
    require_once "config.php";

    // geting the typeof method : 
    $method = $_SERVER['REQUEST_METHOD'];
    $data = json_decode(file_get_contents("php://input"), true);

    // handling requests method : 
    if($method === "GET"){
        // get with id : 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
                $stmt = mysqli_prepare($connect, "SELECT * FROM users WHERE id=?");
                mysqli_stmt_bind_param($stmt, "i", $id);
                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                    $user = mysqli_fetch_assoc($result);
                    echo json_encode($user);
            }
            else{
                echo json_encode(array("message"=>"There is no user with this id !!"));
            }
        }
        else{
            // get all users : 
            $query = mysqli_query($connect, "SELECT * FROM users");
            $users = [];
            while($row = mysqli_fetch_assoc($query)){
                $users[] = $row;
            }
            echo json_encode($users);
        }
    }
    // post request  
    elseif($method === "POST"){
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $stmt = mysqli_prepare($connect, "INSERT INTO users(first_name, last_name) VALUES(?,?)");
        mysqli_stmt_bind_param($stmt, "ss", $first_name, $last_name);
        if(mysqli_stmt_execute($stmt)){
            echo json_encode(array("message"=>"User Added Successfully"));
        }else{
            json_encode(array("message"=>"User Not Added !"));
        }
    }
    // update request :
    elseif($method === "PUT"){
        $id = $_GET['id'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $stmt = mysqli_prepare($connect, "
            UPDATE users 
            SET first_name=?, last_name=? 
            WHERE id=?
        ");
        mysqli_stmt_bind_param($stmt, "ssi", $first_name, $last_name, $id);
        if(mysqli_stmt_execute($stmt)){
            echo json_encode(array("message"=>"User Updated Successfully"));
        }else{
            json_encode(array("message"=>"User Not Updated !"));
        }
    }
    // delete request : 
    elseif($method === "DELETE"){
        $id = $_GET['id'];
        if(isset($id)){
            $stmt = mysqli_prepare($connect, 'DELETE FROM users WHERE id=?');
            mysqli_stmt_bind_param($stmt, "i", $id);
            if(mysqli_stmt_execute($stmt)){
                echo json_encode(array("message"=>"User Deleted Successfully"));
            }else{
                echo json_encode(array("message"=>"User Not Deleted !!"));
            }
        }else{
            echo json_encode(array("message"=>"There is no user with this id"));
        }
    }
    // not allowed other method : 
    else{
        echo json_encode(array("message"=>"Method Not Allowed"));
    }