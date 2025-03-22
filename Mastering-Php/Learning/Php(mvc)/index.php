<?php
    require_once "Controllers/Users_Controller.php";

    if(isset($_GET['action'])){
        $action = $_GET['action'];
        // switch action : 
        switch ($action) {
            case 'list':
                usersListAction();
                break;
            case 'add':
                addUserAction();
                break;
            case "insert":
                insertuserAction();
                break;
            case 'modify':
                modifyUserAction();
                break;
            case 'update':
                updateUserAction();
                break;
            case 'delete':
                deleteUserAction();
                break;
            }
    }