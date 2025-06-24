<?php

    /*
            - Abstraction (part2) : 
            -----------------------

                - Abstraction : 
                    Is Rules To Go On
                    Force Developers To Follow Your Mehtods
                - The Correct Way To Use The Abstract Class Is To Put In The Abstract Methods
    */

    // abstract classs : 
    abstract class MakeDevce{
        // abstrcat methods : 
        abstract public function testPerformance();
        abstract public function verifyOwner();
        abstract public function sayHello($owner);
        abstract public function rewritePassword($password);
    }

    // claas that inherit from the abstract class : 
    class Hwawei extends MakeDevce{
        public $owner;
        protected $password;

        // use the abstract methods  
        public function testPerformance() {
            echo "The Performance Was Tested 100%" . "<br>";
        }
        public function verifyOwner() {
            echo "The Owner Verified Successfully". "<br>";
        }
        public function sayHello($user) {
            $this->owner = $user;
            echo "Hello " . $user . "<br>";
        }
        public function rewritePassword($pass) {
            $this->password = $pass;
            echo "The Password is : " . $pass . "<br>";
        }
    }
    $hwawei = new Hwawei();
    $hwawei->testPerformance();
    $hwawei->verifyOwner();
    $hwawei->sayHello("mouhamed");
    $hwawei->rewritePassword("kpmo5409");

    echo "<pre>";
        print_r($hwawei);
    echo "</pre>";

    class Sony extends MakeDevce{
        public $owner;
        protected $password;

        // use the abstract methods  
        public function testPerformance() {
            echo "The Performance Was Tested 100%" . "<br>";
        }
        public function verifyOwner() {
            echo "The Owner Verified Successfully". "<br>";
        }
        public function sayHello($user) {
            $this->owner = $user;
            echo "Hello " . $user . "<br>";
        }
        public function rewritePassword($pass) {
            $this->password = $pass;
            echo "The Password is : " . $pass . "<br>";
        }
    }
    $Sony = new Sony();
    $Sony->testPerformance();
    $Sony->verifyOwner();
    $Sony->sayHello("ahmed");
    $Sony->rewritePassword("ahmed687");

    echo "<pre>";
        print_r($Sony);
    echo "</pre>";