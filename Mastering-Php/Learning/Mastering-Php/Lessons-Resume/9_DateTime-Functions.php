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
    echo "The defualt time zone is : " . date_default_timezone_get() . "<br>";
    date_default_timezone_set("Africa/Casablanca");
    echo "The defualt time zone is : " . date_default_timezone_get() . "<br>";
    echo "The current date is : " . date("y-m-d h:m:s") . "<br>";

    $date = date_create("", timezone_open("Africa/Cairo"));
    echo "The current date in Cairo is : " . date_format($date, "Y-M-D h,m,s") . "<br>";
    var_dump(checkdate("10", "23", "2020"));

    print "<br>";
    print "<br>";

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
    date_default_timezone_set("Africa/Casablanca");
    $date = date_create();
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
    print "<br>";

    /*
            - Date Time Functions (part3) : 
            -------------------------------

        - date_interval_create_from_date_string()
        - date_add()
        - date_sub()
        - date_modify()
    */
    date_default_timezone_set("Africa/Casablanca");
    $date = date_create();
    echo "The current date in Africa Casablanca is : " . date_format($date, "Y-M-d | h:m:s") . "<br>";
    echo "The date after adding (1-year 1-month and 5-days) : ";
    date_add($date, date_interval_create_from_date_string("1 year 1 month 5 days"));
    echo date_format($date, "Y-m-d H-i-s");
    print "<br>";

    echo "The date after adding (3-years 2-months 10-days) : ";
    date_add($date, date_interval_create_from_date_string("3 years 2 months 10 days"));
    echo date_format($date, "Y-m-d H-i-s");
    print "<br>";
    print "<br>";

    // the current date : 
    echo "the current date is : " . "<b>" . date_format($date, "Y/m/d H:i:s A") . "</b>" . "<br>";
    date_sub($date, date_interval_create_from_date_string("5 years 10 months 20 day"));
    echo "the date after subtracting (5 years 10 months 20 day) is: " . date_format($date, "Y | m | d  H:i:s") . "<br>";
    print "<br>";

    echo "the current date is : " . "<b>" . date_format($date, "Y/m/d H:i:s A") . "</b>" . "<br>";
    date_modify($date, "+ 7years");
    echo "the date after Adding 7 years is : " . date_format($date, "Y | m | d  H:i:s") . "<br>";

    print "<br>";

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
    date_default_timezone_set("Africa/Casablanca");
    echo "The Number of seconds since (1 Jan 1970) is : " . time() . " second <br>";
    echo "The Number of minutes since (1 Jan 1970) is : " . time() / 60 . " minute <br>";
    echo "The Number of Hours since (1 Jan 1970) is : " . time() / 60 / 60 . " hour <br>";

    echo "<pre>";
        print_r(getdate());
    echo "</pre>";

    $g = getdate();
    echo "The Year is : " . $g["year"] . "<br>";
    echo "The Year day is : " . $g["yday"] . "<br>";

    // parsing the date 
    echo "<b>" . "Parsing the date" . "</b>";
    echo "<pre>";
        print_r(date_parse("2013-7-21 16:45:20"));
    echo "</pre>";
    $p = date_parse("2013-7-21 16:45:20");
    echo "the year is : " .$p["year"] . "<br>";
    echo "the month is : " .$p["month"] . "<br>";

    print "<br>";

    /*
            - Date Time Functions (part5) : 
            -------------------------------

        - date_diff()
        - strtotime(Datetime, Base)
    */
    $registration = date_create("2021-6-20 14:45:25");
    $new = date_create("now");
    $diff = date_diff($registration, $new); 

    echo "<pre>";
        print_r($diff);
    echo "</pre>";

    echo "You have been membber on this group for : " . $diff->y . " Years and " .$diff->m . " Months" . "<br>"; 
    echo "You have been membber on this group for : " . $diff->h . " hours and " .$diff->i . " minutes" . "<br>";

    echo "the next year is on : ". date("y-m-d H:i:s", strtotime("next year")) . "<br>";
    echo "The tomorow day of my birthday is : " . date("Y-M-D H:i:s", strtotime("tomorrow", strtotime("2005-11-26"))); 

    print "<br>";
    print "<br>";