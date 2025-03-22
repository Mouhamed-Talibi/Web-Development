<?php

    /*
                - String Functions : (part 1) 
                -----------------------------

                    . lcfirst( string [required] ) 
                        -> lowercase first letter 

                    . ucfirst( string [required] ) 
                        -> uppercase first letter 

                    . strtolower( string [required] ) 
                        -> string to lower

                    . strtoupper( string[required] ) 
                        -> string to upper 

                    . ucwords( string[required] , Delimiters[optional] ) 
                        -> uppercase words 

                    . str_repeat( string[reauired] , count(required) ) 
                        -> string repeat 
    */

    echo "<h1> String Functions (Part1) : </h1>";
    print '<hr>';
    print "<br>";

    $name = "Mouhamed";
    echo "the lowercase first letter : " . "<b>" . lcfirst($name) . "</b>" . "<br>";
    echo "the Uppercase first letter : " . "<b>" . ucfirst($name) . "</b>" . "<br>";

    print '<br>';
    print '<br>';

    $name2 = "HAMZA" ; 
    $name3 = "achraf";
    echo "the $name2 in lowercase : " . strtolower($name2) . "<br>";
    echo "the $name2 in Uppercase : " . strtoupper($name2) . "<br>";

    print "<br>";
    print "<br>";

    $sentence = "i love php";
    echo "the uppercase first letter words : " . "<b>" . ucwords($sentence) . "</b>" . "<br>";


    print "<br>";
    print "<br>";

    $rep = "hello world <br>" ;     
    echo "let's repeat 5 times the ' $rep'  " . "<br>" . str_repeat($rep , 5) ."<br>";
