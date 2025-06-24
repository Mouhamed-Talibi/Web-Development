<?php

    /*
            - Math Functions (part2) : 
            --------------------------

        - ceil (Number[Required])
            Round Up To Integer
        - floor(Number[Required]) 
            Round Down To Integer

        - round(Number[Required], Precision[Optional], Mode[Optional])
            Round up to integer
            Mode : 
                PHP_ROUND_HALF_UP
                PHP_ROUND_HALF_DOWN
                PHP_ROUND_HALF_EVEN  
                PHP_ROUND_HALF_ODD

        - ceil, floor, round -> Return Double 

    */

    echo "<h1> Math Functions (part2) : </h1>";
    print "<hr>";
    print "<br>";

    echo "The Ceil number of (7.56) is : " . ceil(7.56) . "<br>";
    echo "The Ceil number of (16.45) is : " . ceil(16.45) . "<br>";
    echo "The Ceil number of (0.5) is : " . ceil(0.5) . "<br>";

    print "<br>";

    // To Understan this example remeber this (-5  Is Greater than -6 ) Because it is the approach to the positive values. 
    echo "The Ceil number of (- 7.56) is : " . ceil(- 7.56) . "<br>";
    echo "The Ceil number of (- 16.45) is : " . ceil(- 16.45) . "<br>";
    echo "The Ceil number of (- 0.5) is : " . ceil(- 0.5) . "<br>";

    print "<br>";
    print "<br>";

    echo "The floor of the (12.99) is : " . "<b>" . floor(12.99) . "</b>" . "<br>";
    echo "The floor of the (1.56) is : " . "<b>" . floor(1.56) . "</b>" . "<br>";
    echo "The floor of the (0.67) is : " . "<b>" . floor(0.67) . "</b>" . "<br>";

    print "<br>";

    // here it will the opposit because we round down 
    echo "The floor of the (- 12.89) is : " . "<b>" . floor(- 12.89) . "</b>" . "<br>";
    echo "The floor of the (- 1.56) is : " . "<b>" . floor(- 1.56) . "</b>" . "<br>";
    echo "The floor of the (- 0.67) is : " . "<b>" . floor(- 0.67) . "</b>" . "<br>";

    print "<br>";
    print "<br>";
    print "<br>";

    // ------------------------------------------------------------------------------------------------------------------------------------

    echo "The Round number of (7.45) is : " . "<b>" . round(7.45) . "</b>" . "<br>"; // 45 < 50
    echo "The Round number of (7.50) is : " . "<b>" . round(7.50) . "</b>" . "<br>"; // 50 == 50
    echo "The Round number of (7.68) is : " . "<b>" . round(7.68) . "</b>" . "<br>"; // 68 > 50

    print "<br>";
    print "<br>";

    echo "The Round Number of (8.45) is : " . "<b>". round(8.45, 1) . "</b>" . "<br>"; // 8.5
    echo "The Round Number of (0.11) is : " . "<b>". round(0.11, 1) . "</b>" . "<br>"; // 0.1 
    echo "The Round Number of (0.11) is : " . "<b>". round(0.11, 0) . "</b>" . "<br>"; // 0

    print "<br>";
    print "<br>";

    echo "The Round Number of (2.50) is : " . "<b>". round(2.50, 2) . "</b>" . "<br>"; // 2.5
    echo "The Round Number of (2.22) is : " . "<b>". round(2.22, 2) . "</b>" . "<br>"; // 2.22
    echo "The Round Number of (- 2.22) is : " . "<b>". round(- 2.22, 2) . "</b>" . "<br>"; // - 2.22

    print "<br>";
    print "<br>";

    echo "The Round Number of (15.78) is : " . "<b>". round(15.785, 2, PHP_ROUND_HALF_UP) . "</b>" . "<br>"; // 15.89
    echo "The Round Number of (6.43) is : " . "<b>". round(6.43, 1, PHP_ROUND_HALF_DOWN) . "</b>" . "<br>"; // 6.4
    echo "The Round Number of (2.24) is : " . "<b>". round(2.24, 0, PHP_ROUND_HALF_EVEN) . "</b>" . "<br>"; // 2
    echo "The Round Number of (12.894) is : " . "<b>". round(12.834, 1, PHP_ROUND_HALF_ODD) . "</b>" . "<br>"; // 13.8

    print "<br>";
    print "<br>";

