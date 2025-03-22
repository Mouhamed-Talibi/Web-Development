<?php

    /*
                - Function  : 
                ____________

            _ Optipnal return & Null 
            _ End After return

            - The role of the ( return ) is to return the data without printing it in the screen , to allow you acess the data and use it as you
                want At the same time . 
            - Remember Any Code line after the return will not excute ! 
    */ 

    echo "<h1> Fucntion return  </h1>";
    print '<hr>';
    print '<br>';

    $name = "mouhamed";
    $age = 19;

    function say_hello($name , $age) {
        if ($age >= 18) {
            echo "hello $name , your age is : $age";
            print "<br>";
            echo "Welcome To our Website :) ";
        } else {
            echo "hello $name , your age is : $age";
            print "<br>";
            echo "you are not welcome to our website '-^ ";
        }
    }
    // say_hello($name , $age);
    $result = say_hello($name , $age); // it will show you an error because the value is Null
    print '<br>';
    echo "the result of the saving the function in a varibale is : "; 
    var_dump($result);

    print '<br>';
    print '<br>';

    // --------------------------------------------------------------------------------------------------------------------------

    $gifts = ["Pc" , "Phone" , "Tv" , "MotoBike" , "Car" , "Bicycle"];
    function get_gift($number) {
        echo "select One Number From 0 To 5 , Ti get A gift For You ";
        print '<br>';
        return $number;
    }
    
    $gift_num = get_gift(3);
    echo "The Number you select assign to the " . "<b>" . $gifts[ $gift_num] . "</b>" . " Gift";