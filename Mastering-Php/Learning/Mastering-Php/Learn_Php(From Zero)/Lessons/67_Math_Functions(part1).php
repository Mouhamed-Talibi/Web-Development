<?php

    /*
            - Math Functions (part1) : 
            --------------------------

        - abs (Number [Required])
            Absolute Value => Non Negative Value
        - mt_rand(min[Optional], max [Optional]) || rand(min [Optional], max [Optional])
            mt getrandmax() => Show Largest Possible Random Value
            Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

        - intdiv(dividend [Required], divisor [Required])
            Integer Division
            intdiv vs /
        - fmod(dividend [Required], divisor [Required])
            Floating Point Remainder (Modulo)
            fmod Vs %
    */

    echo "<h1> Math Functions (Part1) : </h1>";
    print "<hr>";
    print "<br>";

    echo "The Absolute value of (10) is : " . abs(10) . "<br>";
    echo "The Absolute value of (0) is : " . abs(0) . "<br>";
    echo "The Absolute value of (-35) is : " . abs(-35) . "<br>"; // Must be positive not negative . 

    print "<br>";
    print "<br>";

    echo "The Random Number is : " . rand() . "<br>";
    echo "The Random Number Between 5 And 789 is : " . rand(5, 789) . "<br>";
    echo "The Random Number Between 0 And 1999 is : " . rand(0, 1999) . "<br>";

    print '<br>';
    print '<br>';

    echo "The Result of the division of 10 / 5 is : ";
    echo 10 / 5 . "<br>"; 
    echo "The Type of (10 / 5) is : " . gettype(10 / 5). "<br>";
    echo "The Result of the division of 10.5/ 5 is : ";
    echo 10.5 / 5 . "<br>"; 
    echo "The Type of (10.5 / 5) is : " . gettype(10.5 / 5). "<br>";
    echo "The Result Of 45.5 / 3 using the intdiv is : " . intdiv(45.5 , 3) . "<br>";
    echo "The Type of the (45.5 / 3 ) is : " . gettype(intdiv(45.5 , 3)) . "<br>";

    print "<br>";
    print "<br>";

    echo "The result of (13  % 2 ) is : " . (13 % 2) . "<br>";
    echo "The type of the (13 % 2) is : " . gettype(13 % 2) . "<br>";
    echo "The result of (13.5  % 2 ) is : " . (13.5 % 2) . "<br>";
    echo "The type of the (13.5 % 2) is : " . gettype(13.5 % 2) . "<br>";
    echo "The Resut of (53.5 % 9) using the fmod funtion is : " . fmod(53.5, 9) . "<br>";
    echo "The type of (53.5 % 9) " . gettype(fmod(53.5, 9)) . "<br>";
    echo "The Resut of (52 % 9) using the fmod funtion is : " . fmod(52, 9) . "<br>";
    echo "The type of (52 % 9) " . gettype(fmod(52, 9)) . "<br>"; // The type is double not integer . 