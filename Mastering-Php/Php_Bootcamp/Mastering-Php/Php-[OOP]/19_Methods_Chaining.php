<?php

    /*
            - Methods Chaining : 
            ---------------------
                * When a class's methods return the $this Keyword, They Can Be Chained Together
    */

    class Books{
        // properties : 
        public $name;
        public $price;
        public $category;

        // methods : 
        public function getname($name){
            $this->name = $name;
            echo "The Books Name is : " . $name . "<br>";
            return $this;
        }
        public function getprice($price){
            $this->price = $price;
            echo "The Books price is : " . $price . "<br>";
            return $this;
        }
        public function getcategory($category){
            $this->category = $category;
            echo "The Books category is : " . $category . "<br>";
            return $this;
        }
    }

    // object from the class : 
    $book = new Books();
    $book->getname("Atomic Habits")->getprice("12.89$")->getcategory("Self-Improvement");
    echo "<pre>";
        print_r($book);
    echo "</pre>";

