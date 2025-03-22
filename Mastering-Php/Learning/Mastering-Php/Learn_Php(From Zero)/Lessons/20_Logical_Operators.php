<?php

    /*
                Logical Operators : 
                -------------------

            Compare Conditions : 
                -----------

        and -> AND           : Two are True 
        &&  -> AND           : Two are True ["&&" Has a greater Precedence than 'and']
        or  -> OR            : One or both  are True 
        ||  -> Or            : One or Both are True ["||" Has a greater precedence than 'or']
        xor -> XOR           : One is True But not Both 
        !   -> not           : Not True 
    */

    echo "<h1> Loical Operators : Our lesson Today :) </h1>";

    echo "the exemple of the 'and' ,  all consitions are True : ";
    var_dump(100 > 50 and 100 > 78 and 100 > 90 and 99 > 56 ); // all conditions are True . 
    print "<br>";

    echo "the exemple of the 'and' , One all consitions not True (100 < 78)  : ";
    var_dump(100 > 50 and 100 < 78 && 100 > 90 AND 99 > 56 ); // one condition not True . 
    print "<br>";
    print "<br>";

    echo "The exemple of the 'or' , One Condition is True(67 >= 14) : "; // One condition is True 
    var_dump(89 < 78 OR 67 >= 14 or 89 == 56);
    print "<br>";

    echo "The exemple of the 'or' , No condition is True : "; // No condition is true 
    var_dump(67 > 89 or 90 == 100 || (79 - 13 == 789));
    print "<br>";
    print "<br>";

    echo "the exemple of the 'xor' , One condition is true and the other not : ";
    var_dump(167 == 167 xor 78 > 90 );
    print "<br>";
    echo "the exemple of the 'xor' , Two conditions are true  : ";
    var_dump(167 == 167 xor 78 < 90 ); // must be 1 conditions True . 

