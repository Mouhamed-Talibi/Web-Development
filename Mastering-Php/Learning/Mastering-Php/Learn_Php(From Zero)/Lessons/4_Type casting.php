<?php

    // Type casting : 
    // --------------

    /*
        "Boolean" or "bool" 
        "integer" or "int"
        "float" or "double" or "real"
        "string"
        "array"
        "object"
        "null" 
        ------------------------------
        Search for settype
    */

    echo "hello world , this is the type castig file :";
    print "<br>";
    echo "let's cast the 6 lessons to Integer.";
    print "<br>";
    echo 6 + (int) "6 Lessons";
    print "<br>";
    echo 6 + (integer) "6 Lessons";
    print "<br>";
    echo  "the sum of 6 and 16.8 as the integer result is :" , 6 +  (int) 16.8;
    print "<br>";
    echo gettype(6 + (integer) "6 Lessons");
    print "<br>";
    echo 10.5 + 10.5 ;
    print "<br>";
    echo gettype(10.5 + 10.5);
    print "<br>";
    echo (int) 10.5 + (int) 10.5 ; // 20 
    print "<br>";
    echo gettype((int) 10.5 + (int) 10.5);
    print "<br>";
    echo (int) (10.5 + 10.5); // 21 here it callcule first what is between the braquets and after that it cast it to integer type . 
    print "<br>"; 
    echo gettype((int) (10.5 + 16.5));
    print "<hr>";


    // ------------------------------------------------------------------------------------------------------------------------------------------

    /*
        - BOOLEAN + CONVERTING TO BOOLEAN  :
        -------------------------------------- 
            -> var_dump() : built in function to cast the data to boolean type .
            -> every empty data has the FALSE boolean value .  
    */

    var_dump((bool) "");
    echo '<br>';
    var_dump((bool) array("users" , "data" , 'alter'));
    echo '<br>';
    var_dump((bool) []);
    echo '<br>';
    var_dump((bool) 0);
    echo '<br>';
    print 'if the O is a string , will be false : ';
    var_dump((bool) "0");
    echo '<br>';
    print 'is the number is negative , it will be true because the false boolen data is that is = 0 :  ';
    var_dump((bool) -165);
    echo '<br>';
    var_dump((bool) -78.89);
    echo '<br>';
    var_dump((bool) 176);
    echo '<br>';


