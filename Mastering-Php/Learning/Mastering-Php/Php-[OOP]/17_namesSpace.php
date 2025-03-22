<?php

    /*
        - NameSpace
        -------------
            - It used when you want to declare a new class with another's name exists 
    */

    require 'mouhamed.php';
    require 'yassin.php';

    $user = new mouhamed\mouhamed();
    $user->sayhello();
    echo "<pre>";
        print_r($user);
    echo "</pre>";

    $user_2  = new yassin\yassin();
    $user_2->sayhello();
    echo "<pre>";
        print_r($user_2);
    echo "</pre>";
?>