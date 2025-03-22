<?php

    // - Variables : Naming rules + Infos : 
    // ------------------------------------

    /*
        - A variable is a container of the data to use it everytime you need it . 
        - (The Best Practice) -> when we put a variable , it should refer to the data that you will put in . (line 24)
        - remember the diffrence between ($name \ $Name) N capital ! 

        - Variables in php Start with dollar sign $ 
        - Start with characters [a -z ] or [A - Z] or Underscore (-)
        - You can Use numbers Inside the variable name 
        - no special characters allowed  
        - Case sensitive 

        - Test single and double quotes . 

        - Search : 
            _ Loosely typed language 
    */

    echo "hello world , this is the Variables Lessons :) ";
    print '<br>';
    $name = 'mohamed';
    echo "My Old Name is  : " , $name ; 
    print '<br>';

    $name = 'Ousama'; // This is the Re_Declearof the variable . 
    echo "My New Name is  : " , $name ; 
    print '<br>';
    
    $Name = 'Ousama'; // This is a different variable  . 
    echo "My Different  Name is  : " , $Name ; 
    print '<br>';

    // The variable with the single and double quotes : 
    print 'hello your name is : $name' ;
    print '<br>';
    print "hello your name is : $name";
    print '<br>';

