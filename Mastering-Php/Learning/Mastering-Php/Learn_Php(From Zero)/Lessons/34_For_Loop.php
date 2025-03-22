<?php


    /*
            For Loop : 
            ----------

        - Expression one run once at the first of the top 
        - In the begining of iteration expression two is checked (if true condition || Break)
        - At the end of iteration expression three are excuted 
    */



    echo "<h1> For loop </h1>";
    print '<hr>';
    print '<br>';

    $a = 0 ; 
    while ($a <= 50) {
        echo "number " . $a . "<br>";
        $a++ ; 
    }


    print "<br>";
    print "<br>";

    for ($b = 20 ; $b <= 30 ; $b++) {
        echo "number " . $b . "<br>";
    } 
    // here in this exemple : 
        //  ($b = 20 ; )   -> is the expression that we start from 
        //  ($b <= 30 ; )  -> is the expression that we should check if it's true to run the code or its false to break the code 
        //  ($b++ )        -> is excuted code 

    print "<br>";
    print "<br>";

    $index = 50; 
    for (; ; ) :
        if ($index == 20 ) {
            break;
        }
        echo "digit : " . $index . "<br>";
        $index--;
    endfor;