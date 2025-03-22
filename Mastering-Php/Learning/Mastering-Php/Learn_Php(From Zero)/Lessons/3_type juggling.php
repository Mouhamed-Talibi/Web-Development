<?php

    /*
        datatypes : 
        -----------
        - Type Juggling & Automatic type conversion
            -> The automatic type conversion start when the data returned to us . 
    */



    print 1 + "2"; // The Result Is 3
    echo "<br>";
    print gettype(1 + "2"); // the result is Integer , and here is the < Automatic cnversion > .
    echo "<br>";
    print True; // 1
    echo "<br>";
    print gettype(True); // Boolean
    echo "<br>";
    print True + True ; // The Result Is 2
    echo "<br>";
    print gettype(True + True); // Integer
    echo "<br>";
    print 5 + "5 Lessons"; // 10 + warning
    echo "<br>";
    print gettype(5 + "5 Lessons"); // Integer + Warning
    echo "<br>";
    print 10 + 15.5; // 25
    echo "<br>";
    print gettype(10 + 15.5); // The Type Is Double = Float 
    echo "<br>";

