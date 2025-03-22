<?php

    /*
        - If , ELseif , Else (Alternate Sytnthax ) :
        --------------------------------------------
    */

    echo "<h1> If , ELseif , Else (Alternate Sytnthax ) </h1>";
    print '<br>';
    print '<hr>';

    // the first exemple : 
    if (10 > 6) {
        echo "good";
    };

    print '<br>';

    // the second exemple : 
    if (10 > 2 ) echo "hello world "; // we use this synthax when we have just one line of nlock of code 
    else echo "this is true ";

    print '<br>';
?>
<?php 
    // the third exemple : 
    if (10 > 6) { ?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        Welcome to Our page : 
    </body>
</html>
<?php 
} // this is the close brackets of the if condition 
print '<br>';
?> 

<!-- the forth exemple :  -->
<?php

    if (10 > 10 ) : 
        echo "bad" ; 
    elseif (18 > 10 ) :  
        echo "bad" ;
    elseif (91 == 01) : 
        echo "good";
    endif; 
?> 


