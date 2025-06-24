<?php

    /*
            - String functions ( part6 ) :  
            ------------------------------

        . Str_replace ( Find[required] , Replace with[required] , Data[required] , Replace count[optional] )  -> Case Sensitive 
        . str_ireplace ( Find[required] , Replace with[required] , Data[required] , Replace Count[Optional] ) 
    */

    echo "<h1> String functions ( part6 ) </h1> " ;
    print "<hr>";
    print "<br>";

    $str = "H@llo world how ar@ #ou ? " ; 
    echo "the string after replacing bu the str_replace functions would be like : " . "<b>" . str_replace("@" , "e" ,$str , $replaced) . "</b>";
    print '<br>';
    echo "the number of replaced character is : " . $replaced;

    print '<br>';
    print '<br>';
    
    echo "the string after replacing : " . "<b>" . str_replace(["@" , "#"], ["e" , "y"] , $str , $replaced) . "</b>"; 
    print "<br>";
    echo "the number of replaced character is : " . $replaced; 

    print '<br>';
    print '<br>';

    $str_2 =  "hallo ures  mouha nce " ;
    echo "the str_2 afte replacing : " ; 
    echo "<b>" . str_replace(["hallo","ures","mouha","nce"] , ["hello", "user","mouhamed","nice"] , $str_2) . "</b>";

    print "<br>";
    print "<br>";

    echo "<pre>";
    print_r(str_replace("one" , 1 , ["one","two","three","one","one"]));
    echo "</pre>";

    echo "<pre>";
    print_r(str_replace(["one" , "two", "three"] , [1,2], ["one","two","three","one","one"])); // it make the empty string for the additional items
    echo "</pre>";

    // remember the str_replace is case_sensitive .
    echo "the exemple of the case sensitive : " ; 
    $str_3 = "Hallo Wlrd"  ;
    echo "<b>" . str_replace(["A" , "wRlD"] , ["e","world"] , $str_3) . "</b>" ; // nothing is changing 

    print "<br>";
    print "<br>";

    // The exemple of the str_ireplace -> it is not case sensitive . 
    echo "the exemple of the case-Isensitive : " ; 
    $str_3 = "Hallo Wlrd"  ;
    echo "<b>" . str_ireplace(["A" , "wlrD"] , ["e","world"] , $str_3) . "</b>" ; //  Hello world


    print "<br>";
    print "<br>";

    // another exemple : 
    $str_4 = "me nam ik karim";
    echo "the exemple of the str_ireplace : ";
    echo str_ireplace(["mE","NAm","iK","kArIm"] , ["my","name","is","mouhamed"] , $str_4 , $replaced);
    print "<br>";
    echo "the number of the word replaced is : " . $replaced;



