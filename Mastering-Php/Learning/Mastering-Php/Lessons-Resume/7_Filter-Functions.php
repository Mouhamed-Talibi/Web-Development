<?php

    /*
            - Filter Functions (part1) : 
            --------------------------

        - filter_list()
            Return a list of all supported filters. 
        - filter_id(filter_Name[Required])
        - filter_var(Value[Required], Filter[Optional], Options[Optional])
            filters a variable with a specific filter 
    */
    echo "<pre>";
        print_r(filter_list());
    echo "</pre>";

    echo "The id Of The boolean filter is : " . filter_id("boolean") . "<br>";
    echo "The id Of The string filter is : " . filter_id("string") . "<br>";
    echo "The id Of The float filter is : " . filter_id("float") . "<br><br>"; 

    /*
            - Filter Functions (part2) : 
            ----------------------------

        - Filter_var(Value[Required], Filter[Optional], Options[Optionam])
            Validate Filters 

                - FILTER_VALIDATE_BOOL : [True, yes, on, 1] 
                    flag => FILTER_NULL_ON_FAILURE => False or [False, 0, No, Off, ""] Only
                - FILTER_VALIDATE_URL : 
                    Flag : FILTER_NULL_ON_FAILURE
                    Flag : FILTER_FLAG_PATH_REQUIRED
                    Flag : FILTER_FLAG_QUERY_REQUIRED
                - FILTER_VALIDATE_IP
                    Flag : FILTER_NULL_ON_FAILURE
                    Flag : FILTER_FLAG_IPV4
                    Flag : FILTER_FLAG_IPV6
                - FILTER_VALIDATE_MAC 
                    Flag : FILTER_NULL_ON_FAILURE 
    */
    $bool = True;
    var_dump(filter_var($bool, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
    print "<br>";

    $flags = ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED];
    $url = "https://elzero.org/users?id=1";
    echo "<b>". "Filtering the full url (https://elzero.org/users?id=1) : " . "</b>";
    var_dump(filter_var($url, FILTER_VALIDATE_URL, $flags));
    print "<br><br>";

    $ip = "192.168.0.189";
    echo "filtering the ip (192.168.0.189) : ";
    var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)); // validate
    print "<br>";

    $ip = "2001:0db8:85a3:0000:0000:8a2e:0370:7334";
    echo "filtering the ip (2001:0db8:85a3:0000:0000:8a2e:0370:7334) : ";
    var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));
    print "<br><br>";

    $mac = "2C:54:91:88:C9:E3 ";
    echo "filtering the mac address (2C:54:91:88:C9:E3 or 2c-54-91-88-c9-e3) : ";
    var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
    print "<br>";

    $mac = " 2c-54-91-88-c9-e3";
    echo "filtering the mac address (2C:54:91:88:C9:E3 or 2c-54-91-88-c9-e3) : ";
    var_dump(filter_var($mac, FILTER_VALIDATE_MAC, FILTER_NULL_ON_FAILURE));
    print "<br><br><br>";

    /*
            - Filter Fuctions (part3) : 
            ---------------------------

        - filter_var(Value[Required], Filter[Optional], Options[Optionam])
            Validate filters 

                FILTER_VALIDATE_EMAIL
                    Flag : FILTER_NULL_ON_FAILURE
                FILTER_VALIDATE_INT 
                    Flag : FILTER_NULL_ON_FAILURE
                    Options : min_range
                    Options : max_range 
                    Convert to Int On Success 
                FILTER_VALIDATE_FLOAT 
                    Flag :FILTER_NULL_ON_FAILURE
                    Options : min_range
                    Options : max_range
                    Convert to Float On Success
    */
    $email = "mouhamed@gmail.com";
    echo "Filtering the email(mouhamed@gmail.com) : ";
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));
    print "<br><br>";

    $int = 50;
    echo "Filtering the int (50) : ";
    var_dump(filter_var(
        $int, 
        FILTER_VALIDATE_INT, 
        ["flags"=> FILTER_NULL_ON_FAILURE , "options"=> ["min_range"=> 20, "max_range"=>100]]
    ));
    print "<br><br>";

    $float = 50.55;
    echo "Filtering the float (50.55) : ";
    var_dump(filter_var(
        $float, 
        FILTER_VALIDATE_FLOAT, 
        ["flags"=> FILTER_NULL_ON_FAILURE , "options"=> ["min_range"=> 20, "max_range"=>100]]
    ));
    print "<br><br>";

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
    $email = "mouha@              jsjs      ////////snmail.com";
    echo "Filtering the email : (mouha@              jsjs      sjn////////snsnmail.com) : ";
    var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
    print "<br><br>";

    $int = "(189 + 7817) - 898,nzjzkjjzçàéççééà";
    echo "Filterig the int (189 + 7817) - 898,nzjzkjjzçàéççééà) : ";
    var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
    print "<br><br>";

    $float = "HHHSjh87.677";
    echo "Filtering the float (HHHSjh87.677) : ";
    var_dump(filter_var(
        $float, 
        FILTER_SANITIZE_NUMBER_FLOAT,
        ["flags"=> FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
    ));
    print "<br><br>";

    $url = "https://  ¥¥¥¥89898  elzero.org";
    echo "Filtering the url: (https://  ¥¥¥¥89898  elzero.org) : ";
    var_dump(filter_var($url, FILTER_SANITIZE_URL));
    print "<br><br><br>";

    /*
            - Filter Functions (part5) : 
            ----------------------------

        - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
            INPUT_GET
            INPUT_POST
            INPUT_COOKIE
            INPUT_SERVER
            INPUT_ENV

            FILTER_VALIDATE_INT
            FILTER_SANITIZE_NUMBER_INT
            FILTER_NULL_ON_FAILURE
            - We can use all the flags that we learn in the filter functions (sanitize) with the => filter_input()
    */
    echo filter_input(INPUT_GET, "nums", FILTER_VALIDATE_INT);
    echo filter_input(INPUT_GET, "nums", FILTER_SANITIZE_NUMBER_INT);

    print "<br>";
