<?php

    /*
            - Class Canstants : 
            -------------------

                . Canstants : Are Things That cannot Be Change After They Set.
                . Best Practice To Write Te Canstant Name UPPERCASE.
                - [ self ] : It Refer To Class Constants
                - [  ::  ] : Scope Resolution Operator ( Paamayim nekudotayim = Double Colon )

                . Self : 
                    - Refer to current class. 
                    - Access Static Members.
                    - Not Use ($) Because its not present variable but present Class Construction

                . $this : 
                    - Refer to current object 
                    - Access Non Static members
                    - Use ($) Because it represent a variable
    */


    class AppleDevice{
        // properties : 
        public $ram;
        public $color;
        public $inch;
        public $ownername;

        // constants : 
        const MINOWNERNAME = 5;
        const MAXOWNERNAME = 15;

        // methods : 
        public function getOwnerName() {
            if (strlen($this->ownername) < self::MINOWNERNAME) {
                echo "The Name Cannot Be less than " . self::MINOWNERNAME . " Chars";
            } elseif (strlen($this->ownername) > self::MAXOWNERNAME) {
                echo "The Name Cannot be Langer Than " . self::MAXOWNERNAME . " Chars";
            } else {
                echo "The Owner name has been Set " . $this->ownername . "<br>";
            }
        }
    }

    // object from the class : 
    $iphone8 = new AppleDevice();
    $iphone8->ownername = "Mouhamed Talibi";
    $iphone8->getOwnerName();

    // we can echo the constants like this :
    echo "The min owner name " . AppleDevice::MINOWNERNAME;
    print "<br>";
    echo "The max owner name : " . $iphone8::MAXOWNERNAME;
?>