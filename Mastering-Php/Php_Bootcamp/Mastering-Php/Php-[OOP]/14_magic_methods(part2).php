<?php

    /*
            - Magic Methods (part2) : 
            --------------------------

                Call : 
                ------
                    * Called when invoking function not accessible or not found 
                    * Accept 2 parameters [ $method_name, $params ]
    */

    class Iphone{
        public $name;
        public $ram;

        // magic method : call
        public function __call($method, $args){
            echo "The Method : [" . $method . "] Not accessible or not Found"; 
            echo "<pre>";
                print_r($args);
            echo "</pre>";
        }
    }
    $phone = new Iphone("Iphone Xr", "5Gb");
    $phone->getInfo();
    $phone->getStats();
    $phone->getUser();
    echo "<pre>";
        print_r($phone);
    echo "</pre>";