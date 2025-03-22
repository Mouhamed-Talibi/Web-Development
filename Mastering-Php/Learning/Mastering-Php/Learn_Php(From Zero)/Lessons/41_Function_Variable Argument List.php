<?php

    /*
                - Function Variable Argument List : 
                ___________________________________

            _  func_num_args() 
            _  func_get_arg(index)
            _  func_get_args() -> function that return all args from the user as an array 

        - Speard Synthax in Js. 
    */

    echo "<h1> Function Variable Argument List : </h1>";
    print '<hr>';
    print '<br>';


    // exemple with the functions : 
    function sum($n1 , $n2 ) {
        echo "the number of args is : " . func_num_args();
        print '<br>';
        echo "the value of the arg number 3 is : ". func_get_arg(3);
        print '<br>';
        print '<br>';

        // return $n1 + $n2 ;
        print_r(func_get_args()) ;
        print '<br>';
        $result = 0;
        foreach (func_get_args() as $arg) {
            $result += $arg ;
        }
        echo "the result of the sum is : "; 
        return $result;
    }
    $use = sum(67 , 89 , 17 , 18);
    echo $use; 

    print '<br>';
    print '<br>';

    // ------------------------------------------------------------------------------------------------------------------------------------

    // exemple with the spread synthax : 
    function sum2(...$nums) {
        echo "the value of the argument number 2 is : " . $nums[2];
        print '<br>';
        $result = 0;
        foreach ($nums as $num) {
            $result += $num ;
        }
        return $result;
    }
    $use2 = sum2(5 , 6 , 8 , 1 , 3);
    echo $use2;

