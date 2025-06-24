<?php

    class Database{
        // properties : 
        private $host;
        private $user;
        private $password;
        private $db;
        private $connection;

        // magic method (constructor) 
        public function __construct($host, $user, $password, $db){
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->db = $db;
            // auto connection to database when the use put the required properties : 
            $this->connect();
        }

        // method for the connection : 
        public function connect(){
            $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->db);
            if(!$this->connection){
                echo "There Is A Problem With The Connection" . mysqli_connect_error();
            }
        }

        // method to get the connection : 
        public function getConnection(){
            return $this->connection;
        }

        // method to insert the data : 
        public function insert($username, $email, $password){
            if($this->connection){
                $hashed_pass = password_hash($password, PASSWORD_BCRYPT);
                $stmt  = mysqli_prepare($this->connection, "INSERT INTO users(username, email, password) VALUES(?,?,?);");
                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_pass);
                if(mysqli_stmt_execute($stmt)){
                    echo "New Record Added";
                }else{
                    die("Query Failed: ") . mysqli_error($this->connection);
                }
            }
        }
    }