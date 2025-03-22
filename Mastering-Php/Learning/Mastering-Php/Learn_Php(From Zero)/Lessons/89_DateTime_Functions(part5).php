<?php

    /*
            - Date Time Functions (part5) : 
            -------------------------------

        - date_diff()
        - strtotime(Datetime, Base)
    */

    echo "<h1> Date Time Functions (part5) : </h1>";
    print "<hr>";
    print "<br>";

    date_default_timezone_set("Africa/Casablanca");

    $registration = date_create("2021-6-20 14:45:25");
    $new = date_create("now");
    $diff = date_diff($registration, $new); 

    echo "<pre>";
        print_r($diff);
    echo "</pre>";
    echo "You have been membber on this group for : " . $diff->y . " Years and " .$diff->m . " Months" . "<br>"; 
    echo "You have been membber on this group for : " . $diff->h . " hours and " .$diff->i . " minutes" . "<br>";
    
    print "<br>"; 

    // The strtotime : 
    echo "the next week is on : ". date("y-m-d H:i:s", strtotime("next week")) . "<br>";
    echo "the next month is on : ". date("y-m-d H:i:s", strtotime("next month")) . "<br>";
    echo "the next year is on : ". date("y-m-d H:i:s", strtotime("next year")) . "<br>";
    echo "The tomorow day of my birthday is : " . date("Y-M-D H:i:s", strtotime("tomorrow", strtotime("2005-11-26"))); 
