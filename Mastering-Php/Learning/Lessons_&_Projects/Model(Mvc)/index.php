<?php
    require "Controller/Stagaire_controller.php";

    // creation of return : 
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action){
            case 'create':
                createAction();
                break;
            case 'list':
                IndexAction();
                break;
            case 'destroy':
                destroyAction();
                break;
            case 'edit':
                editAction();
                break;
            case 'delete':
                deleteAction();
                break;
            case 'store':
                storeAction();
                break;
            case 'update':
                updateAction();
                break;
        }
    }
    