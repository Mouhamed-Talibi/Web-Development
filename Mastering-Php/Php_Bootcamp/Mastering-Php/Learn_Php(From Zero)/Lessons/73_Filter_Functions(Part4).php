<?php

    /*
            - Filter Functions (part4) : 
            ----------------------------

        - filter_var(Value[Required], Filter[Optional], Options[Optional])
            Sanitize Filters 

                FILTER_SANITIZE_EMAIL : 
                    Remove all But Letters + Digits + ( !#$%'*+=-?"?_-{|}@.[])
                    Test ¥

                FILTER_SANITIZE_NUMBER_INT :
                    Remove all but Digits, +, - 

                FILTER_SANITIZE_NUMBER_FLOAT : 
                    Remove all But Digits, +, -, And Optionally [-, eE]
                    Flag  =>  FILTER_FLAG_ALLOW_THOUSAND
                    Flag  =>  FILTER_FLAG_ALLOW_FRACTION 

                FILTER_SANITIZE_URL :
                    Remove all but letters + Digits + $-_.+!{}(),^\\[]?@;=%#<>
                    test ¥ + Space 
    */


    echo "<h1> Filter Functions (part4) : </h1>";
    print "<hr>";
    print "<br>";

    $email = "mouha@mail.com";
    echo "Filtering the email : (mouha@mail.com) : ";
    var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
    print "<br>";

    $email = "mouha@              jsjs      ////////snmail.com";
    echo "Filtering the email : (mouha@              jsjs      sjn////////snsnmail.com) : ";
    var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
    print "<br>";

    print "<br>";
    print "<br>";

    // Sanitize the integers : 
    $int = "189";
    echo "Filtering the int (189) : ";
    var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
    print "<br>";

    $int = "189 ,zjzkjjzçàéççééà";
    echo "Filtering the int (189 ,zjzkjjzçàéççéé) : ";
    var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
    print "<br>";

    $int = "(189 + 7817) - 898,nzjzkjjzçàéççééà";
    echo "Filterig the int (189 + 7817) - 898,nzjzkjjzçàéççééà) : ";
    var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
    print "<br>";

    print "<br>";
    print "<br>";

    // Sanitize the floats : 
    $float = "19.78";
    echo "Filtering the float (19.78) : ";
    var_dump(filter_var(
        $float, 
        FILTER_SANITIZE_NUMBER_FLOAT
    ));
    print "<br>";

    $float = "2, 456, 978";
    echo "Filtering the float (2, 456, 978) : ";
    var_dump(filter_var(
        $float, 
        FILTER_SANITIZE_NUMBER_FLOAT,
        ["flags"=> FILTER_FLAG_ALLOW_THOUSAND]
    ));
    print "<br>";

    $float = "2, 456, 978.677";
    echo "Filtering the float (2, 456, 978.677) : ";
    var_dump(filter_var(
        $float, 
        FILTER_SANITIZE_NUMBER_FLOAT,
        ["flags"=> FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
    ));
    print "<br>";

    $float = "HHHSjh87.677";
    echo "Filtering the float (HHHSjh87.677) : ";
    var_dump(filter_var(
        $float, 
        FILTER_SANITIZE_NUMBER_FLOAT,
        ["flags"=> FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
    ));

    print "<br>";
    print "<br>";

    // sanitize Url : 
    $url = "https://elzero.org";
    echo "Filtering the url: (https://elzero.org) : ";
    var_dump(filter_var($url, FILTER_SANITIZE_URL));
    print "<br>";

    $url = "https://  ¥¥¥¥  elzero.org";
    echo "Filtering the url: (https://  ¥¥¥¥  elzero.org) : ";
    var_dump(filter_var($url, FILTER_SANITIZE_URL));
    print "<br>";

    $url = "https://  ¥¥¥¥89898  elzero.org";
    echo "Filtering the url: (https://  ¥¥¥¥89898  elzero.org) : ";
    var_dump(filter_var($url, FILTER_SANITIZE_URL));
    print "<br>";