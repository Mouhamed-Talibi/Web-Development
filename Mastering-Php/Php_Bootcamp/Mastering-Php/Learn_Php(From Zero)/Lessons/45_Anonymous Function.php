<?php

    /*
                - Anonymous Function : 
                ----------------------

            - When we can create a function we give it a name so we call it later with that name 
            - Sometimes we need to create a function for Specific Task => This is Not Against Dry

        . Variable inherit from parent scope 
        . Variable inherit by reference from parent scope 
        . Anonymous Function can be passed to a function 
        . Anonymous Function can be return from a function 

            Search : 
            --------
                . Closure
    */

    echo "<h1> Anonymous Function </h1>";
    print '<hr>';
    print '<br>';

    // exemple of norma function : 
    function hello_world() {
        return "hello world";
    }
    echo hello_world();

    print'<br>';
    print "<br>";


    // exemple of Anonymous function : 
    $a_func = function() {
        return "hello from The anonymous function"."<br>";
    };
    echo $a_func();

    print '<br>';
    print '<br>';


    // exemple of the anonymous function with parameters : 
    $fun_with_p = function($name , $age , $country) {
        return "Hello , my name is : $name , I'm $age years old And I live in $country";
    };
    echo $fun_with_p("Mouhamed" , 19 ,"Morocco");

    print '<br>';
    print '<br>';


    // exemple of the parameter and arguments in variables : 
    $msg = "Hello My Brother ";
    $func3 = function($name , $age , $departement) use($msg) {
        return "$msg my name is $name , I'm $age years old . My departement is : $departement";
    };
    echo $func3("Yassin" , 18 , "Backend devloper"); // will show us a worning , So we need to use the word use(variable_name)


    print "<br>";
    print "<br>";


    // exemple of the anonymous function with array : array_map() :
    $array = [10 , 20 , 30 , 40 , 50 ];
    $res_after_adding_15 = array_map(
        function($num) {
            return $num + 15 ;  
        }, 
        $array
    ); 
    echo "the result after adding 15 for each number in the array is : "."<br>";
    print '<pre>';
    print_r($res_after_adding_15);
    print '<pre>';
