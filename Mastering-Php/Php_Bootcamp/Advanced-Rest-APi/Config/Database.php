<?php

    class My_Database{
        // properties : 
        private $host     = "localhost";
        private $user     = "root";
        private $password = "";
        private $db       = "rest_api";

        // connection property : 
        private $connect;

        // Connection Method : 
        public function connection(){
            try{
                $this->connect = mysqli_connect($this->host, $this->user, $this->password, $this->db);
                if(!$this->connect){
                    throw new Exception("Connection Error : " . mysqli_connect_error());
                }
            }catch(Exception $e){
                echo "Connection Error : " . $e->getMessage();
            }
            // return connection object : 
            return $this->connect;
        }

        // closing connection function : 
        public function close(){
            if($this->connect){
                mysqli_close($this->connect);
                // setting connection to null : 
                $this->connect = null;
            }
        }
    }