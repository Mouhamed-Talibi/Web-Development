<?php

    /*
            If statements (Real Life exemples) : 
            ------------------------------------
    */

    echo "<b> the exemple of the if  : </b>";
    print '<br>';

    // if : 
    $page = "Home";
    if ($page == "Home") {
        echo "welcome , this is the Home Page :) ";
    }

    print '<br>';
    print '<br>';

    // the exemple fof the if , else :
    echo " <b> the exemple of the if , else statements : </b>";
    print '<br>';

    $name = "Mouhamed";
    if ($name == "Mouhamed") {
        echo "Hello Mouhamed , Welcome To Our website :) ";
    }

    print '<br>';
    print '<br>';

    // the exemple of the if , elseif , else : 
    echo "<b> this is the exemple of the if , elseif , else : </b>";
    print '<br>';

    $lang = "French";
    if ($lang == "Arabic") {
        echo "مرحبا بك يا صديقي";
    } 
    elseif ($lang == "French") {
        echo "bienvenu mon ami ";
    }
    elseif ($lang == "English") {
        echo "hello my friend ";
    }
    else {
        echo "Unkown Language ): ";
    }