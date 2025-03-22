<?php

    /*
            - Pseudo Variable ($this) : 
            ----------------------------

            _ $this = [ Pseudo Variable = Refer to object properties ]
    */

    class AppleDevice{
        // properties : 
        public $inch;
        public $storage;
        public $ram;

        // methods : 
        public function getInfo() {
            echo "The Iphone Screen Inch is : " . $this->inch . "<br>";
            echo "The Iphone Storage is : " . $this->storage . "<br>";
        }

        // method 2 : 
        public function getOwnerName($owner){
            if (strlen($owner) <= 3) {
                echo "The Owner Name Cannot Be Less Or Equal Three Chars.";
            } else {
                echo "The Owner Name is set : " . $owner . "<br>";
            }
        }
    }
    $iphone8 = new AppleDevice();
    $iphone8->storage = "64GB";
    $iphone8->inch = "5.5 inch";

    $iphone8->getInfo();
    $iphone8->getOwnerName("Mouhamed Talibi");

?>