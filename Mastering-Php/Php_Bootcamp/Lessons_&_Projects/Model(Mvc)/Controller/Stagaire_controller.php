<?php
    require "Model/stagaire.php";
    function IndexAction(){
        $stagaires = Latest();
        require_once "Views/list_stagaires.php";
    } 

    function createAction(){
        require_once "Views/create.php";
    }

    function storeAction(){
        $is_created = create();
        header("Location: index.php?action=list");
    }

    function editAction(){
        $id = intval($_GET['id']);
        $stagaire = view($id);
        require_once "Views/edit.php";
    }

    function updateAction(){
        $id = intval($_POST['id']);
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        edit($nom, $prenom, $age, $login, $password, $id);
        header("Location: index.php?action=list");
    }

    function deleteAction(){
        $id = intval($_GET['id']);
        require_once "Views/delete.php";
    }

    function destroyAction(){
        $id = intval($_GET['id']);
        if(destroy($id)){
            header("Location: index.php?action=list");
        }
    }

