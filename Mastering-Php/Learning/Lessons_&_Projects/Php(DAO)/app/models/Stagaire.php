<?php

    namespace app\models;
    use PDO;
    use Exception;
    require "Database.php";

    class Stagaire extends Database{

        // stagaire properties : 
        private $nom;
        private $prenom;
        private $age;
        private $login;
        private $password;

        // getters and setters :
        public function get_nom($nom){
            return $this->nom;
        }
        public function set_nom($nom){
            $this->nom = $nom;
        }

        public function get_prenom($prenom){
            return $this->prenom;
        }
        public function set_prenom($prenom){
            $this->prenom = $prenom;
        }

        public function get_age($age){
            return $this->age;
        }
        public function set_age($age){
            $this->age = $age;
        }

        public function get_login($login){
            return $this->login;
        }
        public function set_login($login){
            $this->login = $login;
        }

        public function get_password($password){
            return $this->password;
        }
        public function set_password($password){
            $this->password = $password;
        }


        // methods : 
        public function create(){
            $stmt = static::database()->prepare("INSERT INTO stagaires VALUES(null,?,?,?,?,?)");
            $stmt->execute([
                $this->nom, 
                $this->prenom, 
                $this->age, 
                $this->login, 
                $this->password
            ]);
            return $stmt;
        }

        public function edit($id){
            $stmt = $this->database()->prepare("UPDATE stagaires
                                                        SET nom=?,
                                                            prenom=?,
                                                            age=?,
                                                            login=?,
                                                            password=?
                                                        WHERE id=?
            ");
            $stmt->execute([
                $this->nom, 
                $this->prenom,
                $this->age,
                $this->login,
                $this->password,
                $id
            ]);
            return $stmt;
        }

        public static function all(){
            return static::database()->query("SELECT * FROM stagaires")->fetchAll(PDO::FETCH_CLASS, Stagaire::class);
        } 

        public static function where($column, $value, $operator="="){
            $stmt = static::database()->prepare("SELECT * FROM stagaires WHERE $column $operator ?");
            $stmt->execute([$value]);
            $data = $stmt->fetchAll(PDO::FETCH_CLASS, Stagaire::class);
            // if empty data : 
            if(empty($data)){
                throw new Exception("Aucun Stagaire Trouve !");
            }
            return $data;
        }

        public static function find($id){
            return static::where("id", $id);
        }

        public function delete($id){
            $stmt = $this->database()->prepare("DELETE FROM stagaires WHERE id=?");
            $stmt->execute([$id]);
        }
    }