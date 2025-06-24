<?php

class Database_api {
    // Db Params:
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'my_blog';

    // Connection property:
    private $connect;

    // Db connect method:
    public function connect() {
        try {
            // Create new PDO connection:
            $this->connect = new PDO(
                "mysql:host={$this->host};dbname={$this->db}",
                $this->user,
                $this->password
            );

            // Set error mode to exception:
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Log the error (for production) and show a generic message:
            error_log("Connection Error: " . $e->getMessage());
            echo "Unable to connect to the database. Please try again later.";
            return null; // Return null if the connection fails.
        }

        return $this->connect;
    }
}
