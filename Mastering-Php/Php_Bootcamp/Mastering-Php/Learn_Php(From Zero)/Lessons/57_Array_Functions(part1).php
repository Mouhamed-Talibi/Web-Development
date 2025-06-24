<?php

    /*
            - Array functions (Pat1) :
            -------------------------

            - array_chunk (Array[Required], Length [Required], Preserve_Key [Optional])
                Split An Array Into Chunks [Return A Multidimensional Indexed Array]
                    Preserve Key
                    [False > Default] Reindex The Keys
                    [True] Preserve The Keys

            - array_change_key_case(Array[Required], Case [Optional])
                Changes The Case of All Keys In An Array
                Case
                    [CASE_LOWER => Default] Changes The Keys To Lowercase
                    [CASE_UPPER] Changes The Keys To Uppercase

            - array_combine(Array_Of_Keys [Required], Array_of_Values[Required])
            - array_count_values (Array[Required])
                Counts All The Values Of An Array
    */


    echo "<h1> Array Functions (part1) </h1>";
    print '<hr>';
    print "<br>";

    $friends = ["yassin", "ahmed", "khalid", "achraf", "bader", "mouhamed"];
    echo "<pre>";
    print_r(array_chunk($friends , 2));
    echo "</pre>";

    $countries = ["M"=>"Morocco" , "E"=>"Egypt" , "C"=>"Canada" , "Us"=>"United State" , "A"=>"Algeria"];
    echo "<pre>";
    print_r(array_chunk($countries , 2 , true )); // true for saving the keys of the countries that i put in the array . 
    echo "</pre>";

    echo "the function : array_change_key_case : " . "<br>";
    echo "<pre>";
    print_r(array_change_key_case($countries)); // the default id the case_lower
    echo "</pre>";
    echo "<pre>";
    print_r(array_change_key_case($countries , CASE_UPPER)); // here is the case_upper
    echo "</pre>";

    // ---------------------------------------------------------------------------------------------------------

    echo "<b>". "the function array_combine : " . "</b>" .  "<br>";
    $keys = ["A" , "E" , "F"];
    $values = ["Arabic" , "English" , "French"];
    echo "<pre>";
    print_r(array_combine($keys , $values));
    echo "</pre>";

    $letters = [1 , "B" , 4 , 4 , 1 , "A" , "C" , "B" ];
    echo "<pre>";
    print_r(array_count_values($letters));  
    echo "</pre>";