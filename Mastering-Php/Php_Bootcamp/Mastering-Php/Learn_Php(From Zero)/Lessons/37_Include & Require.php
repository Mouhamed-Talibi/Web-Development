<?php  

    /*
                - Include & Require : 
                _____________________

                - Including Files .

                - Include : if it not found the file it shows warning but it continue the script
                - require : if it not found the file it shows error and it breaks the script 
    */

    echo "<h1> Include & Require ( Including Files ) </h1>";
    print '<hr>';
    print '<br>';
    
    include_once ("ar.php");
    print '<br>';
    print '<br>';

    echo "The username is : " . strtoupper($name);

    print '<br>';
    print '<br>';

    echo "The exemple of the include once : ";
    $name = "yassin";
    include_once ("ar.php");
    echo "The username is : " . strtoupper($name); // it will print yassin 

    require ("fn.php"); // here it will show an error and break the script 
    echo "above there is a error ";



