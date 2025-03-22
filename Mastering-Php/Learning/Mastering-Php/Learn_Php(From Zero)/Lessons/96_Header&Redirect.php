<?php

    /*
            - Header and Redirect : 
            -----------------------

        - Send raw HTTP header ro client to manipulate info sent by web server before any output 
        - You can use to control Cache or force file download 

        . header(Header[REQUIRED], Replace[OPTIONAL]= True, Response_code[OPTIONAL])
    */

    echo "<h1> Header and Redirect </h1>";
    print '<hr>';
    print "<br>";   

    // header("HTTP/1.0 404 Not Found");
    // header("expires: Sat, 01 Jan 2022 01:00:00");
    // header("cache-control: no-cache, must-revalidate");
    // echo "<a href='test.php'>Test</a>";
    // header("Refresh:5; url=test.php");
    header("Location: test.php");
    exit; 
    // it is important to exit from the header !!

