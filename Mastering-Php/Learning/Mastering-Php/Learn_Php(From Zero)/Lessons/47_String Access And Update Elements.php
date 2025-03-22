<?php

    /*
                - String Access And Update Elements : 
                -------------------------------------

            - Access elements : 
            -------------------
                . String is array of characters 
                . Access elements by index " Zero based Indexing " 
                . Negative index are allowed 

            - Update elements : 
            -------------------
                . Update current elements 
                . Add new elements 

            - Search : 
            ----------
                . Single-byte AND multi-byte 
    */  


    echo "<h1> String Access And Update Elements : </h1> ";
    print "<hr>";
    print "<br>";

    $sentence = "I'm studying php now ";

    echo "the first letter in the sentence is : " . $sentence[0] . "<br>";
    echo "the second letter in the sentence is : " . $sentence[1] . "<br>";
    echo "the Third letter in the sentence is : " . $sentence[2] . "<br>";
    echo "the fooeth letter in the sentence is : " . $sentence[3] . "<br>"; 


    print "<br>";
    print "<br>";

    //  strlen($string) -> built in function returns the number of letter in the given string . 
    echo "the length of the sentence is : " . strlen($sentence) . "<br>"; 
    $name = "mouhamed";
    echo "the length of the name is : " . strlen($name) . "<br>";


    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";

    // -------------------------------------------------------------------------------------------------

    // updating string : 
    $departement = "Back end devloper";
    echo "the departement before updating is : " . $departement . "<br>";

    $departement[0] = "b";
    $departement[9] = "D" ; 
    echo "the departement after updating is : " . $departement . "<br>";

    print "<br>";
    print "<br>";

    $message = "heloo how are yo" ; 
    echo "the message before updating is : " . $message . "<br>";

    $message[0] = "H";
    $message[3] = "l";
    $message[16] = "u";
    echo "the message after updating is : " . $message . "<br>";
    

