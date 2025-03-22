<?php

    /*
            - Magic Methods (part3) : 
            --------------------------

                Get : 
                -----
                    . Called when Getting a property Not accessible or not found 
                    . Accept one Parameter [ $properity ]

                Set : 
                ------
                    . Called when setting a value to Property Not accessible ot not found 
                    . Accept 2 Parameters [ $property, $value ]
    */

    class Hwawei{
        public $name;
        public $ram;
        private $color;

        // magic methid : get : 
        public function __get($property) {
            echo "The Property [ " . $property . " ] Not Found or Not Accessible!!";
            print "<br>";
        }

        // magic method: set :
        public function __set($property, $value){
            echo "The Property [ " . $property . " ] Not Accessible Or Not Found !!";
            print "<br>";
            echo "And You Cannot Assign this [ ". $value ." ] to This Property !!";
            print "<br>";
        }
    }
    $phone = new Hwawei();
    echo $phone->screen;  // Not Accesible or not found
    $phone->screen = "Super Amoled";
    $phone->width = "3.6 inch"; // you cannot assign this value to this property 
    echo "<pre>"; 
        print_r($phone);
    echo "</pre>"; 
