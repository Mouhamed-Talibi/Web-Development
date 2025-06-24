<?php

    /*
            - Static Properties & methods : 
            -------------------------------

                [ Static Keyword ] : 
                    - Static Properties/Methods are Used to Access Properties/Methods in a Global Scope

                    - Declaring class Properties or Methods as Static
                        Makes Them Accessible Without Needing an Instantiation of the Class.
                    
                    - Because Static Methods are Callable Without an Instance of the Object Created,
                        the Pseudo-Variable $this is not Available Inside the Method Declared as Static.
                    
                    - A Property Declared as Static Cannot be Accessed
                        With an Instantiated Class Object (Though a Static Method Can).
                    
                    - "One of the Major Benefits to Using Static Properties
                        is That They Keep Their Stored Values For The Duration of The Script."
    */

    class Hwawei{
        // static properties : 
        public static $name = "Hwawei Mate-30-Pro";
        public static $ram  = "12 Gb";
        public  $storage    = "256 GB";

        // static method : 
        public static function getInfo(){
            return "The Info Aren't Available Cause You Are Using A static Method" . "<br>";
        }
        // unstatic method : 
        public function informations($storage){
            $this->storage = $storage;
            return "The Phone Storage is : " . $storage . " GB" . "<br>";
        }
    }
    // accesing the static peoperties : 
    echo Hwawei::$name;
    print "<br>";
    echo Hwawei::$ram;
    print "<br>";
    // echo Hwawei::$storage; // here because it is a unstatic peoperty , you need to create an object to access this property
    $phone = new Hwawei();
    echo $phone->storage; // Now works 
    print "<br>";

    // trying to access the methods : 
    // echo Hwawei::informations("64"); // here is an error, because i used a non static method
    echo $phone->informations("78");
    echo Hwawei::getInfo();