<?php

    /*
            - Array Functions (part9) : 
            ---------------------------

        - array_map(Callback Function [Required], Array[Required], Other Arrays [Optional])
            Applies The Callback To The Elements Of The Given Arrays

        - array_filter(Array[Required], Callback Function[Required], Flag [Optional])
            Filter Values Of An Array Using A Callback Function
            Flag
                ARRAY_FILTER_USE_KEY
                ARRAY_FILTER_USE_BOTH
                0 Default > Send Value As Arguments
    */

    echo "<h1> Array functions (part9) : </h1>";
    print '<hr>';
    print '<br>';

    $f_names = ["mouhamed", "achraf", "khalid", "prince", "hicham"];
    $l_names = ["talibi", "fahim", "kadar", "lmissi", "amzar"];

    function hello($fname , $lname) {
        return "Hello Mr $fname $lname";
    };

    echo "Giving the Fucntion Arguments : ";
    echo "<b>". hello("yassin", "elbehja") . "</b>";

    print "<br>";
    print "<br>";

    echo "Here is array map with the Function : " . "<br>";
    echo "<pre>";
        print_r(array_map("hello", $f_names, $l_names));
    echo "</pre>";
    print "<br>";

    echo "<b>" . "Here is the array map with the anonymos function : " . "</b>" . "<br>";
    echo "<pre>";
        print_r(array_map(fn ($fname , $lname) => "Hello Mr $fname / $lname", $f_names, $l_names));
    echo "</pre>";

    print '<br>';
    print '<br>';
    print '-----------------------------------------------------------------------------------------------------';
    print '<br>';
    print '<br>';

    // -----------------------------------------------------------------------------------------------------------------------------

    $nums = [
        1 => 5, 
        4 => 20, 
        6 => 30, 
        2 => 25,  
        3 => 15,
        5 => 10,
    ];

    function check_num($number) {
        if ($number >= 15) {
            return $number;
        }
    };

    echo "<b>". "The Values That are Greater than or Equal 15 : " ."</b>". "<br>";
    echo "<pre>";
        print_r(array_filter($nums , "check_num"));
    echo "</pre>";
    print "<br>";

    echo "<b>" . "The Arryay filter ysing the filte by key and value :" . "</b>" . "<br>";
    echo "<pre>";
    print_r(array_filter($nums, "check_num", ARRAY_FILTER_USE_BOTH));
    echo "</pre>";
    print "<br>";
    
    echo "<b>" . "The array filter using the filter by key :" . "</b>" . "<br>";
    echo "<pre>";
        print_r(array_filter($nums, "check_num", ARRAY_FILTER_USE_KEY));
    echo "</pre>";
    print "<br>"; 

