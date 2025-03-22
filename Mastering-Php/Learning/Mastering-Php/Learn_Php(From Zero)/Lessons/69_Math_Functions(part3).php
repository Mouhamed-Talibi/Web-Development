<?php

    /*
            - Math functions (part3) : 
            --------------------------

        - sqrt(Number[Required])
            square root 

        - min(Array[required]) || min(values[Reuqired])
            Find lowesr value 

        - max(Array[required]) || max(values[Required])
            find the highest value
    */

    echo "<h1> Math Functions (part3) : </h1>";
    print "<hr>";
    print "<br>";

    echo "The square root of 16 is : " . sqrt(16) . "<br>";
    echo "The square root of 25 is : " . sqrt(25) . "<br>"; 
    echo "The square root of 100 is : " . sqrt(100) . "<br>";

    print "<br>";
    print "<br>";

    $arr_1 = [15, 78, 24, 19, 10, 0, -556];
    $arr_2 = [0, 24, 67, 89, 23, 16, 910];
    echo "The Minumun number in the Array 1 is : " . min($arr_1) . "<br>";
    echo "The Minumun number in the Array 2 is : " . min($arr_2) . "<br>"; 

    print "<br>";
    print "<br>";

    echo "The Minumun array is : ";
    echo "<pre>";
        print_r(min($arr_1, $arr_2)); // $arr2 (because 0 < 15)
    echo "</pre>";

    print '<br>';
    print '<br>';

    echo "The maximun number in the Array 1 is : " . max($arr_1) . "<br>";
    echo "The maximun number in the Array 2 is : " . max($arr_2) . "<br>"; 

    print "<br>";
    print "<br>";

    echo "The maximun array is : ";
    echo "<pre>";
        print_r(max($arr_1, $arr_2)); // $arr1 (because 15 < 0)
    echo "</pre>";