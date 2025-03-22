<?php

    /*
            - File System Functions (part10): 
            ---------------------------------

        - file_get_contents(file[Required], Include_path[Optional], context[Optionam], start[Optional], max_length[Optional])
            Include path : 
                get_include_path()
                set_include_path()
            Reads intire file into a string 

        - file_put_contents(file[Required], Data[Required], mode[Optional], context[Optionam])
            Write data to file 
            mode : 
                FILE_APPEND => if file exists append to it 

        - Create if not exists
        - Open and close 
        - Return Number of bytes 

        . Search : 
            - Get Set Include Path 
    */

    echo "<h1> File System Functions (part10) : </h1>";
    print "<hr>";
    print "<br>";

    // the include path is : 
    echo "The include path is : " . get_include_path();
    print "<br>";

    // Priting from O To 40 Number of bytes
    echo file_get_contents("mouhamed.txt", true, null, 0, 40);

    print "<br>";
    print "<br>";

    // priting from 40 to 50 Number if bytes 
    echo file_get_contents("mouhamed.txt", true, null, 40, 50);

    print "<br>";
    print "<br>";

    // real example of using thr function : 
    // echo file_get_contents("https://elzero.net/myroom/"); 

    print "<br>";
    print "<br>";

    // overidding the old content and putting the new content : 
    // file_put_contents("mouhamed.txt", "This si the new content by overridding the old content ");

    // appending the new content to the old content : 
    $append = file_put_contents("mouhamed.txt", "\r\nthis is the appending the new content :)", FILE_APPEND);
    echo "The number of bytes thatw e append to the file is : " .$append . "<br>";


