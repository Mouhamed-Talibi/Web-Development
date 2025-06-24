<?php

    /*
            - Traits (part1) : 
            -------------------

                Trait => PHP 5.4 : 
                    - A Mechanism For Code Reuse In Single Inheritance Languages Such As PHP.
                    - Problem With Extending Classes, Is That U Can Only Extend One. This Is A Little Limiting.
                    - With Traits Its Possible For PHP Classes To Inherit Methods & Properties From Multiple Sources.
                    - You Cannot Extend Or Implements.
                    - You Cannot Instantiate.
                    - Its Supporting Class Not Replacing It.
                    - Can Have Methods.
                    - Have Priority Over Class

                    -> To Use The Traits We Write The Word ( use ) before the trait name 
    */ 

    trait FaceDetect{
        public function faceFeature(){
            echo "This Phone Has The Face Feature <br>";
        }
    }

    trait PreeHome{
        public function pressTwo(){
            echo "This Phone Has The Press Two Feature <br>";
        }
    }

    trait Scanner{
        public function preeScanner(){
            echo "This Phone Has The Press Scanner Feauture <br>";
        }
    }

    // Classes : 
    class Hwawei{
        use FaceDetect;
        use PreeHome;
        use Scanner;

        public function sayhello(){
            echo "Hello From Hwawei <br>";
        }
    }

    class Lg{
        use FaceDetect;

        public function sayhello(){
            echo "Hello From Lg <br>";
        }
    }

    class Itel{
        public function sayhello(){
            echo "Hello From Itel <br>";
        }
    }

    // Hwawei object : 
    $hwawei = new Hwawei();
    $hwawei->sayHello();
    $hwawei->faceFeature();
    $hwawei->pressTwo();
    $hwawei->preeScanner();
    echo "<pre>";
        print_r($hwawei);
    echo "</pre>";

    // Iphone object : 
    $iphone = new Lg();
    $iphone->sayhello();
    $iphone->faceFeature();
    echo "<pre>";
        print_r($iphone);
    echo "</pre>";

    // Sony Object : 
    $sony = new Itel();
    $sony->sayHello();
    echo "<pre>";
        print_r($sony);
    echo "</pre>";
