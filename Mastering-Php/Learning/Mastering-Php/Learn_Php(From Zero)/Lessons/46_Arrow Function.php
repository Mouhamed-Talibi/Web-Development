<?php

    /*
            - Arrow Function : 
            ------------------

        . Short synthax for anonymous function 
        . Automatic use of variables from parent scope 

        - Synthax : 
        -----------

            . Functions replaces with fn 
            . No need for curly brackets 
            . Return is Omitted 
    */

    echo "<h1> Arrow Function </h1>";
    print '<hr>';
    print '<br>';

    // exemple of the anonymous function : 
    $say_hello = function($name) {
        return "Hello $name , How Are You ? "."<br>";
    };
    echo $say_hello("Mouhamed");

    // the exemple above in the arrow function ; 
    $say_hello2 = fn($name) => "Hello $name, How Are You ? ";
    echo $say_hello2("Yassin");

    print '<br>';
    print '<br>';


    // exemple of the anonymous function with parameter in variables :
    $msg = "Hello";
    $hello = function ($name , $age) use($msg) {
        return "$msg my name is : $name , and my age is : $age";
    };
    echo $hello("Achraf" , 19) . "<br>";

    // the exemple abve in the arrow function : 
    $hello2 = fn ($name , $age) => "$msg my name is $name and my age is $age ";
    echo $hello2("Bader" , 20);
