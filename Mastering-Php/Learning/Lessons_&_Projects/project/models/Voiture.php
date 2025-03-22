<?php
    namespace models; 
    use models\Database;
    use PDO;

    class Voiture {
        private $id;
        private $model;
        private $prix;

        // Getters and Setters
        public function getId() { 
            return $this->id;
        }

        public function getModel() { 
            return $this->model;
        }

        public function setModel($model) { 
            $this->model = $model;
            return $this; 
        }

        public function getPrix() { 
            return $this->prix;
        }

        public function setPrix($prix) { 
            $this->prix = $prix;
            return $this; 
        }

        // Constructor
        public function __construct($model, $prix) {
            $this->model = $model;
            $this->prix = $prix;
        }

        /*  
            methods :   
                - latest [ last elements ]
                - creat  [ add new car ]
                - view   [ view car data ]
                - edit    [ modify existing car ]
                - destroy [ delete a car ]
        */
        public function latest(){
            $db = Database::database(); 
            $query = $db->query("SELECT * FROM voitures ORDER BY id DESC");
            return $query->fetchAll(PDO::FETCH_ASSOC);        
        }

        public function create(){
            $db = Database::database();
            if($db){
                if(!empty($this->model) && !empty($this->prix)){
                    $model = $this->model;
                    $prix = floatval($this->prix);
                    $stmt = $db->prepare("INSERT INTO voitures(model, prix) VALUES(?, ?)");
                    $result = $stmt->execute([$model, $prix]);
                    return $result;
                }
            }
        }

        public function view($id){
            $db = Database::database();
            if($db){
                if(isset($id)){
                    $stmt = $db->prepare("SELECT * FROM voitures WHERE id=?");
                    $stmt->execute([$id]);
                    return $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
        }

        public function update($id){
            if(isset($id)){
                $db = Database::database();
                if($db && !empty($this->model) && !empty($this->prix)){
                    $stmt = $db->prepare("UPDATE voitures SET model=?, prix=? WHERE id=?");
                    return $stmt->execute([$this->model, $this->prix, $id]);
                }
            }
        }

        public function delete($id){
            if(isset($id)){
                $id = intval($id);
                $db = Database::database();
                if($db && !empty($id) && $id > 0){
                    $stmt = $db->prepare("DELETE FROM voitures WHERE id=?");
                    return $stmt->execute([$id]);
                }
            }
        }
    }