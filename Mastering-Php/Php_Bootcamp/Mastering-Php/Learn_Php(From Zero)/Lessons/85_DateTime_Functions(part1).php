<?php

    /*
            - Date Time Functions (part1) : 
            -------------------------------

        - date_default_timezone_get()
        - date_default_timezone_set(timezone[Required])

        - date_create(Date/Time[Optional], Timezone[Optional])
            Time     : Date / Time String || Current time if null
            Timezone : Timezone String || Current time zone 

        - timezone_open(Timezone)
        - chackdate(M, D, Y) > All Required
            Validate A gerogian date

        - Will cover later : 
            . date()
            . date_fromat()
    */

    echo "<h1> Date Time Functions (part1) : </h1>";
    print "<hr>";
    print "<br>";

    echo "the default time zone is : "  . date_default_timezone_get();
    print "<br>";

    // setting the timezone : Africa/Casablanca
    date_default_timezone_set("Africa/Casablanca");
    echo "the date time zone after setting the time zone is : " . date_default_timezone_get();
    print "<br>";
    echo "the date and time now in the (Africa/casablanca) is : "  . date("y-m-d h-i-s");

    print "<br>";
    print "<br>";

    // Creating date and time in (Africa/Cairo):
    $d = date_create("", timezone_open("Africa/Cairo"));
    echo "the date in (Africa/Cairo) is : " . date_format($d, "y/m/d  h:i");

    print "<br>";
    print "<br>";

    // Checking the date : 
    echo "checking the (12, 06, 2001) : ";
    var_dump(checkdate(12, 06, 2001));
    print "<br>";

    echo "checking the date (90, 67, 2000) : ";
    var_dump(checkdate(90, 67, 2000));
    print "<br>"; 