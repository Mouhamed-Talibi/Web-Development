<?php

    // Assign Variables by Reference : 
    //     - by default variables are always assigned  by value 
    //     - Assigned by reference make variable Alias or Point to Another 

    // Search : 
    //   - references are not pointers . 


    // assign by value : 

    $name = "mouhamed";
    $name2 = $name ;// here we assign the 2 variable by the 1 variable value 
    $name3 = 'Talibi';

    echo $name2 ; // it will print the value : mouhamed 
    print "<br>";
    echo $name3;
    print "<br>";
    
    // -----------------------------------------------------------------------------------
    
    
    // assign by reference : (using the & )

    $school = "almajd";
    $school2 = &$school ; 

    echo $school2 ; // it will print the almajed 