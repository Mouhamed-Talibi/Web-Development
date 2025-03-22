<?php

    // gettype function : used to get you the type of the value you passed to 
    echo gettype(True) . "<br>";
    echo gettype("abcds") . "<br>";
    echo gettype(19) . "<br>";
    echo gettype([89, "mouhamed", 189.9, "this"]) . "<br>";

    print "<br>";

    // type juglling, casting : 
    echo gettype(True + True) . "<br>";
    echo gettype(17 - "8.90") . "<br>";
    echo gettype(19 * (integer) "19 chars") . "<br>";
    echo gettype((float) 19 + (float) 17) . "<br>";

    print "<br>";

    // vardump() function : 
    var_dump(True);
    print "<br>";
    var_dump(False);
    print "<br>";
    var_dump("This is me");
    print "<br>";

    print "<br>";

    // string and escaping : 
    echo "Now I'm Escaping these double quotes : \" THOSE ARE ESCAPED DOUBLE QUOTES \"" . "<br>";
    echo "Here is 4 Backslashes are escaped : \\\\\\\\ " . "<br>";
    echo nl2br("
        This is the first line Using nl2br, 
        This is the second line Using nl2br, 
        This is the third line Using nl2br, 
        This is the Fourth line Using nl2br.
    ");

    print "<br>";

    // here & now doc : 
    echo <<<"here"
        this is the first line in from the here doc , <br>
        this is the secon line from the here doc, <br>
        <i> this is the third line from the here doc </i> <br>
        in ths line i am trying to to escape 5 backslashes :  \\\\\\\\\\ , You will find 5 <br>
        <strong> Note tha the you can name it as you want & The here doc it respect the tags and elements inside it</strong> <br>
    here;
    print "<br>";
    echo <<<'nowdoc'
        This is the first line in the now doc <br>
        this is the sencond line in the now doc <br>
        here i am trying to escape 5 backslashes : \\\\\\\\\\ but you will fing 10.
    nowdoc;

    print "<br>";

    // array with keys  : 
    $array = [
        "Class-1" => [
            1=> "Mouhamed",
            2=> "Yassin",
            3=> "Achraf",
        ],
        "Class-2" => [
            1 => "Talibi",
            2 => "Elbehja",
            3 => "Fahim"
        ]
    ];
    echo "<pre>";
        print_r($array);
    echo "</pre>";

    print "<br>";

    // variables : 
    $name = "mouhamed";
    $age  = 19;
    echo "my name is $name and my age is : $age" . "<br>";
    $name_2 = $name; // Assign by value 
    echo "the name 2 is the same as the name1 : $name_2" . "<br>";
    $name_3 = &$name; // Assign by reference 
    $name = "Ahmed";
    echo "The name_2 is  : " . $name_2 . "<br>";
    echo "The name_3 is  : " . $name_3 . "<br>";

    print "<br>";

    // Predefined Variables : 
    echo "<pre>";
        print_r($_SERVER);
    echo "</pre>";
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";

    print "<br>";

    // Constants : 
    define("USER", "Mouhamed");
    echo "The User coastant is : " . USER . "<br>";
    define("BOOK", "Atomic Habits");
    echo "The book is : " . BOOK . "<br>";
    define("NUMBER", 10);
    echo "The result of the number constant * 10 is : ". NUMBER * 10 . "<br>";

    print "<br>";

    // Predefined & magic constats : 
    echo "My php version is : " . PHP_VERSION . "<br>";
    echo "My php os family is : " . PHP_OS_FAMILY . "<br>";
    echo "My php int max is : " . PHP_INT_MAX . "<br>";
    echo "My php int min is : " . PHP_INT_MIN . "<br>";
    echo "My php default include path is : " . DEFAULT_INCLUDE_PATH . "<br>";

    print "<br>";

    echo "the current file is : " . __FILE__  . "<br>";
    echo "the current directory is : " . __DIR__  . "<br>";
    echo "the current line is : " . __LINE__  . "<br>";

    print "<br>";   