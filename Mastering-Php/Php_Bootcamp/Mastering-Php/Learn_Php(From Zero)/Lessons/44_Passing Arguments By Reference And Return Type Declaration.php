<?php

    /*
            Passing Arguments By Reference And Return Type Declaration : 
            ____________________________________________________________

        Passing arguments by reference : 
        --------------------------------

            - By default : function arguments are passed by value 
            - If the value of the argument inside the function changed ,  it will not change outside 
            - To change it outside pass the argument by reference ( by : adding & to the parameter ) 

        . Return type Declarations

        _ Search : 
        ---------
            . Php Strict Mode 
    */


    echo "<h1> Passing Arguments By Reference And Return Type Declaration </h1>";
    print '<hr>';
    print '<br>';

    // &$num  : this is the passing argument by reference 
    function add_ten(&$num) {   
        $num += 10;
        return "The result after adding ten inside the function is : " . $num . "<br>";
    }

    $num = 10 ; 
    echo "The value of the number before adding ten outside the function is : " .$num . "<br>";
    echo add_ten($num);
    echo "The value of the number after adding ten outside the function is : " .$num . "<br>";

    print '<br>';
    print '<br>';

    // : int  -> is the returning type deaclaration . 
    function sum($n1 , $n2) : int  {
        return $n1 + $n2 ; 
    }
    echo "The result of the sum : ";
    echo sum(18 , 118);

    echo "<br>";
    echo "the type of the result of the sum is : ";
    echo gettype(sum(18 , 118));
