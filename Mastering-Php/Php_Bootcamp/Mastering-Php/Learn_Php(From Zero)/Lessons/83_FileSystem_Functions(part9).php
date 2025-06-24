<?php

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


    echo "<h1> File System Functions (part9) : </h1>";
    print "<hr>";
    print "<br>";

    echo "The All Files in the old folder are : ";
    echo "<pre>";
    print_r(glob("old/*.*"));
    echo "</pre>";

    print "<br>";

    // Renaming the file in the same folder
    rename("old/working.txt", "old/work.txt");

    // Renaming the file into the same place  
    rename("old/hello.rtf", "old/hola.rtf"); 

    // Renaming the file and moving it to another directory
    rename('old/hola.rtf', "new/hello.rtf"); 

    // moving the directory to another dir without renaling it 
    rename("old/work.txt", "new/work.txt");

    // copying the file to another folder
    copy("old/article.docx", "new/article.docx");

    // deleting the file from the directory : 
    unlink("new/article.docx");