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

    echo "<h1> How to use cookies (part1) : </h1>";
    print "<hr>";
    print "<br>";

    setcookie("color", "White", time() + (60 * 60 * 24 * 30));
    // ( / ) : It means that this cookie is available for all the paths
    setcookie("theme", "yellow & green", strtotime("+ 2 months"), "/");

    echo "<b>" . "The cookies are : " . "</b>";
    if (isset($_COOKIE)) {
        echo "<pre>";
            print_r($_COOKIE);
        echo "</pre>";
    }