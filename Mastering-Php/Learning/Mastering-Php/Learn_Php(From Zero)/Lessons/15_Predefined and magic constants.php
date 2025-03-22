<?php

    //  PRE-DEFINED AND MAGIC CONSTANTS : 
    // ----------------------------------

    /*
        Pre-Defined Constants [Case Sensitive  الحروف حساسة ]
            - PHP_VERSION 
            - PHP_OS_FAMILY 
            - PHP_INT_MAX 
            - DEFAULT_INCLUDE_PATH 

        MAGIC CONSTANTS [CASE INSENSITIVE] 
            - __LINE__ 
            - __FILE__
            - __DIR__

        RESERVED KEYWORDS : 
            - break 
            - clone 

        SEARCH :
            - Php predefined constants 
            - Compile time VS runtime 
            - List of reserved words in php 
    */

    echo php_uname();
    print '<br>';
    echo PHP_VERSION;
    print '<br>';
    echo PHP_OS_FAMILY;
    print '<br>';
    echo PHP_INT_MAX;
    print '<br>';
    echo DEFAULT_INCLUDE_PATH;
    print '<br>';
    echo __LINE__;
    print '<br>';
    echo __FILE__;
    print '<br>';
    echo __DIR__;
    print '<br>';

    // exemple of the reserved words : 
    define("BREAKS" , "mouhamed");
    // echo break; // it will show an error in the terminal . 
    
    print '<br>';
    print '<br>';
    print '<br>';