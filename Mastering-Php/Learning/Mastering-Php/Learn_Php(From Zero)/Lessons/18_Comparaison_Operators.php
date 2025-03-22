<?php

    /*
        Comparaison Opertaors : 
        ------------------------

            Part 1 :
            --------
            ==      : Equal 
            !=      : Not Equal 
            <>      : Not Equal 
            ===     : Identical 
            !==     : Not Identical 

        In the Equal     : Remeber We test The value Not the datatype . (Line 19 To 38)
        In the Identical : Remeber we tst the value and the datatype . (line 43 )
    */

    // Test Equal : 
    echo "checking 100 == 100 : ";
    var_dump(100 == 100);
    echo "<br>";

    echo "checking 100 == '100' : ";
    var_dump(100 == '100');
    echo "<br>";
    echo "<br>";

    echo "checking 67 != 65 : ";
    var_dump(67 != 65);
    echo "<br>";

    echo "checking 78 <> 61 : ";
    var_dump(78 <> 61);
    echo "<br>";

    echo "checking 898 === 51 : ";
    var_dump(898 === 51);
    echo "<br>";
    echo "--------------------------------------------------------------------------";
    echo "<br>";

    // Test Identical  :
    echo "Testing '100' = 100 : ";
    var_dump('100' === 100); // same value but not the same datatype . 
    echo '<br>';

    echo "Testing 100 = 100 : ";
    var_dump(100 === 100);
    echo '<br>';

    echo "Testing 100.0 = 100 : ";
    var_dump(100.0 === 100); // same value but not the same datatype . 
    echo '<br>';
    echo '<br>';

    echo "Testing 78 !== '78' : ";
    var_dump(78 !== '78');
    echo "<br>";

    echo "Testing 78 !== 78 : ";
    var_dump(78 !== 78);
    echo "<hr>";

    // ----------------------------------------------------------------------------------------------------------------------------------------

    /*
        Comparaison Operators : 
        -----------------------

        Part 2 :
        --------
        >       : Larger Than 
        >=      : Larger than Or Equal 
        <       : Less Than 
        <=      : Less Than Or Equla 

        <=>     : Spaceship [Less Than , Equal Or Greather]
            -> It return (-1) if it is less than , (0) it is equal and (1) if it is greather . 

        Search For : 
            - HOW DOES PHP COMPARE STRINGS WITH COMPARAISON OPERATORS ? 
    */

    echo "test 67 > 14 : ";
    var_dump(67 > 14);
    print "<br>";

    echo "Test 18 >= 18 : ";
    var_dump(18 >= 18); // not greather , but it equal . 
    print "<br>";

    echo "test 18 >= 19 : ";
    var_dump(18 >= 19);
    print "<br>";

    echo "test 5 < 8 : ";
    var_dump(5 < 8);
    print "<br>";

    echo "Test 20 <= 21 :"; // not equla but it is less than 21 
    var_dump(20 <= 21);
    print "<br>";
    print "<br>";

    echo "testing 78 <=> 900 : "; // Less than So (-1)
    var_dump(78 <=> 900);
    print "<br>";

    echo "testing 415 <=> 415 : "; // Equal So (0)
    var_dump(415 <=> 415);
    print "<br>";

    echo "testing 133 <=> 100 :"; // Greather than So (1)
    var_dump(133 <=> 100);
