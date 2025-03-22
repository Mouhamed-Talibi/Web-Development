<?php

    /*
            - Magic Methods : 
            -----------------

                -> Methods With special name start with double Underscore [ __ ]
                -> construct : 
                    - Called When object is created 
                    - Can be inherited
                    - When it has args it should called while the object creating ( put the args in the [new class_name(args) ] )
                -> Desctruct : 
                    - Called when object is destroyed 
    */

    class Iphone{
        public $name;
        public $ram;

        // magic method : 
        public function __construct($name, $ram){
            $this->name = $name;
            $this->ram  = $ram;
            echo "Device Name : " . $name;
            print "<br>";   
            echo " Device Ram : " . $ram;
        }
    }
    $phone = new Iphone("Iphone Xr", "256Gb");
    echo "<pre>";
        print_r($phone);
    echo "</pre>";
?>