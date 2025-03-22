<?php

    /*
            - Incrementing & Decrementing Opertaors : 
            ----------------------------------

        Increase & Decrease Values : 
        - When we write the ++ or the -- after the variable , we call it the post(increment  , decrement)
        - when we write the ++ or -- before the variable , we call it the pre(increment , decrement)
    */

    $likes = 0;
    $likes ++;
    $likes ++;
    $likes ++;
    $likes ++;
    $likes --;

    echo "The number of likes is : $likes"; // Result is 3 
    print '<br>';
    print '<br>';

    $a = 0;
    echo "this is the post incerement :".$a++; // The post Increment  
    print '<br>';
    echo "this is the result after the post increment : ".$a; // 
    print '<br>';

    echo "this is the post decrement : ".$a--; // The post decrement 
    print '<br>';
    echo "this is the result after the post decrement : ".$a; // 
    print '<br>';
    print '<br>';

    $b = 0;
    echo "this is the pre incerement : ".++$b; // 1
    print '<br>';
    echo "this is the result after the pre increment :".$b; // 1 
    print '<br>';

    echo "this is the pre decrement : ".--$b; // 0 
    print '<br>';
    echo "this is the result after the pre dercerement : ".$b; // 0 
    print '<br>';
    print '<br>';
