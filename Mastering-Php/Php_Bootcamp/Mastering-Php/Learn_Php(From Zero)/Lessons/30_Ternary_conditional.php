<?php

    /*
            - Ternary Conditional : 
            -----------------------

                - Short If 
                _ The synthax of the Ternary Conditional is : 

                    condition ? True : False ; (exemple line 17) 
    */

    echo "<h1> Ternary Conditional : </h1>";
    print "<hr>";
    print '<br>';

    echo (117 > 8 ) ?  "good" : "Not Good ";

    echo "<br>";

    echo "I love Php Because its A ";
    if (10 > 7) {
        echo "good";
    }
    else{
        echo "bad";
    }
    echo " language";

    print '<br>';
    print '<br>';

    // using the ternary conditional : 
    echo "i love php because its a ".( 12 > 6 ?  "good" : "Not Good")." language";