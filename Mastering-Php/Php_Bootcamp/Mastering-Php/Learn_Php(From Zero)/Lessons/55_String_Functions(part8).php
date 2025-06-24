<?php

    /*
            - string functions (part8)  :
            ----------------------------

            - wordwrap(String[Required], width [Optional 75], Break Char[Optional "\n"], Cut Long [Optional False])
            - ord(String[Required])
            - chr(Int [Required])
            - similar_text(String One[Required], String Two [Required], Percent [Optional])
                => It Returns The Number Of Matching Characters 
    */

    echo "<h1> String Functions (part8) </h1>"; 
    print "<hr>";
    print "<br>";

    $string = "Keep going , keep studying , Don't give up . You are in the right path To_acheive_Your_Goals";

    echo "the exemple of the wordwarp function : " . "<br>" ; 
    echo "<b>" . wordwrap($string , 8 , "<br>") . "</b>"; 

    print '<br>';
    print '<br>';
    print '<br>';
    
    echo "the exemple of the wordwarp function : " . "<br>" ; 
    echo "<b>" . wordwrap($string , 2 , "<br>") . "</b>";

    print '<br>';
    print '<br>';
    print '<br>';

    echo "the exemple of the wordwarp function : " . "</b>" . "<br>" ; 
    echo "<b>" . wordwrap($string , 8 , "<br>", True);  // here will cut the ( To_achieve_Your_Gaols)

    print '<br>';
    print '<hr>';
    print '<br>';
    
    // the exemple of the ord fuction : it return to you the binary number of the character . 
    echo "the binary number of (a) is : " . ord("a") . "<br>";
    print '<br>';
    echo "the binary number of (A) is : " . ord("A") ."<br>";
    print '<br>';
    echo "the binary number of (X) is : " . ord("X") . "<br>";
    print '<br>';
    echo "the binary number of (x) is : " . ord("x") . "<br>";

    print '<br>';
    print '<br>';
    print '<br>';

    echo "the charcter of this binary number (88) is : " . chr(88) . "<br>"; 
    print '<br>';
    echo "the character of this bunary number (65) is :  " . chr(65) . "<br>";
    print '<br>';
    echo "the character of this binary number (120) is : " . chr(120) . "<br>";

    print '<br>';
    print '<br>';
    print '<br>';

    echo "the similar text between (mouhamed) and (mouuhamed) is : " . similar_text("mouhamed" , "mouuhamed") . "<br>";
    print '<br>';
    echo "the similar text between (text) and (texts)  is :" . similar_text("text" , "texts") . "<br>";  

    print '<br>';
    print '<br>';

    echo "the similar text between (user) and (userr) is : " . similar_text("user" , "userr" , $percent) . "<br>";
    print '<br>';
    echo "the percent of the similar text between (user) and (userr) is : " . $percent . "<br>";


    print '<br>';
    print '<br>';
    print '<br>';
    print '<br>';



