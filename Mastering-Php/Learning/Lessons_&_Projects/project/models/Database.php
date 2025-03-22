<?php

    namespace models;
    use PDO;
    use PDOException;

    class Database {
        protected $id;
        protected static $db = null;

        public function getId() {
            return $this->id;
        }

        public static function database() {
            if (is_null(static::$db)) {
                try {
                    static::$db = new PDO(
                        "mysql:host=localhost;dbname=ofppt",
                        "root",
                        ""
                    );
                } catch (PDOException $e) {
                    die("Database connection failed: " . $e->getMessage());
                }
            }
            return static::$db;
        }
    }
