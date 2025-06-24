<?php

    // String & Escaping: 
    //--------------------

    /*
    - Heredoc & Nowdoc -
    --------------------
    ! Remember (here & now ) are just random names , you can name it any name you want.

    - the heredoc : we write three less tahn (<<< "here") + we close the line by the (here;) & in the here we have the ide barsing 
        the code 
    - the nowdoc  : we write three less than (<<<'now') + we colse by now; & in the nowdoc we haven't the barsing from the ide and it 
        skip all the code ;     
    
    */

    $name = "Mouhamed"; // this is a variable

    print "hello world , this is the heredoc & nowdoc lesson for today :) ";
    echo '<br>';

    print <<<"here"
    hello world , 
    this is my second line from the heredoc
    'here' we have some symbolls : \\\\\\ '' é"'"'"````
    here;

    echo '<br>';

    print <<<'now'
    hello world , 
    this is my second line from the heredoc
    'here' we have some symbolls : \\\\\\ '' é"'"'"````
    now;

    echo '<br>';

    echo '<ul';
        echo '<li>' . $name .'</li>';
        echo '<li>' . $name .'</li>';
        echo '<li>' . $name .'</li>';
    echo '</ul>';

    echo '<br>';

    echo <<<"Navlinks"
        <ul>
            <li>$name</li>
            <li>$name</li>
            <li>$name</li>
            <li>$name</li>
        </ul>
    Navlinks;

    print "<br>";
    print "<br>";
    print "<br>";


    print <<<"about"
    this is the first line from the about 
    this is the seond line from the abput 
    this is the third line from the about 
    about; 

    
