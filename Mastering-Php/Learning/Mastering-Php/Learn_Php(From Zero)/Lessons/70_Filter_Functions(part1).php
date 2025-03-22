<?php

    /*
            - Filter Functions (part1) : 
            --------------------------

        - filter_list()
            Return a list of all supported filters. 

        - filter_id(filter_Name[Required])

        - filter_var(Value[Required], Filter[Optional], Options[Optional])
            filters a variable with a specific filter 
    */

    echo "<h1> Filter Functions (part1) : </h1>"; 
    print "<hr>";
    print "<br>";

    echo "The List Of Filter Functions is : ";
    echo "<pre>";
        print_r(filter_list());
    echo "</pre>";

    print "<br>";
    print "<br>";

    echo "The id Of The boolean filter is : " . filter_id("boolean") . "<br>";
    echo "The id Of The string filter is : " . filter_id("string") . "<br>";
    echo "The id Of The float filter is : " . filter_id("float") . "<br>"; 

    print "<br>";
    print "<br>";

    $data = True; // True || "on" || "yes" || 1 => All of them will be true 
    if (filter_var($data, FILTER_VALIDATE_BOOL)){
        echo "This Is True :) ";
    } 
    else {
        echo "This Is False ): ";
    };

    print "<br>";

    $data = "on1";
    if (filter_var($data, FILTER_VALIDATE_BOOL)){
        echo "This Is True :) ";
    } 
    else {
        echo "This Is False ): ";
    }

    print "<br>";

    $data = "yes"; 
    if (filter_var($data, FILTER_VALIDATE_BOOL)){
        echo "This Is True :) ";
    } 
    else {
        echo "This Is False ): ";
    }