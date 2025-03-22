<?php

    // Variable Variable : 
    //  Takes the value of a variable and treats that as the name of the variable . 

    $name = "mouhamed";
    $$name = "talibi"; // here the variable take the name of mouhamed by doubling the dolar-sign . name of variable is : mouhamed 
    $$$name = "Student"; // The name of the variable is : talibi 

    $age = 19 ; 
    $level = "University";

    echo "my name is $name , and my age is : $age . I study in the $level ";
    print "<br>";
    echo "my name is " , $$name , " and my age is : $age . I study in the $level ";
    print "<br>";
    echo "it will print Talibi : $mouhamed";
    print "<br>";
    echo "the variable tabili will print this this value : " , $$$name ; 
    print "<br>";
    echo $talibi ; 
    print "<br>";
    echo "This Last name is : ${$$name}"; // The $${$name} is like : $$$name 
    print "<br>";
    print "<br>";
    print "<br>";