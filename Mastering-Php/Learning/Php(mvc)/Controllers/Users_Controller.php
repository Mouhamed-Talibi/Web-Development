<?php
    require_once "Models/Users_Model.php";

    // usersListAction 
    function usersListAction(){
        $connect = db_connection();
        $users = usersList($connect);
        require_once "Views/usersList.php";
    }

    // addUserAction
    function addUserAction(){
        require "Views/addUser.php";
    }

    // insertuserAction
    function insertuserAction(){
        $connect = db_connection();
        $insert = insertUser($connect);
        if($insert){
            header("Location: index.php?action=list");
        }
    }

    // modifyUserAction
    function modifyUserAction(){
        $id = $_GET['id'];
        $connect = db_connection();
        $user = viewUser($connect, $id);
        require_once "Views/modifyUser.php";
    }

    // updateUserAction
    function updateUserAction(){
        $connect = db_connection();
        if (!$connect) {
            throw new Exception("Connection failed");
        }
        $id = intval($_POST['id']);
        if (empty($id)) {
            throw new Exception("Invalid user ID");
        }
        $update = updateUser($connect, $id);
        if ($update) {
            header("Location: index.php?action=list");
            exit;
        } else {
            throw new Exception("Failed to update user");
        }
    }

    // deleteUserAction : 
    function deleteUserAction(){
        $connect = db_connection();
        $id = $_GET['id'];
        $delete = deleteUser($connect, $id);
        if($delete){
            header("Location: index.php?action=list");
        }
    }