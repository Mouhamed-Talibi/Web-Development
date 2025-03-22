<?php

    /*
            - Array Functions (part 10 ) : 
            ------------------------------

        - array_reduce(Array[Required], Callback Function [Required], Initial Value[Optional])
            Reduce The Array To A Single Value
            Carry > The Value Of The Previous Iteration || Initial Value
            Item > The Value Of The Current Iteration
    */


    echo "<h1> Array Functions  (Part 10) : </h1>";
    print "<hr>";
    print "<br>";

    function sum($carry, $item) {
        echo "The Initial Value is : " . $carry . "<br>";
        echo "The Item That Will Add To The Initial Value is : " . $item . "<br>";
        echo "The Result Of the Sum Is : " . $carry + $item . "<br>";
        echo "-------------------------------------------------------------------------------------------------- <br>";
        return $carry + $item ; 
    };

    $nums = [10, 56, 24, 78, 15, 25];
    echo "The Result Of The Sum is : " . array_reduce($nums, "sum");
    print "<br>";
    print "<br>";
    print "<br>";

    // give the array reduce an initial value : 
    echo "The Result is : " . array_reduce($nums, "sum", 567);
    print "<br>";
    print "<br>";
    print "<br>";

    // -----------------------------------------------------------------------------------------------------------------------------