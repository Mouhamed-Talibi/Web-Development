<?php

    /*
                Function Training And Unpacking Arguments : 
                -------------------------------------------

                Search :
                ________

            - Php Variadic Functions 
            - Splat Operator 
                -> Must be The last Argument In the Function 

            - we Use The Three " . " To Unpack The Array Or Any Group Of Data . 
    */

    echo "<h1> Function Training And Unpacking Arguments </h1>";
    print '<hr>';
    print '<br>';   

    function introduce($name , $age="Private" , $country , ...$languages) {
        echo "Hello My Name Is : $name And I'm $age Years Old "."<br>";
        echo "I live In $country "."<br>"."<br>";
        echo "<b> The Languages That I Speak Are : </b>"."<br>";
        foreach($languages as $lang) {
            echo "-- $lang " . "<br>";
        }
    }

    $name = "Mouhamed";
    $age = 19;
    $country = "Morocco";

    introduce($name , $age , $country , "English" , "Spanidh" , "French" , "Arabic");

    print '<br>';
    print '<br>';

    function present_yourself($name , $country , ...$skills) {
        echo "Hello My Name Is : $name And I live in $country "."<br>"."<br>";
        echo "<b> My Skills Are : </b>" . "<br>";
        foreach ($skills as $skill) {
            echo "@  $skill"."<br>";
        }
    } 

    $skills_group = ["Html" , "Python" , "Php" , "Sql"];

    present_yourself($name , $country , ...$skills_group);
    // ...$skills_group  -> Is the Unpacking of the skiils group data . (Run The code and You Will Understand)