<?php

    /*
            Function Introdcution & Dry Concept : 
            -------------------------------------

                - DRY -> Don't Repeat Yourself 
                - Introduction 
                - Argument 
                - Parameter
    */

    echo "<h1> Function Introdcution & Dry Concept :  </h1>";
    print '<hr>';
    print '<br>';

    function hello($name) {
        echo "hello Mr $name , welcome to our website " . "<br>";
    }

    $name = "mouhamed";
    hello($name);


    hello("yassin");
    hello("achraf");
    hello("Badre");
    hello("Khalid");


    print '<br>';
    print '<br>';

    function sum($digit1 , $digit2) {  // $digit1 , $digit2 are the parameters 
        echo "the sum of this operator is : ";
        echo $digit1 + $digit2 ;
    }

    $d1 = 67 ; 
    $d2 = 45 ;
    sum($d1 , $d2);  // $d1 , $d2  are the arguments 


    print '<br>';
    print '-----------------------------------------------------------------------------------------------';
    print '<br>';

    function say_welcome($age, $name) {
        if ($age >= 18) {
            echo "hello $name , Welcome To our Website ";
        }
        else {
            echo "hello $name , You are not Welcome To our Website";
        }
    }

    say_welcome(10 , "mouhamed") ;