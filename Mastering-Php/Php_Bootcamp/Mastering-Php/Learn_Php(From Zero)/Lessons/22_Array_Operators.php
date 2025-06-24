<?php

    /*
                Array Operators : 
                -----------------

            Deal With Array : 
            _________________

        +       =>  Union 
        ==      =>  Equal - same key and value 
        !=      =>  Not Equal 
        <>      =>  Not Equal 
        ===     =>  Identical - Same key and value , same order , same type 
        !==     => Not Identical 
    */

    echo "<h1> Array Operators : </h1>";
    print '<br>';

    $arr1 = [1 => "A" , 2 => "B"];
    $arr2 = [3 => "C" , 4 => "D"];

    echo "testing the Union betweeb the Arr1 and the Arr2 : " . "<br>" ;
    echo "<pre>";
    print_r($arr1 + $arr2); // This is the Unino between Arr1 and the Arr2 
    echo "</pre>";

    print '<br>';

    $arr3 = [1 => "mouhamed" , 2 => "talibi"];
    $arr4 = [2 => "talibi" , 1 => "mouhamed"]; 
    echo "testing the Equal between The Arr3 and the Arr4 : "; 
    var_dump($arr3 == $arr4);
    print '<br>';

    $arr5 = [1 => "A" , 2 => "B"];
    $arr6 = [2 => "A" , 1 => "B"];
    echo "testing the not equal between the arr5 and the arr6 : ";
    var_dump($arr5 != $arr6);
    print '<br>';

    $arr7 = [1 => "hello" , 2 => "world"];
    $arr8 = [1 => "hello" , 2 => "world"];
    echo "testing the identical between the arr7 and the arr8 : ";
    var_dump($arr7 === $arr8); // same value , same type , same order , same key 
    print '<br>';

    $arr9 = [0 => "hello" , 1 => "user"];
    $arr10 = [1 => "hello" , 0 => "user"]; // same type , same value , same order but not the same key  
    echo "testing the not identical between arr9 and arr10 : ";
    var_dump($arr9 !== $arr10);