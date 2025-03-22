<?php

    /*
            - Inheritance : 
            ----------------

                - we write the keyword (extends Class-name) to inherit from a class.
                - remember that when you inherit a property, constant, method from the main class you have to use it as it is without modifying it because it will cause an error
                - if you want to modify any property you have to add it in the new class and give it new name . 

                [Super | main | Parent -> Class] : is the main class that you inherit from
                [ child | Sub class ]            : is the inherited class from the parent class

    */

    class Sonny{
        // properties : 
        public $color;
        public $ram;
        public $storage;

        // method : 
        public function getSpecification($color, $ram, $storage) {
            $this->color   = $color;
            $this->ram     = $ram;
            $this->storage = $storage;
        }
    }
    // Object from the class : 
    $sony = new Sonny();
    $sony->getSpecification("black", "6GB", "256Gb");
    echo "<pre>";
        print_r($sony);
    echo "</pre>";

    // new class that inherit from the main class and add new properties : 
    class Apple extends Sonny{
        // new properties : 
        public $screen = "Amoled";
        public $inch   = "6.6 inch";

        // if you try to modify the main method in the class it will causes error, so you have to create new method : 
        public function getSpecificationApple($color, $ram, $storage, $screen, $inch) {
            $this->color = $color;
            $this->ram = $ram;
            $this->storage = $storage;
            $this->screen = $screen;
            $this->inch = $inch;
        }
    }
    // object from the new class : 
    $apple = new Apple();
    $apple->getSpecificationApple("aqua", "4Gb", "64Gb", "Super Amoled", "5.5inch");
    echo "<pre>";
        print_r($apple);  // here you will see the new properties 
    echo "</pre>";