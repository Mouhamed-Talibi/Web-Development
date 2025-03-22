<?php

    /* 
            Classes And Objects
            --------------------

                . Class is a Blueprint that you create objects from. 
                . Object is a member in the main application

                // example to understand the oop.
                    Apple : 
                    - Class           = Apple blueprint Design
                    - Object          = Iphones that China made
                    - Application     = Apple Store

                    Web application registration : 
                    - Class           = Code To add new members
                    - Object          = The members
                    - Application     = Web Application registration
    */

    echo "<h1> Object Oriented Programming (part1) : </h1>";
    print "<hr>";
    print "<br>";

    // Below is the code :
    class ApplePhones{
        
    }
    $iphone11 = new ApplePhones; // This is An Object From The Class ApplePhones

    echo "<pre>";
        print var_dump($iphone11);
    echo "</pre>";
?>
