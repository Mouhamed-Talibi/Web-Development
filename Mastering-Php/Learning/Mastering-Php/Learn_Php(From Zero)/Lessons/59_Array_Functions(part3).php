<?php

    /*
            - Array Functions (part3) : 
            --------------------------

            - array_keys(Array[Required], Value[Optional], Type [Optional])
                Return The Array Keys
                Туре
                    False > Default => No Checking For Type
                    True > Check For Type

            - array_values (Array[Required])
                Return All The Values Of An Array
            - array_pad(Array[Required], Size [Required], Value[Required])
                Pad Array To The Specified Length With A Value
                Negative Value Add Elements Before Original Items
                If Size < Array Length Nothing Will Be Deleted 

            - array product (Array [Required])
                Calculate The Product of values In An Array => Return Int || Float
                In Mathematics, A Product Is The Result Of Multiplication
            - array_sum(Array[Required])
                Calculate The Sum Of Values In An Array
    */

    echo "<h1> Array Functions (part3) : </h1>";
    print "<hr>";
    print "<br>";

    $countries = [
        1=> "Morocco", 
        2=> "Algeria", 
        3=> "Egypt", 
        4=> "Canada", 
        5=> "United State", 
        6=> "Russe",
        7=> "Morocco"
    ];
    echo "<pre>";
    print_r(array_keys($countries));
    echo "</pre>"; 

    echo "<pre>";
    print_r(array_keys($countries , "Morocco" , true)); // the keys of Morocco that i put to it . 
    echo "</pre>"; 

    echo "The Array Value of Countries : " . "<br>";
    echo "<pre>";
    print_r(array_values($countries));
    echo "</pre>";

    $pad = ["users", "hello", 1, 7, "med"];
    echo "The Array Pad is : " . "<br>";
    echo "<pre>";
    print_r(array_pad($pad , 10 , "/"));
    echo "</pre>";

    $product = [7, 8, 9, 6, 4];
    echo "The Product of the numbers is : " . array_product($product) ;
    print "<br>";

    $sum = [7, 8, 9, 6, 4];
    echo "The sum of the numbers is : " . array_sum($sum);
