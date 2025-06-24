<?php

    /*
            - Date Tilme Functions (part4): 
            --------------------------------

        - time() : 
            Unix Timestamp => Seconds since 01 Jan 1970 

        - getdate() 
            It return to you an array 

        -date_parse(time[Required])
            It return to you an array 
    */  

    echo "<h1> Date Tilme Functions (part4): </h1>";
    print "<hr>";
    print "<br>";

    date_default_timezone_set("Africa/Casablanca");

    echo "The Number of seconds since (1 Jan 1970) is : " . time() . "<br>";
    echo "The Number of minutes since (1 Jan 1970) is : " . time() / 60 . "<br>";
    echo "The Number of Hours since (1 Jan 1970) is : " . time() / 60 / 60 . "<br>";
    echo "The Number of Days since (1 Jan 1970) is : " . time() / 60 / 60 / 24 . "<br>";
    echo "The Number of Years since (1 Jan 1970) is : " . time() / 60 / 60 / 24 / 365 . "<br>"; 

    print "<br>";

    // getting the date : 
    echo "<b>" . "Getting the date : " . "</b>";
    echo "<pre>";
        print_r(getdate());
    echo "</pre>";
    $g = getdate();
    echo "The Year is : " . $g["year"] . "<br>";
    echo "The Year day is : " . $g["yday"] . "<br>";
    echo "The month is : " . $g["month"] . "<br>";

    print "<br>";

    // parsing the date 
    echo "<b>" . "Parsing the date" . "</b>";
    echo "<pre>";
        print_r(date_parse("2013-7-21 16:45:20"));
    echo "</pre>";
    $p = date_parse("2013-7-21 16:45:20");
    echo "the year is : " .$p["year"] . "<br>";
    echo "the month is : " .$p["month"] . "<br>";

    print "<br>";

    // Trying to parse false date : 
    echo "<pre>";
        print_r(date_parse("2001-7-22 156:50:23")); // error in the hour form 
    echo "</pre>";
