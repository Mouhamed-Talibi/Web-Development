<?php

    // arithmetic operations : 
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

    echo "The sum :  " . 15 + 15 . "<br>";
    echo "The subtract : " . 15 - 10 . "<br>";
    echo "The multiplication : " . 15 * 2 . "<br>";
    echo "The divsision : " . 15 / 15 . "<br>";
    echo "The modulus : " . 15 % 3 . "<br>";
    echo "The exponontaition : " . 15 ** 15 . "<br>";

    print "<br>";

    /* Assignement opertaors : 
    -------------------------
        - Used to Write value to another
        $a   +=   $b   -> addition 
        $a   -=   $b   -> subtraction
        $a   *=   $b   -> Multiplication 
        $a   /=   $b   -> Division 
        $a   %=   $b   -> Modulus 
        $a  **=   $b   -> Exponentiation   
    */
    $x = 7;
    $y = 3;
    $x += $y;
    echo $x . "<br>";
    $x -= $y;
    echo $x . "<br>";
    $x *= $y;
    echo $x . "<br>";
    $x /= $y;
    echo $x . "<br>";
    $x %= $y;
    echo $x . "<br>";
    $x **= $y;
    echo $x . "<br>";

    print "<br>";

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
    var_dump(100 == 18);
    print "<br>";
    var_dump(100 != 18);
    print "<br>";
    var_dump(100 <> 18);
    print "<br>";
    var_dump(100 === 100);
    print "<br>";
    var_dump(100 !== '100');
    print "<br>";

    var_dump(19 > 17);
    echo "<br>";
    var_dump(19 < 17);
    echo "<br>";
    var_dump(19 >= 17);
    echo "<br>";
    var_dump(19 <= 19);
    echo "<br>";

    print "<br>";

    /*
    - Incrementing & Decrementing Opertaors : 
    ----------------------------------
        Increase & Decrease Values : 
        - When we write the ++ or the -- after the variable , we call it the post(increment  , decrement)
        - when we write the ++ or -- before the variable , we call it the pre(increment , decrement)
    */
    $like = 0;
    $like++;
    $like++;
    $like++;
    echo "The number of likes is : " . $like . "<br>";

    $like --;
    $like --;
    $like --;
    $like --;
    echo "The number of like is  : " . $like . "<br>";

    --$like;
    --$like;
    --$like;
    echo "The number of likes is : " . $like . "<br>";

    ++$like;
    ++$like;
    ++$like;
    ++$like;
    echo "The number of like is  : " . $like . "<br>";

    print "<br>";

    /*
        Logical Operators : 
        -------------------
            Compare Conditions : 
            --------------------

        and -> AND           : Two are True 
        &&  -> AND           : Two are True ["&&" Has a greater Precedence than 'and']
        or  -> OR            : One or both  are True 
        ||  -> Or            : One or Both are True ["||" Has a greater precedence than 'or']
        xor -> XOR           : One is True But not Both 
        !   -> not           : Not True 
    */

    var_dump(10 >= 10 and 8 < 9);
    echo "<br>";
    var_dump(10 >= 10 && 8 < 9);
    echo "<br>";
    var_dump(10 >= 10 or 8 < 9);
    echo "<br>";
    var_dump(10 > 10 xor 8 < 9);
    echo "<br>";
    var_dump(30 != 10);
    echo "<br>";

    print "<br>";

    // string opeartions : 
    $film = "THE";
    $film .= " MECHANIC";
    echo "$film is one of the greatest films in the world" . "<br>";

    print "<br>";

    /*
                Array Operators : 
                -----------------
        +       =>  Union 
        ==      =>  Equal - same key and value 
        !=      =>  Not Equal 
        <>      =>  Not Equal 
        ===     =>  Identical - Same key and value , same order , same type 
        !==     => Not Identical 
    */
    $arr_1 = ["mouhamed", "yassin", "acharf"];
    $arr_2 = ["abdo", "khalid", "bader"];
    $arr_3 = $arr_1 + $arr_2;
    print_r($arr_3);
    echo "<br>";
    var_dump($arr_1 != $arr_2);
    echo "<br>";
    var_dump($arr_1 === $arr_2);

    print "<br>";
    print "<br>";

    // error control : 
    $file = file("1.php") or die("File Not Exists");

    // Conditions : 
    if($name = "mouhamed"){
        echo "This is Mouhamed, welcome";
    }elseif($name == "Abdltif"){
        echo "Hello Abdeltif , happy to see you";
    }elseif($name == "khalid"){
        echo "hello khalid, how are you today ?";
    }else{
        echo "There is no one here .";
    }

    print "<br>";

    // alternate synthax  : 
    if(10 > 5) echo "This is True";
    else echo "This is False";
    print "<br>";
    if(5 == 5) : 
        echo "This is True";
    elseif (8 != 9) :
        echo "This is also True";
    endif;

    print "<br>";
    print "<br>";

    // nested if : 
    $is_student = True;
    $is_young = True;
    $country = "Morocco";
    if($is_student == True){
        if($is_young == True){
            if($country == "Morocco"){
                echo "Hello You Have A gift Of 15599$" . "<br>";
            }else{
                echo "Your gift is : 8999$" . "<br>";
            }
        }else{
            echo "Your gift is 7889$" . "<br>";
        }
    }else{
        echo "Your Gift Is : 900$" . "<br>";
    }

    print "<br>";

    // ternary conditional : 
    echo (10 > 5) ? "Correct" : "This is Wrong" . "<br>";
    echo "i love php because its a ".( 12 > 6 ?  "good" : "Not Good")." language" ."<br>";

    print "<br>";

    // switch : 
    $day = "Friday";
    switch ( $day ) {
        case 'Monday':
            echo "hello , This is the $day We're Open from 9 to 14 Pm";
            break;

        case 'Thursday':
            echo "hello this is the $day . we're Open from 10 to 15 Pm";
            break;

        case 'Wednesday':
            echo "hello this is the $day . we're Open from 8 to 13 Pm";
            break;

        case 'Friday':
        case 'Saturday':
            echo "Hello this is the $day . We are Open From 10 to 17 Pm"; // We do this because we are open in Friday and Saturday at The Same Time
            break;

        default:
            echo "Unkown day";
    }
















    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";

