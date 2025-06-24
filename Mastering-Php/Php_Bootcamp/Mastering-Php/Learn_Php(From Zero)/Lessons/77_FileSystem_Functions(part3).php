<?php


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

    echo "<h1> File System Functions (Part3) : </h1>";
    print '<hr>';
    print '<br>';

    mkdir("mouhamed", 0700);
    print "<br>";
    echo "The Perms of the directory (mouhamed) are : " . fileperms("mouhamed"). "<br>"; 
    clearstatcache();
    chmod("mouhamed", 0744); 
    //  To show it you have to run it in the unix , because the windous ignore the file perms 
    echo "The Pers Of The Directory (mouhamed) after changing the mode are : " . fileperms("mouhamed") . "<br>";
