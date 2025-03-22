<?php

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


    echo "<h1> Filter Functions (part5) : </h1>";
    print "<hr>";
    print "<br>";

    // here without the filter input function will show us a warning the first time 
    echo "<b>" . "The Input Nums Are : " . "</b>". $_GET["nums"]. "<br>";
    print "<br>";

    echo "<b>" . "The Nums From the User are : " . "</b>";
    echo filter_input(INPUT_GET, "nums", FILTER_VALIDATE_INT);
    print "<br>";
    print "<br>";

    echo "<b>" . "The Nums After sanitizing are : " . "</b>";
    echo filter_input(INPUT_GET, "nums", FILTER_SANITIZE_NUMBER_INT);

?> 
<form action="" method="GET">
    <br>
    <label for="">Numbers</label>
    <input type="text" name="nums" placeholder="Only Nums Here">

    <input type="submit" value="Save & send">
</form>