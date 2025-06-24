<?php

    /*
                - Control Structure : 
                ---------------------

                    - While Loop

                    Synthax : 
                    _________

                        while (condition is true) {
                            Do this 
                        }
                        - remember while the condition is true , the loop will not stop until you write the code or the condition that will 
                            stop the lopp 
    */          

    echo "<h1> While loop </h1>";
    print '<hr>';
    print '<br>';

    $num = 1;
    while ($num <= 50) {
        echo "Number " . $num . "<br>";
        $num ++; 
    }

    print '<br>';
    print '<br>';

    $num = 2 ; 
    while ($num < 20 ) : 
        echo "number " . $num . "<br>";
        $num ++ ;
    endwhile;