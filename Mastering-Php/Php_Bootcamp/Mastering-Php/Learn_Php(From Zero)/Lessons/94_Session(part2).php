<?php

    /*
            - Session (part2) : 
            -------------------
    */

    echo "<h1> Session (part2) : </h1>";
    print "<hr>";
    print "<br>";

    session_start();
    $_SESSION["name"] = "Mouhamed";

    // Views number : 
    if (isset($_SESSION["views"])) {
        $_SESSION["views"]++;
    }
    else {
        $_SESSION["views"] = 1;
    }

    echo "hello "  . $_SESSION['name'] . " Your page views are : " . $_SESSION["views"] ;  