<?php

    /*
            - Filter Fuctions (part3) : 
            ---------------------------

        - filter_var(Value[Required], Filter[Optional], Options[Optionam])
            Validate filters 

                FILTER_VALIDATE_EMAIL
                    Flag : FILTER_NULL_ON_FAILURE

                FILTER_VALIDATE_INT 
                    Flag : FILTER_NULL_ON_FAILURE
                    Options : min_range
                    Options : max_range 
                    Convert to Int On Success 

                FILTER_VALIDATE_FLOAT 
                    Flag :FILTER_NULL_ON_FAILURE
                    Options : min_range
                    Options : max_range
                    Convert to Float On Success
    */

    echo "<h1> Filter Functions (part3) : </h1>";
    print "<hr>";
    print "<br>";

    $email = "mouha@gmail.com";
    echo "Filtering the email(mouha@gmail.com) : ";
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    print "<br>";

    $email = "helloworld";
    echo "Filtering the email(helloworld) : ";
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));
    print "<br>";

    print '<br>';
    print '<br>';


    // Filtering Int Nums : 
    $int = 10;
    echo "Filtering the int (10) : ";
    var_dump(filter_var($int, FILTER_VALIDATE_INT));
    print "<br>";

    $int = '10';
    echo "Filtering the int ('10') : ";
    var_dump(filter_var($int, FILTER_VALIDATE_INT));
    print "<br>";

    $int = '10a';
    echo "Filtering the int ('10a') : ";
    var_dump(filter_var($int, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE));
    print "<br>";

    $int = '10.00'; // Here it doesn't understand the .00 because it search for the int . 
    echo "Filtering the int ('10.00') : ";
    var_dump(filter_var($int, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE));
    print "<br>";

    $int = 10.00; // Here it understand that the int 10.00 is int . 
    echo "Filtering the int (10.00) : ";
    var_dump(filter_var($int, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE));
    print "<br>";

    $int = 50;
    echo "Filtering the int (50) : ";
    var_dump(filter_var(
        $int, 
        FILTER_VALIDATE_INT, 
        ["flags"=> FILTER_NULL_ON_FAILURE , "options"=> ["min_range"=> 20, "max_range"=>100]]
    ));
    print "<br>";

    $int = 110;
    echo "Filtering the int (110) : ";
    var_dump(filter_var(
        $int, 
        FILTER_VALIDATE_INT, 
        ["flags"=> FILTER_NULL_ON_FAILURE , "options"=> ["min_range"=> 20, "max_range"=>100]]
    ));
    print "<br>";

    print "<br>";
    print "<br>";


    // Filtering Floats Nums : 
    $float = 20.00;
    echo "Filtering the float (20.00) : ";
    var_dump(filter_var($float, FILTER_VALIDATE_FLOAT));
    print "<br>";

    $float = '20.00'; // Here it understand that it is a float nuber like 20.00 without string quotes . 
    echo "Filtering the float ('20.00') : ";
    var_dump(filter_var($float, FILTER_VALIDATE_FLOAT));
    print "<br>";

    $float = 20; // Here it understand that it is a float nuber like 20.00  
    echo "Filtering the float (20.00) : ";
    var_dump(filter_var($float, FILTER_VALIDATE_FLOAT));
    print "<br>";

    $float = 50.55;
    echo "Filtering the float (50.55) : ";
    var_dump(filter_var(
        $float, 
        FILTER_VALIDATE_FLOAT, 
        ["flags"=> FILTER_NULL_ON_FAILURE , "options"=> ["min_range"=> 20, "max_range"=>100]]
    ));
    print "<br>";

    $float = '50.55';
    echo "Filtering the float ('50.55') : ";
    var_dump(filter_var(
        $float, 
        FILTER_VALIDATE_FLOAT, 
        ["flags"=> FILTER_NULL_ON_FAILURE , "options"=> ["min_range"=> 20, "max_range"=>100]]
    ));
    print "<br>";




