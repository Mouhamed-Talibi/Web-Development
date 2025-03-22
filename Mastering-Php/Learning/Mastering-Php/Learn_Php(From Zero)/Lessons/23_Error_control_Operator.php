<?php

    /*
                Error Control Operator : 
                ------------------------

        - @           : Using this we stop the showing of the error in the page 
        - Variable 
        - File        : Read file as array 
        - Include 

        - die()       : it stop the script when we use it , that mean any code follow the die() will not work 
    */

    echo " <h1> Error Control Operator : </h1> ";
    echo "<hr>";

    $a = 20;
    $b = @$a or die("Variable Not Found  ): ") ; // here we make the error control by the @ and the die()

    // here without error : 
    echo "the value of the variable b equal the value of a : ".$b;
    print '<br>';
    print '<br>';

    // here with the error and the stop showing the error : 
    echo "here is the exemple of the error control operator : ";
    echo $b;
    print '<br>';
    print '<br>';

    // ----------------------------------------------------------------------------------------

    // this is the exemple of the exist file : 
    echo "this is the exemple of the exist file : ". "<br>";
    $f = file("mouhamed.txt");
    echo "<pre>";
    print_r($f);
    echo "</pre>";
    print '<br>';
    print '<br>';

    // this is the exemple of the not exist file : 
    echo "this is the exemple of the not exist file : ". "<br>";
    $f = @file("mouhamed_Talibi.txt") or die("File Not Found "); 
    echo "<pre>";
    print_r($f);
    echo "<pre>";

    // ---------------------------------------------------------------------------------------------

    // this is the exemple of the include : 
    echo "this is the exemple of the include : ";
    print '<hr>';
    include("9_Testing_Variables.php");
    print '<hr>';
    
    // this is the exemple of the include with the not exist file : 
    echo "this is the exemple of the include with the  not exist file : ";
    print '<br>';
    (@include("7_users.php")) or die("error : FILE NOT FOUND ");



