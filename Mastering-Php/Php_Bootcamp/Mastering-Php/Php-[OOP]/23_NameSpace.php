<?php

    /*
            - NameSpace : 
            --------------

                - You can Create Multiple namespaces in one file, but THE BEST PRACTICE is to create one namespace in his own file
                - Allways Use The namespace in your apps , that will help you organize your app and be able to find a job in a great company 
                - You can create namespace like this : [ Apple\Hardware\Phone | Apple\Hardware\Tablets ]
    */

    require_once "mouhamed.php";
    require_once "yassin.php";

    $user = new mouhamed\Mouhamed();
    $user->sayhello();
    echo "<pre>";  
        print_r($user);
    echo "</pre>";


    $user = new yassin\yassin();
    $user->sayhello();
    echo "<pre>";  
        print_r($user);
    echo "</pre>";