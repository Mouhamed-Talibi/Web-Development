<?php

    require "Autoloader.php";
    use controllers\VoitureController;
    use models\Voiture;

    if(isset($_GET['action'])){
        $action = $_GET['action'];
        // switch action : 
        switch($action){
            case "list":
                VoitureController::indexAction();
                break;
            case "create":
                VoitureController::createAction();
                break;
            case "store":
                VoitureController::storeAction();
                break;
            case "edit":
                VoitureController::editAction();
                break;
            case "update":
                VoitureController::updateAction();
                break;
            case "delete":
                VoitureController::deleteAction();
                break;
            case "destroy":
                VoitureController::destroyAction();
                break;
            default : 
                echo "Cette page non disponible ( 404 ) ";
                break;
        }
    }
