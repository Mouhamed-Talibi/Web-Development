<?php

    /*
            - File System Functions (part5) : 
            ---------------------------------

        - fopen(filename[Required], mode[Required], includepath[Optionam], context[Optionam])
            Mode : 
            [r]  For read            => Pointer At the begining  
            [r+] For read and write  => Pointer at the begining 
            [w]  For write           => Pointer at te begining + Truncate to 0 lenght => Create if not exists  
            [w+] For read and write  => Pointer at the begining + Truncate to 0 Length => Create if not exists 

        - fgets(file[Required], Length[Optional])
            Get a line from an open file 
            Length => Number of bytes to read || End of line if no length 

        - fread(file[Required], Length[Required])
            Get a data from an open file 
            Length => Maximum number of bytes to read 

        - fclose(file[Required])
            Closes an open file pointer
    */

    echo "<h1> File System Functions (part5) : </h1>";
    print "<hr>";
    print "<br>";

    echo "Let's Open The file : (mouhamed.txt) ";
    print "<br>";
    $handle = fopen("mouhamed.txt", "r");
    if ($handle) {
        echo "The file Is Opend Successfully";
    };
    print "<br>";

    echo "<b>" . "Reding the opened file : " . "</b>";
    print "<br>";
    echo fgets($handle); // It doesn't rad all the file . 
    echo fgets($handle, 200); // here it will read 200 bytes. 
    echo fgets($handle, 1024); // here it will read 200 bytes. 

    print "<br>";
    print "<br>";

    echo "<b>" . "reading the all file : " . "</b>";
    print "<br>";
    echo fread($handle, 25); // here it complete from mouhamed because we already raad the data untim (from) by the fgets function
    print "<br>";
    echo fread($handle, 200); // here it complete from "this is " because we already raad the data untim (from) by the fgets function

    print "<br>";
    print "<br>";

    $close = fclose($handle);
    if ($close) {
        echo "the File is closed successfully";
        print "<br>";
        echo "<mark> See You Later : </mark>";
    } 