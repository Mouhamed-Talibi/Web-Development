<?php

    /*
                Operator Precedence : 
                ---------------------

            "||"  : has a greater precedence than 'or' 
            "&&"  : has a greater precedence than 'and' 
    */

    echo "<h1> Operator Precedence : </h1> ";
    print '<br>';

    echo "the result of (2 + 4 * 5 ) is :  ".(2 + 4 * 5 ) ; // the result is : 22 -> (2 + 20) = 22
    print '<br>';
    echo "the result of ((2 + 4) * 5 ) is :  ".((2 + 4) * 5 ) ; // the result is : 30 -> (6 * 5) = 30
    print '<br>';
    print '<br>';

    echo "the result of this operator (echo 100 || false ) is : ";
    echo 100 or false ; 
    print '<br>';
    print '<br>';
    print '<br>';

    $x = -45 || true;  // here like we put (-56 || true ) first and then we assign this to the variable and while the true is true so it = 1 
    echo " the result of this operator (-56 || true ) is  :";
    echo $x;
    print '<br>';
    print '<br>';
    print '<br>';

    $b = 10 or false ; // here like we put $b = 10 or $b = false , and while $b = 10 is true so it print 10 
    echo "the result of this operator (10 or false)  is : ";
    echo $b;
    print '<br>';
    print '<hr>';


    echo "<b> The Same Thing With The 'and' </b>";