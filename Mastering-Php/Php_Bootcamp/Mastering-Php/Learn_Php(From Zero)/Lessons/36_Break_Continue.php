<?php

    /*
            Break & Continue  :
            ___________________

        - Break    : Ends excution of (For , Foreach , while , do while or switch )
        - Continue : Skip current itteration
    */


    echo "<h1> Break & Continue : </h1>";
    print '<hr>';
    print '<br>';


    $friends = ["Khalid" , "said" , "bader" , "Achraf" , "yassin" , "Oumaima" , "sarab" , "Abdo" , "Karim" , "Hind"];
    foreach ($friends as $friend) {
        if ($friend == "Abdo") {
            break;
        }
        echo "<b> $friend </b> is one of my Friends :) " . "<br>"; 
    }

    print '<br>';
    print '<br>';

    echo "printing abdo and breaking the code : ";
    print '<br>';
    print '<br>';

    foreach ($friends as $friend) {
        echo "<b> $friend </b> is one of my Friends :) " . "<br>"; 
        if ($friend == "Abdo") {
            break;
        }
    } 

    print '<br>';
    print '<br>';

    echo "skiping the friend oumaima : ";
    print '<br>';
    print '<br>';

    $friends = ["Khalid" , "said" , "bader" , "Achraf" , "yassin" , "Oumaima" , "sarab" , "Abdo" , "Karim" , "Hind"];
    foreach ($friends as $friend) {
        if ($friend == "Oumaima") {
            continue;
        }
        echo "<b> $friend </b> is one of my Friends :) " . "<br>"; 
    }



