<?php

    /*
            - Date Time Functions (part2) : 
            -------------------------------

        - date_format()

        - Year : 
            . Y : Four Digits
            . y : Two Digits

        - Month : 
            . m : 01- 12
            . M : Text Month => 3 Letters 
            . F : Full Text 
            . t : Number of days in this month 

        - Day : 
            . d : Day of the month 01 - 31
            . j : day without leading the 0 
            . D : Text Day => 3 letters 
            . l : full text 
            . z : day of the year 0- 365
            . S : st, rd, nth, Suffic for day of the Month 

        - Time : 
            . a : Small am/pm
            . A : capital am/pm

        - Hour : 
            . g : 1- 12 
            . G : 1- 24
            . h : 01- 12
            . H : 01- 24 

        - Minutes , Seconds , Micro : 
            i : 00- 59
            s : 00 59
            u : Microseconds
    */

    echo "<h1> Date Time Functions (part2) : </h1>";
    print '<hr>';
    print '<br>';

    // setting the timezone : 
    date_default_timezone_set('Africa/Casablanca');
    $date = date_create();
    // $date = date_create("2024/7/15 22:25:12");

    echo "<b>". "Formatting the Years : " . "</b>" . "<br>";
    echo date_format($date, "Y") . "<br>";
    echo date_format($date, "y") . "<br>";
    print "<br>";

    // foratting the month : 
    echo "<b>". "Formatting the months : " . "</b>" . "<br>";
    echo date_format($date, "y-F") . "<br>";
    echo date_format($date, "y-M") . "<br>";
    echo date_format($date, "y-m") . "<br>";

    echo "the number of days of this month is : ";
    echo date_format($date, "t") . "<br>";
    print "<br>";

    // formatting the days : 
    echo "<b>". "Formatting the days : " . "</b>" . "<br>";
    echo date_format($date, "Y/m/d") . "<br>";
    echo date_format($date, "Y/m/j") . "<br>";
    echo date_format($date, "Y/m/D") . "<br>";
    echo date_format($date, "Y/m/l S") . "<br>"; 

    echo "today is the : ";
    echo date_format($date, "z") . " From the year's days". "<br>";
    print "<br>";

    // formatting the time : 
    // The hour :
    echo "<b>" . "Formatting the hour : " . "</b>" . "<br>";
    echo date_format($date, "Y-m-d H") . "<br>";
    echo date_format($date, "Y-m-d g A") . "<br>"; 
    echo date_format($date, "Y-m-d h a") . "<br>"; 
    echo date_format($date, "Y-m-d G") . "<br>"; 
    print "<br>";

    // the minutes : 
    echo "<b>" . "Formatting the minutes: " . "</b>" . "<br>";
    echo date_format($date, "d-m-Y | H:i A") . "<br>";
    echo date_format($date, "d-m-Y | g:i a") . "<br>";
    print "<br>";

    // the seconds and microseconds : 
    echo "<b>" . "Formatting the seconds : " . "</b>" . "<br>";
    echo date_format($date, "y-M-D  H : i : s  | u");


