<?php

    // Operatpors : 
        // - Used to perform operation in values 

    /*
        $a  +  $b -> Adddition 
        $a  -  $b -> subtraction 
        $a  *  $b -> miltiplication 
        $a  /  $b -> division 
        $a  %  $b -> Modulus 

        $a  **  $b -> Exponentiation 
        +$a        -> Identity , it convert the number to integer datatype . 
        -$a        -> negation , 
     */

    echo "<b> Today we are going to practice the arithmetic operations : </b>"."<br>"."<br>"; 

    // addition operators : 
    echo "the sum of 10 + 14 is : ".(10 + 40)."<br>";
    echo "the type of the operation (10 + 40 ) is : ".gettype(10 + 40)."<br>";
    echo "the sum of 9.5 + 14 is : ".(9.5 + 40)."<br>";
    echo "the type of the operation (9.5 + 40 ) is : ".gettype(9.5 + 40)."<br>"."<br>";

    // sbtraction opeerators : 
    echo "the subtraction of (67 -14) is : ".(67 - 14)."<br>";
    echo "the type of the operation (67 - 14) is :".gettype(67 - 14)."<br>";
    echo "the subtraction of (67.67 -14) is : ".(67.67 - 14)."<br>";
    echo "the type of the operation (67.67 - 14) is :".gettype(67.67 - 14)."<br>"."<br>";

    //  multiplication operators : 
    echo "the multiplication of (16 * 7) is : ".(16 * 7)."<br>";
    echo "the type of the operator (16 * 7 ) is : ".gettype(16 * 7)."<br>";
    echo "the multiplication of (16.89 * 7) is : ".(16.89 * 7)."<br>";
    echo "the type of the operator (16.89 * 7 ) is : ".gettype(16.89 * 7)."<br>"."<br>";

    // Division operators  : 
    echo "the division of (27 / 3) is : ".(27 / 3)."<br>";
    echo "the type of the operator (27 / 3 ) is : ".gettype(27 / 3)."<br>";
    echo "the division of (20.89 / 7) is : ".(20.89 / 7)."<br>";
    echo "the type of the operator (20.89 / 7 ) is : ".gettype(20.89 / 7)."<br>"."<br>";

    //  Modulus operators : 
    echo "the modulus of (19 % 5) is :".(19 % 5)."<br>";
    echo "the type of the operator (19 % 5 ) is : ".gettype(19%5)."<br>";
    echo "the modulus od (17.34 % 2) is : ".(17.34 % 2)."<br>";
    echo "the type of the operatipn (17.34 % 2) is : ".gettype(17.34 % 2)."<br>"."<br>";

    // exponentiation operators : 
    echo "the exponentiation of (5 ** 7) is : ".(5 ** 7 )."<br>";
    echo "the type of the operation (5 ** 7 ) is : ".gettype(5 ** 7)."<br>";
    echo "the exponentiation of (7.3 ** 6 ) is : ".(7.3 ** 6 )."<br>";
    echo "the type of the operator (7.3 ** 6 ) is : ".gettype(7.3 ** 6 )."<br>"."<br>";

    // Indentity and negation : 
    echo "the type of '100' is : ".gettype("100")."<br>";
    echo "the type of + '100' is : ".gettype(+"100")."<br>";
    echo "the type of '-100' is : ".gettype("-100")."<br>";
    echo "the type of -'100' is : ".gettype(-"100")."<br>";
