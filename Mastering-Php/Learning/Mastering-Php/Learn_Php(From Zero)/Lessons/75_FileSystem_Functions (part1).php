<?php

    /*
            - File System Functions (part1) :
            --------------------------------- 

        - disk_total_space()
            Get total space in bytes, then we can get => [Kb, Mb, Gb]

        - disk_free_space() || diskfreespace() 
            Get free space in bytes, then we can get => [Kb, Mb, Gb]

        - file_exists(path)
            Check if a directory or file exists

        - file_size(file_name)
            get space in Bytes.
    */

    echo "<h1> File System Functions (part1) : </h1>";
    print "<hr>";
    print "<br>";

    echo "the Total space of the disk (C:) is : " . disk_total_space("C:") . " Bytes";
    print "<br>";
    echo "the Total space of the disk (C:) is : " . disk_total_space("C:") / 1024 . " Kb";
    print "<br>";
    echo "the Total space of the disk (C:) is : " . disk_total_space("C:") / 1024 / 1024 . " Mb";
    print "<br>";
    echo "the Total space of the disk (C:) is : " . disk_total_space("C:") / 1024 / 1024 / 1024 . " Gb";
    print "<br>";
    echo "The Approach disk total space of (C:) is : " . round(disk_total_space("C:") / 1024 / 1024 / 1024) . " Gb";

    print "<br>";
    print "<br>";

    echo "The Free spcace on (C:) : " . diskfreespace("C:") . " Bytes";
    print "<br>";
    echo "The Free spcace on (C:) : " . diskfreespace("C:") / 1024 . " Kb";
    print "<br>";
    echo "The Free spcace on (C:) : " . diskfreespace("C:") / 1024 / 1024 . " Mb";
    print "<br>";
    echo "The Free spcace on (C:) : " . diskfreespace("C:") / 1024 / 1024 / 1024 . " Gb";
    print "<br>";
    echo "The Approach disk total free space of (C:) is : " . round(disk_free_space("C:") / 1024 / 1024 / 1024) . " Gb";

    print "<br>";
    print "<br>";

    function check_file($file_name) {
        if (file_exists($file_name)) {
            return "The Size of the file is : " . filesize($file_name) / 1024 . " Kb";
        }
    };
    $file = "ar.php";
    echo check_file($file);
