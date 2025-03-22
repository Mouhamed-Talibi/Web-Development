<?php

    /*
            - Array functions (part2) : 
            ---------------------------

        - array_reverse(Array [Required], Preserve [Optional])
            Reverse Array Elements
        - array flip(Array[Required])
            Exchange Keys With Its Values

        - count (Array[Required], Mode [Optional])
            Count Array Elements
            Mode : 
                0 > Default => Does Not Count Elements Of Multidimensional Arrays
                1 > Count Elements of Multidimensional Arrays

        - in_array(Search[Required], Array[Required], Type [Optional])
            Checks If A Value Exists In An Array
        - array_key_exists(Key [Required], Array[Required])
            Check If Key Is Exists
    */


    echo "<h1> Array functions (part2) : </h1>";
    print '<hr>';
    print '<br>';

    $array = [1=>"data" , 2=>"users" , 3=>"tables" , 4=>"money" , 5=>"students"];
    echo "<pre>";
    print_r(array_reverse($array , true)); // true for savaing the order of the keys that i put 
    echo "</pre>";
    echo "<pre>";
    print_r(array_reverse($array));  // without saving the keys . 
    echo "</pre>";

    echo "<b>" . "the array flip is : " . "</b>" . "<br>";
    echo "<pre>";
    print_r(array_flip($array));
    echo "</pre>";

    $counting = ["friends" , "users" , "database", "array" , "functions" , "help" , [1 , 2 , 3]];
    echo "the number of elements in the array with the 0 mode is : " . count($counting) . "<br>"; // 10
    echo "the number if the elements in the array with the 1 mode is : " . count($counting , 1) . "<br>"; // 10

    print "<br>";

    $search = [4,6,"8",8];
    if (in_array("4" , $search , True)) {
        echo "the number '4' is found"."<br>";
    } else {
        echo "the number '4' is not found"."<br>";
    }

    if (in_array(4 , $search)) {
        echo "the number 4 is found ";
    }
    print "<br>";

    $prises = [
        "Glasses" => 150 ,
        "Laptop" => 2150 , 
        "Pencil" => 20 , 
        "Shirt" => 150 , 
        "Phone" => 1500
    ];
    if (array_key_exists("Laptop" , $prises)) {
        echo "the Laptop is Found , And its price is : " . $prises["Laptop"] . "Dh";
    }