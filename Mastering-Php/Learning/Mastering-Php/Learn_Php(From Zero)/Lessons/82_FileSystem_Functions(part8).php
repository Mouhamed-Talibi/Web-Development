<?php


    /*
                - File System Functions (part8) : 
                ----------------------------------

        - rewind(file[Required])
            Return the pointer to the begining of the file 

        - ftell(file[Required])
            Return current position of the pointer 

        - fseek(file[Required], offset[Required], hence[Optional] => SEEK_SET)
            Go to a position
            Offset in Bytes 
            SEEK_SET => Equal to offset 
            SEEK_CUR => current + offset 
            SEEK_END => EOF + offset [Accep negative]
    */

    echo "<h1> File System Functions (part8) :  </h1>";
    print "<hr>";
    print "<br>";

    $handle = fopen("mouhamed.txt", "r");
    echo "The Current position of the pointer is : " . ftell($handle);
    print "<br>";
    echo "The First line of the file is : " . fgets($handle);
    print "<br>";
    echo "The current line of the pointer after printing the first line is : " . ftell($handle);

    print "<br>";
    print "<br>";

    rewind($handle);
    echo "The Position of the pointer after rewinding is : " . ftell($handle);
    print "<br>";
    echo "The First line after rewarding the pointer is : " . fgets($handle);
    print "<br>";
    echo "The Currrent position of the pointer is : " . ftell($handle);

    print "<br>";
    print "<br>";

    // Seeking the pointer to positions that we want : 
    rewind($handle);
    echo "The current position of the pointer after rewinding is : " . ftell($handle);
    print "<br>";

    // seeking to the pointer to the 8 position : 
    fseek($handle, 8);
    echo "The Line after Seeking the pointer to the 8 position is : " . fgets($handle);
    print "<br>";

    echo "We can get the number of position refering to the number of bytes by using the mb_strlen function : ";
    print '<br>';
    echo "The number of bytes of (elzero\r\n) is : " . mb_strlen("Elzero\r\n", "8bit");

    print "<br>";
    print "<br>";

    echo "Priting : zero web school from the file by the seeking the position : ";
    print "<br>";
    $pos = mb_strlen("Elzero\r\nWeb\r\nSchool\r\nI Love El", "8bit");
    echo "The position by the number of bytes is : " . $pos ;
    print '<br>';
    fseek($handle, $pos);
    echo "<b>". fgets($handle). "</b>";

    print "<br>";
    print "<br>"; 

    echo "Priting the current + The offsite : ";
    rewind($handle);
    fseek($handle, 30, SEEK_CUR);
    echo fgets($handle) . "<br>";

    print "<br>";

    echo "priting the (web school) from the end of the file: ";
    $pos_bytes = mb_strlen("Web School", "8bit");
    fseek($handle, -$pos_bytes, SEEK_END);
    echo "<b>". fgets($handle) . "</b>" . "<br>";
