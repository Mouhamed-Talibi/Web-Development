<?php

    class Post{
        // Db Stuff :
        private $connect;
        private $table = "posts";

        // post properties : 
        public $id;
        public  $category_id;
        public $category_name;
        public $title;
        public $body;
        public $author;
        public $created_at;

        // Construcor with db : 
        public function __construct($db){
            $this->connect = $db;
        }

        // get posts  : 
        public function read(){
            // create query : 
            $query = "  SELECT 
                            c.name AS category_name,
                            p.id,
                            p.category_id,
                            p.title,
                            p.body,
                            p.author,
                            p.created_at
                        FROM 
                            {$this->table} p
                        LEFT JOIN 
                            categories c ON p.category_id = c.id
                        ORDER BY 
                            p.created_at DESC
            ";

            // prepared statement : 
            $stmt = $this->connect->prepare($query);
            // exceute query : 
            $stmt->execute();
            // return stmt: 
            return $stmt;
        }

        // get signle post : 
        public function read_sigle(){
            // create query : 
            $query = "  SELECT 
                            c.name AS category_name,
                            p.id,
                            p.category_id,
                            p.title,
                            p.body,
                            p.author,
                            p.created_at
                        FROM 
                            {$this->table} p
                        LEFT JOIN 
                            categories c ON p.category_id = c.id
                        WHERE 
                            p.id=?
                        LIMIT 
                            0,1
            ";
            // prepare statement :
            $stmt = $this->connect->prepare($query);
            // bind id 
            $stmt->bindParam(1,$this->id);
            // excecute the query :
            $stmt->execute(); 

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // set properties : 
            $this->title = $row['title'];
            $this->body = $row['body'];
            $this->author = $row['author'];
            $this->category_id = $row['category_id'];
            $this->category_name = $row['category_name'];
        }

        // create post 
        public function createPost(){
            // create query : 
            $query = " INSERT INTO " . 
                    $this->table . "
                SET 
                    title = :title,
                    body = :body,
                    category_id = :category_id,
                    author = :author
            ";
            // prepared statement : 
            $stmt = $this->connect->prepare($query);
            // clean data : 
            $this->title = htmlspecialchars(strip_tags($this->title));
            $this->body = htmlspecialchars(strip_tags($this->body));
            $this->category_id = htmlspecialchars(strip_tags($this->category_id));
            $this->author = htmlspecialchars(strip_tags($this->author));

            // bind the data : 
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":body", $this->body);
            $stmt->bindParam(":category_id", $this->category_id);
            $stmt->bindParam(":author", $this->author);
            // exceute query  : 
            if($stmt->execute()){
                return True;
            }else{
                // return error if somthing goes wrong : 
                printf("Error: %s.\n", $stmt->error);
                return False;
            } 
        }

        // update post : 
        public function updatePost(){
            // create query : 
            $query = " UPDATE " . 
                    $this->table . "
                SET 
                    title = :title,
                    body = :body,
                    category_id = :category_id,
                    author = :author
                WHERE 
                    id= :id
            ";
            // prepared statement : 
            $stmt = $this->connect->prepare($query);
            // clean data : 
            $this->title = htmlspecialchars(strip_tags($this->title));
            $this->body = htmlspecialchars(strip_tags($this->body));
            $this->category_id = htmlspecialchars(strip_tags($this->category_id));
            $this->author = htmlspecialchars(strip_tags($this->author));
            $this->id = htmlspecialchars(strip_tags($this->id));

            // bind the data : 
            $stmt->bindParam(":title", $this->title);
            $stmt->bindParam(":body", $this->body);
            $stmt->bindParam(":category_id", $this->category_id);
            $stmt->bindParam(":author", $this->author);
            $stmt->bindParam(":id", $this->id);
            // exceute query  : 
            if($stmt->execute()){
                return True;
            }else{
                // return error if somthing goes wrong : 
                printf("Error: %s.\n", $stmt->error);
                return False;
            } 
        }

        // Delete post : 
        public function deletePost(){
            // create query  : 
            $query = "DELETE FROM " . $this->table . " WHERE id= :id";
            // prepared statement : 
            $stmt = $this->connect->prepare($query);

            // clean and bind 
            $this->id = htmlspecialchars(strip_tags($this->id));
            $stmt->bindParam(":id", $this->id);

            // exceute query  : 
            if($stmt->execute()){
                return True;
            }else{
                // return error if somthing goes wrong : 
                printf("Error: %s.\n", $stmt->error);
                return False;
            } 
        }
    }