<?php


    /*
            - File System Functions (part7) : 
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

            [c] => 
                For write 
                Create if not exists 
                No Problem If it exists 
                No truncation 
                Poiner at the begining 
            [c+] => 
                For read and write 
                all the properties of the [c] mode 

            - file(file[Required], flag[Optional], contex[Optionam])
                read intire file into array 
            - feof(file[Required])
                Tests for End Of File On a file pointer 
    */

    echo "<h1> File System Functions (part7) : </h1>";
    print "<hr>";
    print "<br>";

    echo "<b>". 'Lines in the file (mouhamed.txt) on an array : '. "</b>";
    echo "<pre>";
        print_r(file("mouhamed.txt"));
    echo "</pre>";
    print "<br>";

    echo "The Number of lines of (mouhamed.txt) file are : " . count(file("mouhamed.txt"));

    print "<br>";
    print "<br>";


    $handle = fopen("mouhamed.txt" , "r");
    $line = 1;
    echo "<b>" . "Priting the lines from (mouhamed.txt) file using the while loop : " . "</b>";
    print "<br>";
    print "<br>";
    while (!feof($handle)) {
        echo "Line $line : " . fgets($handle) . "<br>";
        $line ++;
    };

    print "<br>";
    print "<br>";

    echo "<b>" . "Priting the lines from (mouhamed.txt) file using the for loop : " . "</b>";
    print "<br>";
    print "<br>";
    for ($x=0; $x < count(file("mouhamed.txt")) ; $x++) {
        echo fgets($handle) . "<br>";
    };

    if (close("mouhamed.txt")) {
        echo "closing the file with success :) ";
    }