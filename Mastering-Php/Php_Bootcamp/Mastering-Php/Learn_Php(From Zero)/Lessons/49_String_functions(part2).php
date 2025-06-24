<?php

    /*
            - String fucntions (part2) : 
            ---------------------------

            - implode(Separator [Optional], Array[Required]) =>join() Is Alias
            - explode(Separator [Required], String [Required], Limit [Optional])
            - str_shuffle(String[Required])
            - strrev(String[Required])

            - trim(String[Required], CharsList[Optional])  
            - ltrim(String[Required], CharsList[Optional])
            - rtrim(String[Required], CharsList[Optional])

                --- Space **
                --- Tab \t
                New Line \n
                Carriage Return \r
                Vertical Tab "\x88"
                NULL "\0"
    */

    echo "<h1> String functions (part2) </h1>";
    print "<hr>";
    print "<br>";

    $tabs = ["id","name","age","level","departement"];
    echo "the implode function : ";
    echo "<pre>"; 
    print_r(implode("|", $tabs));
    echo "</pre>"; 

    $sentence = "hello my name is mouhamed" ; 
    echo "the explode function : " ;
    echo "<pre>";
    print_r(explode(" " , $sentence , 3));
    echo "</pre>";

    print "<br>";
    print "<br>";

    $str = "hello world" ;
    echo "the str_shuffle function : " . str_shuffle($str) . "<br>";
    echo "the str reversed function : " . strrev($str) . "<br>";  
    
    print "<br>";
    print "<br>";

    $trim = "@####Mouhamed###@";
    echo "the nae that we want to trim is : $trim  " . "<br>";
    echo "here is the name after trim function : " . trim($trim , "@#");
    print "<br>";
    print "<br>";
    
    echo "here is the name after the left trim : " . ltrim($trim , "@#");
    print "<br>";
    echo "here is the name after the right trim : " . rtrim($trim , "@#");