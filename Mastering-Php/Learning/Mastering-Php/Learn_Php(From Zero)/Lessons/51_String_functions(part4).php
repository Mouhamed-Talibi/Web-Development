<?php

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

    echo "<h1> String functions (part4) : </h1>";
    print "<hr>";
    print "<br>";

    $str = "hello world hello world hello world my name is hello";
    echo "the position of the (hello world) is : " . strpos($str , "hello world") . "<br>";
    echo "the position of the (my name is ) is : " ;
    var_dump(strpos($str , "my name is "));

    print "<br>";
    print "<br>";

    echo "the position of the (hello world) using the negative form : " . strpos($str , "hello" , -5 ) . "<br>"; //  Index 47 
    echo "the position of the (name) using the negative form is : " . strpos($str , "name" , -13) . "<br>"; // Index 39 

    print "<br>";
    print "<br>";

    $string_1 = "my full name is mouhamed mouhamed talibi talibi";
    echo "the position of the last (mouhamed) using the strrpos function is : " . strrpos($string_1 , "mouhamed") . "<br>"; // 25 
    echo "the position of the last (talibi) using the strrpos function is : " . strrpos($string_1 , 'talibi', -6  ) . "<br>"; // 41 

    print "<br>";
    print "<br>";
    print "<br>";

    // the exemple of the stripos > it mean that the letters aren't sensitive , ( no difference between H and h )
    $string_2 = "I will be a backend devloper using php backend ";
    echo "the position of the (devloper) using the stripos function is : " . stripos($string_2 , "DEVLOPER") . "<br>"; // 20 
    echo "the position of the last  (backend) using the strripos function : " . strripos($string_2 , "BACKend") . "<br>"; // 39 

    print "<br>";
    print "<br>";


    $string_3 = "abc abc abc abc abc abc abc abc abc abc xy xy xy xy xy xy xy xy xy xy ";
    echo "the number of the (xy) in the variable string_3 is : " . substr_count($string_3 , "xy") . "<br>"; // 10 
    echo "the number of the (abc) in the variable stirng_3 is : " . substr_count($string_3 , "abc") . "<br>" ; // 10 
