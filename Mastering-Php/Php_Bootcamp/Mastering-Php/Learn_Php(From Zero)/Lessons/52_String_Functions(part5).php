<?php

    /*
            - String functions (part5) : 
            ----------------------------

            - parse_str(String[Required], Array[Required])
            - quotemeta(String[Required])
            - strtr(String[Required], From [Required], To[Required]) || strtr(String[Required], Array[Required])

            str_pad(String[Required], Length [Required], String[Optional], Pad Flag[Optional])
                STR_PAD_BOTH
                STR_PAD_LEFT
                STR_PAD_RIGHT
    */

    echo "<h1> String Functions (part5) : </h1>";
    print "<hr>";
    print "<br>";

    echo "the parse_str function : " ;
    print '<br>';
    parse_str("name=mouhamed&age=19&email=mouha22tali@gmail.com&note=10.5", $data);

    echo "<pre>";
    print_r($data);
    echo "</pre>";

    // accessing the data by index : 
    echo "the name is : " . $data["name"] . "<br>";
    echo "the age is : " . $data["age"] . "<br>";
    echo "the email is : " . $data["email"] . "<br>";
    echo "the note is : " . $data["note"] . "<br>";


    print "<br>";
    print "<br>";
    print "<br>";


    // the quotemeta function : 
    $without_quotemeta = "hello @ i'm | 6 yars / older than You [] {'' ";
    echo "without quotemeta function  : " . $without_quotemeta ."<br>";
    echo "with the quotemeta function : " . quotemeta($without_quotemeta);

    print "<br>";
    print "<br>";
    print "<br>";

    $fix =  "this is the mine that shoumd fixed " ;
    echo "the line before fixing : " . "<b>" . $fix . "</b>" . "<br>";
    echo "the line after fixing would be : " . "<b>" . strtr($fix , "m" , "l") . "</b>" . "<br>";

    print "<br>";
    print "<br>";
    print "<br>";


    echo "translating more tha one charcter : "."<br>";

    $message = "hello xorld , iow cre zou " ; 
    $char_for_fix = ["x" => "w" , "i" => "h" , "c" => "a" , "z" => "y" ];
    echo "the sentenece before fixing : " . "<b>" . $message . "</b>" . "<br>";
    echo "the sentenece after fixing : " . "<b>" .strtr($message , $char_for_fix)  . "</b>" . "<br>";


    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";

    // the strpad : 
    echo "189" . "<br>";
    echo "=> " . str_pad("189" , 10 , 0 , STR_PAD_BOTH) . "<br>";
    echo "7917" . "<br>";
    echo "=> " . str_pad("7917" , 10 , 0 , STR_PAD_BOTH). "<br>";
    echo "79118" . "<br>";
    echo "=> " . str_pad("79118" , 10 , 0 , STR_PAD_LEFT) . "<br>";
    echo "781812" . "<br>";
    echo "=> " . str_pad("781812" , 10 , 0 , STR_PAD_LEFT) . "<br>";
    echo "9191091" . "<br>";
    echo "=> " . str_pad("9191091" , 10 , 0 , STR_PAD_RIGHT) . "<br>";
    echo "01810819" . "<br>"; 
    echo "=> " . str_pad("01810819" , 10 , 0 , STR_PAD_RIGHT) . "<br><br>";    




