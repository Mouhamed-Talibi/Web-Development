<?php

    /*
                Function Variable And Function Exists : 
                ---------------------------------------

            - Variable Function : 
                . Php Allow To use variable like function 
                . When you append prenthese () to variable , php will search for function with that name 

            - Fucntion Exists : 
                . function_exists("Function_name") 
                    -> it Checks if the function is exsists or not 
    */

    echo "<h1> Function Variable And Function Exists </h1>";
    print '<hr>';
    print '<br>';

    function hello_world() {
        return "Hello world";
    }

    echo hello_world();

    print '<br>';
    print '<br>';

    // exemple of the Variable function : 
    $func = "hello_world";
    echo $func(); // here like we wrote ( echo hello_world) -> so we just like storing the name of the function in a variable and use it . 

    print '<br>';
    print '<br>';

    // -----------------------------------------------------------------------------------------------------------------------------


    function introduce($name , $age , $departement="Private departement") {
        return "Hello , My name is $name , I am $age years old And My departement is $departement"."<br>";
    }

    echo introduce("Mouhamed" , 19 , "backend devloper");

    print '<br>';
    print '<br>';

    // exemple of the varibale function : 
    $func2 = "introduce";
    echo $func2("Mouhamed" , 18 );

    print '<br>';
    print '<br>';


    // ---------------------------------------------------------------------------------------------------------------------------------

    if (function_exists("introduce")) {
        echo introduce("Yassin", 20 , "Backend devloper");
    } else {
        echo "Function Not Found ";
    }
    print '<br>';
    print '<br>';

    if (function_exists("testing")) {
        echo testing(); 
    } else {
        echo "Function Not Found";
    }