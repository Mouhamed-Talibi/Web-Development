<?php

    /* Assignement opertaors : 
    -------------------------

        - Used to Write value to another

        $a   +=   $b   -> addition 
        $a   -=   $b   -> subtraction
        $a   *=   $b   -> Multiplication 
        $a   /=   $b   -> Division 
        $a   %=   $b   -> Modulus 
        $a  **=   $b   -> Exponentiation   
    */

    $a = 167 ;
    $a = $a + 56 ; // The same as $a += 56 
    $a += 56 ;
    echo "the result of a variable is : ".$a."<br>";

    $b = 18 ; 
    $b **= 3 ;
    echo "the result of the b variable is : ".$b."<br>";

    $c = -45 ;
    $c /= 2 ;
    echo "the result of the c variable is : ".$c."<br>";

    $d = 233 ;
    $d *= 3;
    echo "the result of the d variable is : ".$d."<br>";

    $e = 617 ;
    $e %= 45;
    echo "the result of the e variable is : ".$e."<br>";