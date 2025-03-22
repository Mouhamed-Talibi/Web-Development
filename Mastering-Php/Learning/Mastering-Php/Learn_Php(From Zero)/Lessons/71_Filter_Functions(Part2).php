<?php

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

    echo "<h1> Filter Functions (part2) : </h1>";
    print "<hr>";
    print "<br>";

    $data = true; // True | "on" | "yes" | "1" | 1 
    echo "Filtering The Data (true) : ";
    var_dump(filter_var($data, FILTER_VALIDATE_BOOL)); // True
    print "<br>";

    $data = "0";
    echo "Filtering the data (0) : ";
    var_dump(filter_var($data, FILTER_VALIDATE_BOOL)); // False 
    print "<br>";

    $data = "Mouhamed";
    echo "Filtering the data (mouhamed) : ";
    var_dump(filter_var($data, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)); // Null 

    print "<br>";
    print "<br>";
    print "<br>";

    $url = "https://elzero.org";
    echo "Filtering the url (https://elzero.org) : ";
    var_dump(filter_var($url, FILTER_VALIDATE_URL)); // Validate 
    print "<br>";

    $url = "http/mouhamedtaibi";
    echo "Filtering the url (http/mouhamedtaibi) : ";
    var_dump(filter_var($url, FILTER_VALIDATE_URL)); // No Validate : false 
    print "<br>";

    $url = "https://elzero.org/users";
    echo "Filtering the url (https://elzero.org/users) : ";
    var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
    print "<br>";

    $url = "https://elzero.org/users?id=1";
    echo "Filtering the url (https://elzero.org/users?id=1) : ";
    var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED));
    print "<br>";

    print "<br>";

    $flags = ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED];
    $url = "https://elzero.org/users?id=1";
    echo "<b>". "Filtering the full url (https://elzero.org/users?id=1) : " . "</b>";
    var_dump(filter_var($url, FILTER_VALIDATE_URL, $flags));
    print "<br>";

    print "<br>";
    print "<br>";
    print "<br>";

    $ip = "hsg:hshs:hshs:10";
    echo "filtering the ip (hsg:hshs:hshs:10) : ";
    var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_NULL_ON_FAILURE)); // Null
    print "<br>";

    $ip = "192.168.0.189";
    echo "filtering the ip (192.168.0.189) : ";
    var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)); // validate
    print "<br>";

    $ip = "2001:0db8:85a3:0000:0000:8a2e:0370:7334";
    echo "filtering the ip (2001:0db8:85a3:0000:0000:8a2e:0370:7334) : ";
    var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)); // validate
    print "<br>"; 

    print "<br>";
    print "<br>";

    $mac = "2C:54:91:88:C9:E3 ";
    echo "filtering the mac address (2C:54:91:88:C9:E3 or 2c-54-91-88-c9-e3) : ";
    var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
    print "<br>";

    $mac = " 2c-54-91-88-c9-e3";
    echo "filtering the mac address (2C:54:91:88:C9:E3 or 2c-54-91-88-c9-e3) : ";
    var_dump(filter_var($mac, FILTER_VALIDATE_MAC, FILTER_NULL_ON_FAILURE));
    print "<br>"; 