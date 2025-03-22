<?php

    /*
            - Class Methods : 
            -----------------

            . Class has methods
            . Function Inside Class = [ Method ]
    */


    class AppleDevice{
        // properties : 
        public $inch;
        public $color;
        public $ram;
        public $storage;

        // methods :
        public function doubleHomePress() {
            echo "You Have pressed the Home Button Twice";
            print "<br>";
            echo "This is the line after the first message .";
        }
    }
    $iphone12 = new AppleDevice();
    $iphone12->inch="6 inch";
    $iphone12->color="lightblue";
    $iphone12->ram="4GB";
    $iphone12->storage="256GB";
    echo "<pre>";
        print var_dump($iphone12);
    echo "</pre>";
    // using the method : 
    $iphone12->doubleHomePress();
?>