<?php

    /*
            - Magic Methods (part4):
            -------------------------

            Clone : 
            -------
                * Typical Copy Of Object In Php works by reference 
                * Means both (main & copied) will be interlinked
                * clone keyword -> we use it to stop interlinking the main & the copy
    */

    class Sony{
        public $name;
        public $ram;


        // magic method : 
        public function __construct($name, $ram){
            $this->name = $name;
            $this->ram  = $ram;
        }
    }
    $main = new Sony("Sony X6", "2Gb");
    $copy = $main; // interlinked by reference
    echo "<pre>";
        print_r($main);
    echo "</pre>";
    echo "<pre>";
        print_r($copy);
    echo "</pre>";

    // use the keyword clone to stop the interlinked between the main and the copy : 
    $copy = clone $main;

    // change the properties of the main:
    $main->name = "Sony Xperia";
    $main->ram  = "6Gb";
    echo "<pre>";
        print_r($main);
    echo "</pre>";

    // change the properties of the copy  : 
    $copy->name = "Sony X14 r";
    $copy->ram  = "3Gb";
    echo "<pre>";
        print_r($copy);
    echo "</pre>";
