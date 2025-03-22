<?php

    // CONSTANTS :

    /*
        - That value cannot change during the execution . 
        - CONSTANTS always Uppercase . 
    */

    define("DB_NAME", "users" , true); // here will show us an error . because the case_sensitive is no longer supported in the new version of php
    print '<br>';
    
    define("DATABASE" , "school");
    echo DATABASE;
    print '<br>';

    define("NUMBERS" , 17);
    define("NUMBERS" , 17); // here is an error , the NUMBERS are already defined . (constants connot be changed )
    echo NUMBERS * 2 ; 
    print '<br>'; 

    define("USERS" , "students");
    echo USERS;