<?php

    // while loop : 
    $x = 10;
    while($x < 20){
        echo $x += 1 ;
        print "<br>";
    }
    print "<br>";

    $y = 50;
    while($y > 30):
        echo $y -= 1;
        print "<br>";
    endwhile;

    print "<br>";

    // do while :
    $a = 8; 
    do{
        echo "The value is : ";
        echo $a += 1;
        print "<br>";
    } while($a < 15);

    print "<br>";

    // for loop 
    for($a=10; $a <= 20; $a+=2){
        echo $a .  "<br>";
    }
    print "<br>";
    $index = 50; 
    for (; ; ) :
        if ($index < 40 ) {
            break;
        }
        echo "digit : " . $index . "<br>";
        $index--;
    endfor;

    print "<br>";

    // Foreach loop : 
    $arr = [1=>"medo", 2=>"achraf", 3=>"ahmed", 4=>"hind", 5=>"mouna",];
    foreach($arr as $key => $value){
        echo "Key : $key & Value : $value" . "<br>";
    }

    print "<br>";

    // break & continue : 
    $values = ['ahmed', 'karim', 'achraf', 'mouhamed', 'Erika'];
    foreach($values as $value){
        if ($value == "mouhamed"){
            continue;
        }elseif ($value == "Erika"){
            break;
        }
        echo "Value : $value" . "<br>";
    }

    print "<br>";

    // include & require :
    include "en.php";
    require "en.php";
    print "<br>";

    // functions : 
    function sayhello(string $name){
        echo "Hello $name" . "<br>";
    }
    sayhello("Mouhamed");

    $nums = [98, 178, 16, 16, 14, 0];
    function getrandint($array){
        $array_key = array_rand($array);
        return "Rand int is : " . $array[$array_key];
    }
    echo getrandint($nums);

    print "<br>";

    // functions default parameters : 
    function getinfo($name, $age="private", $country="private", $level="private"){
        echo "Hello $name, your age is $age . Your country is $country and your level is $level" . "<br>";
    }
    getinfo("mouhamed", 19, "morocco");
    print "<br>";

    /*
        - Function Variable Argument List : 
        ___________________________________
            _  func_num_args() 
            _  func_get_arg(index)
            _  func_get_args() -> function that return all args from the user as an array 
        - Speard Synthax in Js. 
    */
    function sum2(...$nums) {
        echo "the value of the argument number 2 is : " . $nums[4];
        print '<br>';
        $result = 0;
        foreach ($nums as $num) {
            $result += $num ;
        }
        return $result;
    }
    $use2 = sum2(5 , 6 , 9 , 1 , 3);
    echo $use2;

    print "<br>";

    // function variable and function exists :
    $hello_func = "sayhello";
    $hello_func("ahmed");
    if(function_exists("$hello_func")){
        $hello_func("yassin") . "<br>";
    }else{
        echo "Function not found";
    }
    print "<br>";

    /*
        Passing Arguments By Reference And Return Type Declaration : 
        ____________________________________________________________

            - By default : function arguments are passed by value 
            - If the value of the argument inside the function changed ,  it will not change outside 
            - To change it outside pass the argument by reference ( by : adding & to the parameter ) 
        . Return type Declarations
        _ Search : 
        ---------
            . Php Strict Mode 
    */
    function add_five(&$number){
        $number += 5;
        return $number . "<br>";
    }
    $number = 5;
    echo add_five($number);
    echo "The value of the number after passing by reference : " . $number . "<br>";
    function getsumvars(int $n1, int $n2):int{
        return $n1 + $n2;
    }
    echo getsumvars(2, 2) . "<br>";
    print "<br>";

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
    $anonymous_function = function($name, $age){
        return "Hello $name from anonymous function , your age is : $age";
    };
    echo $anonymous_function("achraf", 19);

    print "<br>";

    /*
        - Arrow Function : 
        ------------------
            . Short synthax for anonymous function 
            . Automatic use of variables from parent scope      
        - Synthax : 
        -----------
            . Functions replaces with fn 
            . No need for curly brackets 
            . Return is Omitted 
    */
    $arrow_function = fn($name) => "hello $name, How are you? From arrow function";
    echo $arrow_function("mouhamed");


























    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";