<?php 

    /*
            - File Systsem Functions (part4) : 
            ----------------------------------

        - basename(path[Required], Suffix[Optioal])
            Returns Trailling Name Component Of Path 

        - dirname(Path[Required], Levels[optional] = 1)
            Returns A Patern Directory's Path 
            Levels => Number of Parent Directories To Go Up

        - realpath(Path[Required])
            Returns Absolute Path 

        - pathinfos(Path[Required], Flags[Optional]) => Return Array
            PATHINFO_DIRNAME
            PATHINFO_BASENAME
            PATHINFO_FILENAME
            PATHINFO_EXTENSTION
    */

    echo "<h1> File System Functions (part4) : </h1>";
    print "<hr>";
    print "<br>";

    echo "the current file is : 78_FileSystem_Functions(part4).php"  ;
    print "<br>";
    echo "The current file name without the extension (.php) is : " . basename("78_FileSystem_Functions(part4).php", ".php");
    print "<br>"; 

    print "<br>";

    echo "the dirname of the current file is : " . dirname(__FILE__, 1);
    print "<br>";
    echo "the 2 dirname of the current file is : " . dirname(__FILE__, 2);
    print "<br>";
    echo "the 3 dirname of the current file is : " . dirname(__FILE__, 3);
    print "<br>";
    echo "the 4 dirname of the current file is : " . dirname(__FILE__, 4);
    print "<br>";

    print "<br>";

    echo "The Real Path of the current file is : " . realpath(__FILE__);
    print "<br>";
    echo "The Real Path of the current file is : " . realpath("78_FileSystem_Functions(part4).php");
    print "<br>";

    print "<br>";

    echo "<b>" . "The full info of the current file in an array are : " . "</b>";
    echo "<pre>";
        print_r(pathinfo(__FILE__));
    echo "</pre>";
    print "<br>";

    // Accessing every info : 
    echo "The dirname of the current file is : " . pathinfo(__FILE__)["dirname"];
    print "<br>";
    echo "The basename of the current file is : " . pathinfo(__FILE__)["basename"];
    print "<br>";
    echo "The extension of the current file is : " . pathinfo(__FILE__)["extension"];
    print "<br>";
    echo "The filename of the current file is : " . pathinfo(__FILE__)["filename"];
    print "<br>";

    print "<br>";

    // Accessing each info by the flags : 
    echo "the dirname of the current file is : " . pathinfo(__FILE__, PATHINFO_DIRNAME);
    print "<br>";
    echo "the basename of the current file is : " . pathinfo(__FILE__, PATHINFO_BASENAME);
    print "<br>";
    echo "the extension of the current file is : " . pathinfo(__FILE__, PATHINFO_EXTENSION);
    print "<br>";
    echo "the filename of the current file is : " . pathinfo(__FILE__, PATHINFO_FILENAME);
    print "<br>";