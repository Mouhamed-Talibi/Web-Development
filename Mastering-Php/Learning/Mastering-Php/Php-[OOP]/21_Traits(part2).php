<?php

    /*
        - Traits (part2) : 
        ------------------
    */

    trait Features{
        public function sayhello(){
            echo "Hello From Trait <br>";
        }
    }

    class LgDevice{
        public function sayhello(){
            echo "Hello From Class <br>";
        }
    }

    class Lg extends LgDevice{
        use Features;
    }

    // object : 
    $phone = new Lg();
    $phone->sayHello(); // here is the priority for the Trait Than The Class
    echo "<pre>";   
        print_r($phone);
    echo "</pre>";