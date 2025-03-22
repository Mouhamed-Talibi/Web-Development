<?php

    /*
            - Array Functions (part8) :
            ---------------------------

        - sort (Array[Required], Flag [Optional])
            Sort An Indexed Array In Ascending Order
        - rsort(Array[Required], Flag [Optional])
            Sort An Indexing Array In Descending Order

        - asort (Array[Required], Flag[Optional])
            Sort An Associative Array In Ascending Order According To The Value
        - arsort (Array[Required], Flag [Optional])
            Sort An Associative Array In Descending Order According To The Value

        - ksort (Array[Required], Flag[Optional])
            Sort An Associative Array In Ascending Order According To The Key
        - krsort (Array[Required], Flag[Optional])
            Sort An Associative Array In Descending Order According To The Key

        - natsort(Array[Required], Flag[Optional])
            Sorts An Array By Using A "Natural Order" Algorithm

        Practice : 
            - Flags 
            - Our own sorting function
    */

    echo "<h1> Array functions (part8) </h1>";
    print "<hr>";
    print "<br>";

    $nums = [18, 25, 26, 51, 14, 10, 9, 1];

    echo "Sorting the data in Ascending order : " . "<br>";
    sort($nums);
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    print "<br>";

    echo "Sorting the nums in Descending order : " . "<br>";
    rsort($nums);
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    print "<br>";

    print "<br>";

    // ------------------------------------------------------------------------------

    $data = ["m"=>"Mouhamed", "y"=>"Yassin", "a"=>"Ahmed", "b"=>"Bader", "s"=>"Sarab"];

    echo "Sorting the assossiative array in Ascending ordetr : " . "<br>";
    asort($data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    print "<br>";

    echo "Sorting the assossiative array in Descending Order : " . "<br>";
    arsort($data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    print "<br>";

    print "<br>";

    // --------------------------------------------------------------------------------

    $sorting_k = [1=>"Users", 4=>"students", 2=>"website", 3=>"friends"];

    echo "Sorting the array according to the keys in Ascending order :" . "<br>";
    ksort($sorting_k);
    echo "<pre>";
    print_r($sorting_k);
    echo "</pre>";
    print "<br>";

    echo "Sorting the array according to the keys in Descending order :" . "<br>";
    krsort($sorting_k);
    echo "<pre>";
    print_r($sorting_k);
    echo "</pre>";
    print "<br>";

    print "<br>";

    // ------------------------------------------------------------------------------------

    $array = ["Friend1" , "Friend20", "Friend3"];
    echo "sorting the array by the sort function : " . "<br>";
    sort($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    print "<br>";

    echo "Soring the array to the natural sort : " . "<br>";
    natsort($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    print "<br>"; 
