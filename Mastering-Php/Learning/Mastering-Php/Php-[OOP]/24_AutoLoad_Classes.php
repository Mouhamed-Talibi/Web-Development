<?php

    /*
            - AutoLoad Classes : 
            ---------------------
                Using the function : spl_autoload_register()
    */

    spl_autoload_register(function ($class){
        require "classes/" . $class . ".class.php";
    });

    $user = new user1();
    print_r($user);
    print "<br>";

    $user = new user2();
    print_r($user);
    print "<br>";

    $user = new user3();
    print_r($user);
    print "<br>";

