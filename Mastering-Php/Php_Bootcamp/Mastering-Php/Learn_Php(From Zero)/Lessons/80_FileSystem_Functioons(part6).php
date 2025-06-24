<?php

    /*
            - File System Functions (part6) : 
            ---------------------------------

        - fopen(filename[Required], mode[Required], includepath[Optionam], context[Optionam])
            Mode : 
            [r]  For read            => Pointer At the begining  
            [r+] For read and write  => Pointer at the begining 
            [w]  For write           => Pointer at te begining + Truncate to 0 lenght => Create if not exists  
            [w+] For read and write  => Pointer at the begining + Truncate to 0 Length => Create if not exists

            [a]  For write                     =>  Pointer At the end + Create if not exists   
            [a+] For read and write            =>  Pointer at the end + Create if not exists  
            [x]  create + open for write       =>  Pointer at te begining
            [x+] craete + open read and write  =>  Pointer at the begining + Truncate to 0 Length => Create if not exist

        - fwrite(file[Required], String[Required], Length[Optionam])
            Write to an open file 
            Length => Maximum number of Bytes to write 
    */

    echo "<h1> File System Functions (part6) : </h1>";
    print "<hr>";
    print "<br>";

    $handle = fopen("mouhamed.txt", "a+");
    if ($handle) {
        echo "The file is Opened Successfully";
    }
    print "<br>";
    print "<br>";

    echo "<b>". "Reding the file (mouhamed.txt) : ". "</b>" . "<br>";
    echo fread($handle, 1024);
    print "<br>";

    echo "<b>". "Writing on the file : " . "</b>" . "<br>";
    fwrite($handle , "\r\n Nice To Meet You My Friend");
    print "<br>";

    echo "The file after writing  : " . "<br>";
    
    echo "<b>". "Reding the file (mouhamed.txt) : ". "</b>" . "<br>";
    echo fread($handle, 1024);
    print "<br>";