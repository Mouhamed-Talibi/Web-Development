<?php

    /*
            - String functions (part3) : 
            ----------------------------

            - chunk_split( String[Required] , Length [Optional], End [Optional])
            - strlen( String[Required] )
            - str_split( String[Required] , Length [Optional] )
            - strip_tags( String[Required] , Allowed [Optional])
            - n12br( String[Required] , XHTML [Optional] )
    */

    echo "<h1> String functions (par3) : </h1> " ; 
    print "<hr>";
    print "<br>";

    $str = "My name is mouhamed"; 
    echo "the check_split function  : " . chunk_split($str , 2 , "@.") . "<br>" ; 
    print "<br>";

    echo "the strlen function : " . strlen($str) . "<br>";
    print '<br>';

    echo "the str_split function : " ; 
    echo "<pre>";
    print_r(str_split($str , 6));
    echo "</pre>";

    print "<br>";
    print "<br>";


    echo "the str_tags : " . "<br>" ; 
    $str2 = "<h2> Hello <b> Mouhamed </b> </h2> " ;

    echo "this is the str2 with the tags : " . $str2;
    print "<br>";

    echo "this is the str2 without the tags : " . strip_tags($str2);
    print "<br>";
    echo "this is the str2 with the allowed tags from the function  : " . strip_tags($str2 , "<h2>, <b>");
    
    print "<br>";
    print "<br>";

        // the exemple of the nl2br function : 
    echo nl2br("hello \n My name is : mouhamed \n And my age is 19 . ");
