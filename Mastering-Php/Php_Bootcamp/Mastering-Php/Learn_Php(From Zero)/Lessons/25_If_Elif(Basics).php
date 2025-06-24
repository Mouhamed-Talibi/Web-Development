<?php

    /*
            ( If , Elif ) Statements : 
            --------------------------

        synthax :
        ---------

        if (condition) {
            // if the condition is True , the code you write here will run (Block of code)
        }
        else {
            // I consition is False , the block of code you write here will run 
        }
    */

    echo "<h1> If , Elif , Else Statments : </h1>";
    print '<br>';

    $name = "said";
    if ($name == "mouhamed") {
        echo "your name is Mouhamed ";
    }
    elseif ($name == "said") {
        echo "your name is said  ,  welcome to our website "; // this code will be run 
    }
    else {
        echo "your name is not mouhamed "; 
    }

