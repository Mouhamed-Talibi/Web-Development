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
    echo "The Absolute value of (10) is : " . abs(10) . "<br>";
    echo "The Absolute value of (0) is : " . abs(0) . "<br>";
    echo "The Absolute value of (-35) is : " . abs(-35) . "<br><br>";

    echo "The Random Number is : " . rand() . "<br>";
    echo "The Random Number Between 5 And 789 is : " . rand(5, 789) . "<br>";
    echo "The Random Number Between 0 And 1999 is : " . rand(0, 1999) . "<br><br>";

    echo "The Result Of 45.5 / 3 using the intdiv is : " . intdiv(45.5 , 3) . "<br>";
    echo "The Type of the (45.5 / 3 ) is : " . gettype(intdiv(45.5 , 3)) . "<br><br>";

    echo "The type of (53.5 % 9) " . gettype(fmod(53.5, 9)) . "<br>";
    echo "The Resut of (52 % 9) using the fmod funtion is : " . fmod(52, 9) . "<br>";
    echo "The type of (52 % 9) : " . gettype(fmod(52, 9)) . "<br><br>";

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
    echo "The Ceil number of (7.56) is : " . ceil(7.56) . "<br>";
    echo "The Ceil number of (- 7.56) is : " . ceil(- 7.56) . "<br>";
    echo "The Ceil number of (- 16.45) is : " . ceil(- 16.45) . "<br>";
    echo "The Ceil number of (16.45) is : " . ceil(16.45) . "<br><br>";

    echo "The floor of the (12.99) is : " . "<b>" . floor(12.99) . "</b>" . "<br>";
    echo "The floor of the (1.56) is : " . "<b>" . floor(1.56) . "</b>" . "<br>";
    echo "The floor of the (- 1.56) is : " . "<b>" . floor(- 1.56) . "</b>" . "<br>";
    echo "The floor of the (- 0.67) is : " . "<b>" . floor(- 0.67) . "</b>" . "<br><br>";

    echo "The Round number of (7.45) is : " . "<b>" . round(7.45) . "</b>" . "<br>"; // 45 < 50
    echo "The Round number of (7.50) is : " . "<b>" . round(7.50) . "</b>" . "<br>"; // 50 == 50
    echo "The Round Number of (8.45) is : " . "<b>". round(8.45, 1) . "</b>" . "<br>"; // 8.5
    echo "The Round Number of (0.11) is : " . "<b>". round(0.11, 1) . "</b>" . "<br><br>"; // 0.1 

    echo "The Round Number of (15.78) is : " . "<b>". round(15.785, 2, PHP_ROUND_HALF_UP) . "</b>" . "<br>"; // 15.79
    echo "The Round Number of (6.43) is : " . "<b>". round(6.43, 1, PHP_ROUND_HALF_DOWN) . "</b>" . "<br>"; // 6.4
    echo "The Round Number of (2.24) is : " . "<b>". round(2.24, 0, PHP_ROUND_HALF_EVEN) . "</b>" . "<br>"; // 2
    echo "The Round Number of (12.894) is : " . "<b>". round(12.834, 1, PHP_ROUND_HALF_ODD) . "</b>" . "<br><br>"; // 13.8

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

    print "<br>";
    print "<br>";