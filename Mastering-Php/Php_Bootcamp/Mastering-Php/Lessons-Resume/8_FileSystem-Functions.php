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
    echo "The total space of the disck (C:) is : " . disk_total_space("C:") / 1024 / 1024 . " Mb <br>";
    echo "The total space of the disck (D:) is : " . disk_total_space("D:") / 1024 / 1024 . " Mb <br>";

    echo "The Free space of the disck (C:) is : " . diskfreespace("C:") / 1024 / 1024 . " Mb <br>";
    echo "The Free space of the disck (D:) is : " . diskfreespace("D:") / 1024 / 1024 . " Mb <br><br>";

    if(file_exists("1.php")){
        echo "This file is exists <br>";
        echo "Its size is : " . filesize("1.php") / 1024 . " Kb <br>";
    }
    print "<br>";

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
    var_dump(is_dir("Mastering-Php"));   
    print "<br><br>";

    /*
            - File System Functions (part3) : 
            ---------------------------------

        - chmod(file[Required], Mode[Required])
            Change Mode 
        - fileperms(Name)
            Gets file permissions 
        - clearstatcach()
                clear cash 

        . You Can Change Owner chown()
        . You Can Change groyp chgrp()
    */
    mkdir("mouhamed", 0700);
    print "<br>";
    echo "The Perms of the directory (mouhamed) are : " . fileperms("mouhamed"). "<br>"; 
    clearstatcache();
    chmod("mouhamed", 0744); 
    //  To show it you have to run it in the unix , because the windous ignore the file perms 
    echo "The Pers Of The Directory (mouhamed) after changing the mode are : " . fileperms("mouhamed") . "<br>";
    print "<br>";

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
    echo "The current file name without the extension (.php) is : " . basename("8_FileSystem-Functions.php", ".php") . "<br>";
    echo "the dirname of the current file is : " . dirname(__FILE__, 1);
    print "<br>";
    echo "the 2 dirname of the current file is : " . dirname(__FILE__, 2);
    print "<br>";
    echo "the 3 dirname of the current file is : " . dirname(__FILE__, 3);
    print "<br>";
    echo "the 4 dirname of the current file is : " . dirname(__FILE__, 4);
    print "<br><br>";

    echo "The Real Path of the current file is : " . realpath(__FILE__) . "<br>";
    echo "<pre>";
        print_r(pathinfo(__FILE__));
    echo "</pre>";
    echo "The dir name of the current file is : " . pathinfo(__FILE__)["dirname"] . "<br>";
    echo "The extension of the current file is : " . pathinfo(__FILE__)["extension"] . "<br><br><br>";

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

    print "<br>";

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

    print "<br>";

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

    print "<br>";

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

    print "<br>";

    /*
            - File System Functions (part9) : 
            ---------------------------------

        - glob(pattern[Required], Flags[Optional]) 
            Find pathnames matching a pattern and return array
        - rename(old[Required], New[Required]) => move
            Renama a file or directory 
        - copy(old[Required], New[Required], context[Optionam])
            Copy a file 
        - unlink(file[Required], context[Optionam])
            Delete a file 

        Same Concept :
            opendir()
            readdir()
            closedir()
    */

    print "<br>";

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


