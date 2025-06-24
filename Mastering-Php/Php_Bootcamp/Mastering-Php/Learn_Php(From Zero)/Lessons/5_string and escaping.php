<?php

    // Datatypes : 
    // ------------

    /*
        String and Escaping
        -------------------
        - to write string datatypes we have to write our text between single OR two quotes : '' or ""
        - when we want to print our text into two or single quotes we should use the both type of them like exemple in line 17 , 19
        - we use the back-slash : to skip the the error and print the quote  in our code when we use the single quote in all our line code 21.
        - nl2br() : new line two Breaking Line . 
    */

    echo "hello world";
    print '<br>';
    echo "hello 'Mouhamed'";
    print '<br>';
    echo 'hello "mouhamed"';
    print '<br>';
    echo "Hello \"mouhamed\"";
    print '<br>';
    echo "hello world \\";
    print '<br>';
    echo nl2br("Create Table If Not Exits users(
        id int not null autoincrement , 
        name varchar(255) not null unique , 
        age int not null check  age > 10
        );");
    print '<br>';
