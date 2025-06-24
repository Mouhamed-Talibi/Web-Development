<?php

    /*
            - String Functions (substr_replace) : 
            -------------------------------------

            substr_replace(String[Required], Replace With Or Insert [Required], Start [Required], Length[$])
                $ Positive Number =>  Length of String To Be Replaced
                $ Negative Number =>  Characters Left At The End After Replacement
                $0                =>  Insert Instead Of Replace
    */


    echo "<h1> String Functions (substr_replace) :  </h1>";
    print "<hr>";
    print "<br>";

    $str = "hello mon nom est mouh";
    echo "the first exemple of te substr_replace : " . "<br>" ; 
    echo "<b>" . substr_replace($str , "Hello my name is mouhamed" , 0 ) . "</b>" . "<br>"; // hello my name is mouhamed 

    print "<br>";

    echo "the second exemple of te substr_replace : " . "<br>" ; 
    echo "<b>" . substr_replace($str , "Hello world" , 0 , -1 ) . "</b>" . "<br>"; // Hello worldh 

    print "<br>";

    echo "the third exemple of te substr_replace : " . "<br>" ; 
    echo "<b>" . substr_replace($str , "i'm Here" , 6 , 5 ) . "</b>" . "<br>"; // hello i'm Hereom est mouh

    print "<br>";

    echo "the fourth exemple of te substr_replace : " . "<br>" ; 
    echo "<b>" . substr_replace($str , "Hello world" , 0 , 18  ) . "</b>" . "<br>"; // Hello worldmouh 

    print "<br>";

    echo "the fifth exemple of the sybstr_replace : " . "<br>" ; 
    echo "<b>" . substr_replace($str , "My friend is khalid" , 6 , 0 ) . "</b>" . "<br>" ; // hello My friend is khalidmon nom est mouh 

    print "<br>";
    print "<br>";


    // he exemplep of the array with the substr_replace : 
    $arr = ["one","two","three","fourth"];
    echo "<pre>";
    print_r(substr_replace($arr , [1,2,3,4] , 0 , 2));
    echo "</pre>";

