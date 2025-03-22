<?php

    /*
            - How to use cookies (part1) : 
            -------------------------------
        Examples : 
            - Popup
            - Style
            - Custom Settings 
            - Remeber me => Login 

        setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only)
        - Name
        - Value
        - Expire
        - Path
        - Domain
        - Secure 
        - HTTP_Only

        Important : 
            - Do not store sensitive Informations 
            - Not everything saved to Cookies 
        Search : 
            - Infinite cookie
    */
    setcookie("color", "White", time() + (60 * 60 * 24 * 30));
    // ( / ) : It means that this cookie is available for all the paths
    setcookie("theme", "yellow & green", strtotime("+ 2 months"), "/");
    setcookie("name", "mouhamed");

    echo "<b>" . "The cookies are : " . "</b>";
    if (isset($_COOKIE)) {
        echo "<pre>";
            print_r($_COOKIE);
        echo "</pre>";
    }

    print "<br>";

    /*
            - Cookies (part2) : 
            -------------------

        . Modify
            - if we want to modify a cookie we just modify its value . 
        . Delete
            we can delete the cookie by setting the expired time 
        . Add array
    */
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