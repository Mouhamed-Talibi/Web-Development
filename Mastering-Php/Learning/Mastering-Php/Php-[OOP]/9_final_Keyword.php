<?php

    /*
            - Final Keyword : 
            -----------------

                - You can't override the class or its methods, properties, constants.
                - We use the final keyword to stop any one to modify or write any method or property in the child class again 
    */

    class Members{
        // properties : 
        public $name;
        public $weight;
        public $age;

        // method : 
        final public function getInfo($name, $weight, $age) {
            $this->name = $name;
            $this->weight = $weight;
            $this->age = $age;
            echo "The member name is : " . $name . " His Weight is : " . $weight . " And His Age is : " . $age . "<br>";
        } 
    }

    // object one from the main class : 
    $mouhamed = new Members();
    $mouhamed->getInfo("Mouhamed", "61Kg", "19");
    echo "<pre>";
        print_r($mouhamed);
    echo "</pre>";

    // child class : 
    class Users extends Members{
        public $family_name;
        // if you try to rewrite the same method in the parent class and modify it , it will show you an error
    }
    // object from the child class : 
    $user_1 = new Users();
    $user_1->getInfo("Yassin", "66Kg", "20");
    $user_1->family_name = "Elbehja";
    echo "<pre>";
        print_r($user_1);
    echo "</pre>";