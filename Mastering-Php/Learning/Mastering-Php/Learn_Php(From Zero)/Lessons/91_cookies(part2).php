<?php

    /*
            - Cookies (part2) : 
            -------------------

        . Modify
            - if we want to modify a cookie we just modify its value . 

        . Delete
            we can delete the cookie by setting the expired time 

        . Add array
    */

    echo "<h1> Cookies (part2) </h1>";
    print "<hr>";
    print "<br>";

    // setcookie("style", "red");
    echo "<b>" . "The Cookies: " . "</b>";
    echo "<pre>";
        print_r($_COOKIE);
    echo "</pre>";

    // updating the cookie : 
    setcookie("style", "black");
    echo "<b>" . "The cookies : " . "</b>";
    echo "<pre>";
        print_r($_COOKIE);
    echo "</pre>";

    // deleting the cookie after 10 seconds :
    setcookie("color", "yellow", time()+10);
    print "<b>" . "The cookie : " . "</b>";
    echo "<pre>";
        print_r($_COOKIE);
    echo "</pre>";

    // adding array : 
    setcookie("lang[name]", "English");
    setcookie("lang[level]", "Intermediate");
    setcookie("lang[mother]", "Arabic");

    print "<b>" . "The langs : " . "</b>";
    echo "<pre>";
        print_r($_COOKIE);
    echo "</pre>";

    if (isset($_COOKIE['lang'])) {
        echo "he language name is : " . $_COOKIE["lang"]["name"];
    } 
