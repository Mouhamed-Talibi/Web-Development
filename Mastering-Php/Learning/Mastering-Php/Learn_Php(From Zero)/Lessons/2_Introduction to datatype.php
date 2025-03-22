<?php

    /*
        The Common datatypes In All Programming Languages : 
        ---------------------------------------------------

        - bool          -> Boolean (TRUE or FALSE )
        - int           -> Integer (All True Numbers) , means that the number only without comma.
        - float         -> Floating Point Number | Double  
        - str           -> string (all character or text is a string )
        - arr           -> array (it contain different datatypes , and it can be merge in one array). | [] we can use this shortcut of the array 

        We Can Get the Type of the data by the built in function in php :
        - gettype()
    */

    echo gettype(True);
    print '<br>';
    echo gettype(False);
    print '<br>';
    echo gettype(6);
    print '<br>';
    echo gettype(18.8);
    print '<br>';
    echo gettype("Hello World");
    print '<br>';
    gettype(array("name" => "mouhamed" , "age" => 19));
    print '<br>';
    gettype(["name" => "mouhamed" , "age" => 19]); 