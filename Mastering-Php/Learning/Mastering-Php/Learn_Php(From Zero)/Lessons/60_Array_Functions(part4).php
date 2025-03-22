<?php

    /*
            - Array Functions (Part4) : 
            --------------------------

        Every Array Has An Internal Pointer To Its "Current" Element
        Which Is Initialized To The First Element.
        Functions Returns Value of Array Elegent That's Currently Pointed By The Internal Pointer

        - current (Array[Required]) > Return The Current Element In An Array
        - next(Array[Required]) > Advance The Internal Pointer
        - prev(Array[Required]) > Rewind The Internal Pointer
        - reset (Array[Required]) => Put The Internal Pointer On First Element
        - end (Array[Required]) => Put The Internal Pointer On Last Element
    */

    echo "<h1> Array Functions (part4) </h1>";
    print '<hr>';
    print '<br>';

    $friends = ["Achraf", "Khalid", "Yassin", "Ahmed", "Ahmed", "Eman", "Oumaima", "Houda"];
    echo "The curent pointer is : " ."<b>" . current($friends) ."</b>" . "<br>";
    echo "The next pointer is : " ."<b>" . next($friends) ."</b>" . "<br>";
    echo "The curent pointer is : " ."<b>" . current($friends) ."</b>" . "<br>";
    echo "The next pointer is : " ."<b>" . next($friends) ."</b>" . "<br>";
    echo "The curent pointer is : " ."<b>" . current($friends) ."</b>" . "<br>";

    print '<br>';

    echo "The Previous Friend is : " . "<b>" . prev($friends) . "</b>" . "<br>";
    echo "The Previous Friend is : " . "<b>" . prev($friends) . "</b>" . "<br>";

    print '<br>';

    echo "Let's reset the Pointer to its original place : " . "<b>" . reset($friends) . "</b>" . "<br>";
    echo "The Current friends after the reset is : " . "<b>" . current($friends) . "</b>" . "<br>";

    print '<br>';

    echo "The last Friends is : " . "<b>" . end($friends) . "</b>" . "<br>";
