<?php

    /*
            - String Functions (part9) : 
            ----------------------------

        - strstr(String[Required], Search [Required], Before Search [Optional] = False)
            ---> Alias [strchr]
            Case-Sensitive
        - stristr(String[Required], Search [Required], Before Search [Optional] False)
            Case-Insensitive
        - number_format(Number [Required], Decimals [Optional], Decimal_String[Optional], Separator [Optional])
    */

    echo "<h1> String functions (part9) </h1>";
    print "<hr>";
    print "<br>";

    echo "the strstr functions without before search it print what follow the search field  : ". "<br>";
    $str = "hello my brother , how are you ? ";

    echo "<b>" . strstr($str , "my") . "</b>" . "<br>"; // my brother , how are you ?
    echo "<b>" . strstr($str , "how") . "</b>" . "<br>"; // how are you ?
    echo "<b>" . strstr($str , "a") . "</b>" . "<br>"; // are you ?

    print "<br>";

    echo "the strstr function with the before search it print what is before the saerch field : " . "<br>";
    echo "<b>" . strstr($str , "my" , true) . "</b>" . "<br>"; // hello
    echo "<b>" . strstr($str , "how" , true) . "</b>" . "<br>" . "<br>"; // hello my brother ,

    echo "here is the exemple with the strstr with Upper case character : " . "<br>" ; 
    echo strstr($str , "My", true ) ; // false because it is case sensitive 
    echo "<b>";
    var_dump(strstr($str , "My" , true));
    echo "</b>";   


    print '<br>';
    print '<br>';


    // the exemple of the stristr : 
    $string_1 = "php is a script language for the server side ";
    echo "the exemple of the stristr function : " . "<br>";
    echo "<b>" . stristr($string_1 , "SCRipt") . "</b>" . "<br>";

    $string_2 = " exemple : My name is mouhamed"; 
    echo stristr($string_2 , "Exemple");

    print "<br>";
    print "<br>";

    echo stristr($string_2 , "mouha" , true);

    print '<br>';
    print '<br>';
    print '<br>';


    // the exemple of the numbe format : 

    $num = 100_000_000; // we use this way to make the number clear and readable 
    $num2 = 1_000_000 ; 
    echo number_format($num , 9) . "<br>";
    print "<br>";
    echo number_format($num2 , 9 , "/") . "<br>";
    print "<br>";
    echo number_format($num2 , 9 , "/" , "#") . "<br>";






