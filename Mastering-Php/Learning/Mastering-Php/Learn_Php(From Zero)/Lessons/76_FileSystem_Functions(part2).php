<?php

    /*
            - File System Functions(part2) : 
            --------------------------------

        - is_dir(Name)
            Tell us if the file name is a directory

        - mkdir(path[Required], Mode[Optional]=0.777, recursive[Optional], Context[Optional])
            Permissions is Ignored On Windous 
            Permissions is octal Numbers start with 0 
                . Second Number is => Owner Persmission 
                . Third Number is => User Group Permission
                . Fourth Number is => Others Permissions 

        - rmdir(Name[Required], Context[Optionam])
            remove the directory 
    */

    echo "<h1> File System Functions (part2) : </h1>";
    print "<hr>";
    print "<br>";

    echo "Checking the (mouhamed) is a directory : " . "<b>";
    var_dump(is_dir("mouhamed"));
    echo "</b>";

    print "<br>";
    print "<br>";

    echo "Making directory (yassin/info/files): ";
    mkdir("yassin/info/files", 0.770, true);
    print "<br>";

    echo "Making directory (Achraf/Friends/Pictures): ";
    mkdir("Achraf/Friends/Pictures", 0.770, true);

    print "<br>";
    print "<br>";

    echo "removing the directory files : ";
    rmdir("yassin/info/files");
    print "<br>";

    echo "removing the directory info : ";
    rmdir("yassin/info");
    print "<br>";

    echo "removing the directory yassin : ";
    rmdir("yassin");