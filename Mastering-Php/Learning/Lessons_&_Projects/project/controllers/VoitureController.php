<?php
    namespace controllers;
    use models\Database;
    use models\Voiture;

    class VoitureController{
        public static function indexAction(){
            $voiture = new Voiture("", 0);
            $voitures = $voiture->latest();
            require "views/list_voitures.php";
        }

        public static function createAction(){
            require "views/create.php";
        }

        public static function storeAction(){
            $model = $_POST['model'];
            $prix = $_POST['prix'];
            $voiture = new Voiture($model, $prix);
            if($voiture->create()){
                header("Location: index.php?action=list");
                exit();
            }else{
                die("Voiture n'est pas ajouter !");
            }
        }

        public static function editAction() {
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $id = $_GET['id'];
                $voiture = new Voiture("", 0);
                $carData = $voiture->view($id);
                if ($carData) {
                    require_once "views/edit.php";
                } 
            }
        }
        
        public static function updateAction() {
            if (isset($_POST['id'], $_POST['model'], $_POST['prix'])) {
                $id = intval($_POST['id']);
                $model = $_POST['model'];
                $prix = $_POST['prix'];
        
                // Create a new Voiture instance with the provided data
                $voiture = new Voiture($model, $prix);
                if ($voiture->update($id)) {
                    header("Location: index.php?action=list");
                    exit(); 
                } else {
                    echo "Car not updated.";
                }
            } else {
                echo "Invalid input.";
            }
        }

        public static function deleteAction(){
            $id = $_GET['id'];
            require "views/delete.php";
        }

        public static function destroyAction(){
            $id = $_GET['id'];
            if(isset($id)){
                $voiture = new Voiture("", 0);
                if($voiture->delete($id)){
                    header("Location: index.php?action=list");
                    exit();
                }
            }
        }
    }