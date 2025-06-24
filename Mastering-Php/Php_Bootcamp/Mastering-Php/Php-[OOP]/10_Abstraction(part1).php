<?php

    /*
            - Abstraction (part1) :
            -----------------------

                - Started with keyword [ abstract ]
                - Cannot be instantiated [ Cannot create object from ]
                - Made for other classes to inherit properties & methods from 
                - Can has properties, methods
                - Can has abstracted methods & non abstracted methods
                    -> You have to use the abstracted method in the class that inherit from the abstract class
                    -> Abstrcated method connect have a body
                    -> Abstracted methods can have arguments 
    */

    abstract class MakePhone{
        // properties : 
        public $name;
        public $ram;
        public $storage;

        // methods : 
        public function sayHello() {
            echo "Hello From Say Hello Function";
        }

        // abstrcated method : 
        // abstract public function sayBye();
        // abstract public function saySeeYouLater($name);
    }

    // class that inherit from the abstract class : 
    class Sony extends MakePhone{
        
    }
    $sony = new Sony();
    $sony->sayHello();
    echo "<pre>";
        print_r($sony);
    echo "</pre>";

