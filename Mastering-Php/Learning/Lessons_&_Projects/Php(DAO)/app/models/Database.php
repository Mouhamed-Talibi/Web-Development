<?php

    namespace app\models;
    use PDO;

    class Database{
        // properties : 
        protected $id;
        protected static $db;

        // getters 
        public function get_id(){
            return $this->id;
        }

        public static function database(){
            if(is_null(static::$db)){
                static::$db = new PDO("mysql:dbname=ofppt;host=localhost;", "root", "");
            }
            return static::$db;
        }
}