<?php

    /*
            - methods with param Training :
            -------------------------------
    */

    class SamsungDevice{
        // properties : 
        public $inch;
        public $ram;
        public $cam;
        public $storage;

        // method : 
        public function getInfo($inch, $ram, $cam, $storage){
            $this->inch     = $inch;
            $this->ram      = $ram;
            $this->cam      = $cam;
            $this->storage  = $storage;
        }    
    }
    // object from the class : 
    $samsung9s = new SamsungDevice();
    $samsung9s->getInfo("6inch", "6GB", "124 Mp", "256Gb");

    // priting the info
    echo "<pre>";
        print var_dump($samsung9s);
    echo "</pre>";

    // new object from the class : 
    $samsungS21 = new SamsungDevice();
    $samsungS21->getInfo("6.6 inch", "12GB", "208 MP", "256GB");

    // priting the info : 
    echo "<pre>";
        print var_dump($samsungS21);
    echo "</pre>";

