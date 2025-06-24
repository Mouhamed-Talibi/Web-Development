<?php

    // Data types : 
    //-------------

    /*
        Array :
        -------

            array with key 
            array without keys 
            array with one key 
            array value override
            --------------------

            print_r() -> it print human-readable information about a variable . 
    */

    echo "hello world , this is the array lesson : ";
    echo '<br>';
    echo '<pre>';
    print_r([
        0           => "yassin",
        "m"         => "mouhamed",
        "a"         => "abdellah",
        "s"         => "sarab",
        "yassmin" ,
        True        => "hind",     // here we update the value of index 1 , after its old value is : yassmin 
        1           => "ousama",      // here is the same it is override the old value : hind by new value : ousama.
        9           => "achraf",
        "bader",
        "eman", 
        False       => "raja"  ,        // it will override the old value:yassin by the new value : raja

        "users"     => [
            "id" => 1,
            "name" => "yassin",
            "pssword" => "Uershvd",
            "email" => "medo@gmail.com",

            "wrok_days" => [
                "monday", 
                "thursday",
                "sunday"
            ]
        ]
        ]);

    echo '</pre>';