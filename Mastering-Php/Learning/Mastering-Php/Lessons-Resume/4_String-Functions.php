<?php

    /*
                - String Functions : (part 1) 
                -----------------------------

                    . lcfirst( string [required] ) 
                        -> lowercase first letter 
                    . ucfirst( string [required] ) 
                        -> uppercase first letter 
                    . strtolower( string [required] ) 
                        -> string to lower
                    . strtoupper( string[required] ) 
                        -> string to upper 
                    . ucwords( string[required] , Delimiters[optional] ) 
                        -> uppercase words 
                    . str_repeat( string[reauired] , count(required) ) 
                        -> string repeat 
    */

    $string = "hello , how are you BRO ";
    echo lcfirst($string) . "<br>";
    echo ucfirst($string) . "<br>";
    echo strtolower($string) . "<br>";
    echo strtoupper($string) . "<br>";
    echo ucwords($string) . "<br>";
    echo str_repeat($string, 2) . "<br>";

    print "<br>";

    /*
            - String fucntions (part2) : 
            ---------------------------

            - implode(Separator [Optional], Array[Required]) =>join() Is Alias
            - explode(Separator [Required], String [Required], Limit [Optional])
            - str_shuffle(String[Required])
            - strrev(String[Required])
            - trim(String[Required], CharsList[Optional])  
            - ltrim(String[Required], CharsList[Optional])
            - rtrim(String[Required], CharsList[Optional])
    */
    $users = ["mouhamed", "ahmed", "achraf", "bader", "khalid"];
    echo "<pre>";
        print_r(implode(" | ", $users));
    echo "</pre>";

    print "<br>";

    $sentence = "This is the sentence for the explode function";
    echo "<pre>";  
        print_r(explode(" ", $sentence, 5));
    echo "</pre>";

    print "<br>";

    $shuffle = "hello";
    echo "the shuffling word is :  " . "<b>" . str_shuffle($shuffle) . "</b>" . "<br>";
    $reversed = "this is true";
    echo strrev($reversed) . "<br>";
    $trimed = "@This is Trimed Senetence#/";
    echo trim($trimed, "@#/") . "<br>";

    print "<br>";

    /*
            - String functions (part3) : 
            ----------------------------

            - chunk_split( String[Required] , Length [Optional], End [Optional])
            - strlen( String[Required] )
            - str_split( String[Required] , Length [Optional] )
            - strip_tags( String[Required] , Allowed [Optional])
            - n12br( String[Required] , XHTML [Optional] )
    */
    $string = "this is a string";
    echo chunk_split($string, 3, "-") . "<br>";
    echo "the length of the string is :  " . strlen($string) . " chars <br>";
    echo "<pre>";
        print_r(str_split($string, 4));
    echo "</pre>";

    $tags = "<br> this  <i>is the deleted price</i> <del> 89$ </del>";
    echo strip_tags($tags, "<i> <del>") . "<br>";
    $text = "Hello World!\nThis is a new line.";
    $formattedText = nl2br($text);
    echo $formattedText . "<br>";

    print "<br>";

    /*
            - String functions (part4) : 
            ----------------------------

            - strpos( String[Required] , Value[Required] , Start Position [Optional])       ->  Case-Sensitive
            - strrpos(String[Required], Value[Required], Start Position [Optional])         -> Case-Sensitive & it return to you 
                the last text you search for  
            - stripos (String[Required], Value[Required], Start Position [Optional])        -> Case-Insensitive
            - strripos (String[Required], Value[Required], Start Position [Optional])       -> Case-Insensitive
            - substr_count(String[Required], Value[Required], Start Position [Optional], Length [Optional])
        - Search : 
        ----------
            . Overlap string 
    */
    $string = "This is the string number Five";
    $position = strpos($string, "is");
    echo $position . "<br>";
    echo strripos($string, "StriNG") . "<br>";

    $string = "This is the string number Five. This is the second sentence.";
    $count = substr_count($string, "is");
    echo "The substring 'is' appears $count times.<br>";

    print '<br>';

    /*
            - String functions (part5) : 
            ----------------------------

            - parse_str(String[Required], Array[Required])
            - quotemeta(String[Required])
            - strtr(String[Required], From [Required], To[Required]) || strtr(String[Required], Array[Required])
            - Str_replace ( Find[required] , Replace with[required] , Data[required] , Replace count[optional] )  -> Case Sensitive 
            - str_ireplace ( Find[required] , Replace with[required] , Data[required] , Replace Count[Optional] ) 
            - str_pad(String[Required], Length [Required], String[Optional], Pad Flag[Optional])
                STR_PAD_BOTH
                STR_PAD_LEFT
                STR_PAD_RIGHT
    */
    parse_str("name=mouhamed&age=19&email=mouha22tali@gmail.com&note=10.5", $data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    $string = "Hello, how are you? (I hope you're fine!)";
    $escapedString = quotemeta($string);
    echo "Original String: $string<br>";
    echo "Escaped String: $escapedString<br> <br>";

    $string = "Hello World !";
    echo strtr($string, "HWo", 'hwO') . "<br><br>";

    $input = "Hello";
    $padLength = 10;

    $paddedRight = str_pad($input, $padLength, "*"); 
    $paddedLeft = str_pad($input, $padLength, "*", STR_PAD_LEFT); 
    $paddedBoth = str_pad($input, $padLength, "*", STR_PAD_BOTH); 
    echo "Right padded: '$paddedRight' <br>"; 
    echo "Left padded: '$paddedLeft' <br>";   
    echo "Both padded: '$paddedBoth' <br><br>"; 

    $string = "The quick brown fox jumps over the lazy dog.";
    $search = ["quick", "brown", "lazy"];
    $replace = ["slow", "black", "active"];

    $replacedString = str_replace($search, $replace, $string);
    echo $replacedString . "<br><br>";

    /*
        - String Functions (substr_replace) : 
        -------------------------------------

            substr_replace(String[Required], Replace With Or Insert [Required], Start [Required], Length[$])
                $ Positive Number =>  Length of String To Be Replaced
                $ Negative Number =>  Characters Left At The End After Replacement
                $0                =>  Insert Instead Of Replace
    */
    $string = "Hello, World!";
    $replacement = "Mouhamed";
    $start = 7;
    $length = 5; 
    $modifiedString = substr_replace($string, $replacement, $start, $length);
    echo $modifiedString . "<br><br>"; 

    /*
            - string functions (part8)  :
            ----------------------------

            - wordwrap(String[Required], width [Optional 75], Break Char[Optional "\n"], Cut Long [Optional False])
            - ord(String[Required])
            - chr(Int [Required])
            - similar_text(String One[Required], String Two [Required], Percent [Optional])
                => It Returns The Number Of Matching Characters 
    */
    $string = "Don't give up , you have to continue to your own path and continue your_self_developement";
    echo wordwrap($string, 6, " #-# ") . "<br>";
    echo "the binary number of (a) is : " . ord("a") . "<br>";
    echo "the character of this bunary number (65) is :  " . chr(65) . "<br>";
    print '<br>';

    $string1 = "Hello, World!";
    $string2 = "Hello, World!";
    $similarity = similar_text($string1, $string2, $percent);
    echo "Matching characters: $similarity <br>"; 
    echo "Similarity percentage: $percent% <br> <br>";

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
    $string = "Hello, World!";
    $substring = "World";
    $result = strstr($string, $substring);

    if ($result !== false) {
        echo $result; 
    } else {
        echo "Substring not found.";
    }

    print "<br>";
    print "<br>";