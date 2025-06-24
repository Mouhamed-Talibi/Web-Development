<?php

    /*
            - Class Properties :
            --------------------

            Types of Properties : 
                - Visibilty Markers are : 
                    . public
                    . Public 
                    . Protected

            Variable Inside Class = [ Property ]
            Variable Outside Class = [ Variable ]
    */

    echo "<h1> Class Properties </h1>";
    print "<hr>";
    print "<br>";

    // creating class : 
    class AppleDevice{
        public $name;
        public $storage;
        public $color;
        public $height;
    };
    // creating objects from class :
    $iphone8 = new AppleDevice();
    echo "<pre>"; 
        print var_dump($iphone8);
    echo "</pre>";

    $iphone15 = new AppleDevice();
    echo "<pre>"; 
        print var_dump($iphone15);
    echo "</pre>"; 

    print "<br>";
    print "<br>";

    class User{
        public $name;
        public $age;
        public $height;
        public $weight;
    }
    $user_1 = new User();
    echo "<pre>";
        print var_dump($user_1);
    echo "</pre>";

    print "<br>";
    print "<br>";
    // --------------------------------------------------------------------------------------------------------------------------------

    /* 
            Class Properties Change:
            ------------------------

            [ Class ] : Class Keyword
            [ new ]   : Object Keyword
            [ -> ]    : Object Operator

            - Remember That You can add Properties doen't exeists in the class when you creating objects from the class.
    */

    class HwaweiDevice{
        // Properties with defaults values : 
        public $name = "Hwawei Nova 9s";
        public $color = "lightblue";
        public $storage = "64 GB";
    }
    // object without modifying the values of the properties :
    $hwawei = new HwaweiDevice();
    echo "<pre>";
        print var_dump($hwawei);
    echo "</pre>";

    print "<br>";

    // Object with modifying the values of the properties : 
    $hwaweiy8p = new HwaweiDevice();
    $hwaweiy8p->name="Hwawei Y8p";
    $hwaweiy8p->color="Black";
    $hwaweiy8p->storage="128 GB";
    echo "<pre>";
        print var_dump($hwaweiy8p);
    echo "</pre>";