<?php

    /*
            - Array Fuctions (part6) :
            -------------------------

        - array_shift(Array[Required])
            Shift An Element Off The Beginning of Array
            This Function Will Reset => "reset()" The Input Array Pointer

        - array_pop(Array[Required])
            Pop The Element Off Ehe End Of Array
            This Function Will Reset => "reset()" The Input Array Pointer

        - array_push(Array[Required], Values[Optional])
            Push One Or More Elements Onto The End Of Array
            You Can Use $arr[]

        - array_unshift(Array [Required], Values [Optional])
            Add One Element In The Beginning Of An Array
            This Function Will Reset => "reset()" The Input Array Pointer
    */

    echo "<h1> Array Functions (part6) </h1>";
    print "<hr>";
    print "<br>";

    $names = ["mouhamed", "Yassin", "Abdo", "Hamza", "Youssef", "zouhir"];

    echo "The Array Before Shifting the First element :" . "<br>";
    echo "<pre>";
    print_r($names);
    echo "</pre>";
    print "<br>";

    echo "There is The Array After Shifting The first Element : " . "<br>";
    $first = array_shift($names); // shift and Re-Indexing the keys 
    echo "<pre>";
    print_r($names); 
    echo "</pre>";

    print "<br>";
    print "<br>";

    echo "This is the Array Before Poping The last element : ";
    echo "<pre>";
    print_r($names); 
    echo "</pre>";
    print '<br>';

    echo "There is the Array after poping the last element : " . "<br>";
    $last = array_pop($names);
    echo "<pre>";
    print_r($names);
    echo "</pre>"; 

    print '<br>';
    print '--------------------------------------------------------------------------------------------------------';
    print "<br>";

    // The exemeples for pushing : 

    $langs = ["Arabic"];

    echo "This is the Array before pushing the data into the end : ". "<br>";
    echo "<pre>";
    print_r($langs);
    echo "</pre>";
    print "<br>";

    echo "This is the array After Pushing The data into the end of it:" . "<br>";
    $push_end = array_push($langs , "French");
    echo "<pre>";
    print_r($langs);
    echo "</pre>";
    print '<br>';


    echo "This is the array After Pushing The data Into The begining of it : " . "<br>";
    $push_bigining = array_unshift($langs , "English", "Hindi");
    echo "<pre>";
    print_r($langs);
    echo "</pre>";  


