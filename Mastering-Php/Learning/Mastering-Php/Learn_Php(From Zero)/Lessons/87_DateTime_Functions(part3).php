<?php

    /*
            - Date Time Functions (part3) : 
            -------------------------------

        - date_interval_create_from_date_string()
        - date_add()
        - date_sub()
        - date_modify()
    */

    echo "<h1> Date Time Functions (part3) : </h1>";
    print '<hr>';
    print '<br>';

    date_default_timezone_set("Africa/Casablanca");

    $date = date_create();
    echo "the current date is : " . "<b>" . date_format($date, "Y/m/d H:i:s A") . "</b>" . "<br>";

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