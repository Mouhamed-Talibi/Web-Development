<?php

    /*
        - Array Functions (part5) : 
        ---------------------------

    - array_merge(Array[Required], Other Array/s[Optional])
        Merge One Or More Arrays
        Later Array Key With The Same Name Override The Value Of The Previous One
        Numeric Key Will Be Renumbered

    - array_replace(Array [Required], Replacement/s[Optional])
        Replaces Elements From Passed Arrays Into The First Array
            Same Key > Value In Second Array Replace Same Key > Value In First Array
            If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand (Array[Required], Num[Optional])
        Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
        Shuffle An Array
    */

    echo "<h1> Array Functions (part5) : </h1> ";
    print "<hr>";
    print "<br>";

    echo "The array Merge Function : " . "<br>";

    // case 1 : The keys are string : 
    $merge_1 = ["One"=> "Canada", "Two"=> "Morocco", "Three"=> "United State"];
    $merge_2 = ["One"=> "America", "Four"=> "Ukraine"];
    echo "<pre>";
    print_r(array_merge($merge_1 , $merge_2));
    echo "</pre>";

    print "<br>";

    // case 2 : The Keys are Numbers : 
    $merge_3 = [1=>"Yassin" , 2=>"Mouhamed", 3=>"Achraf"];
    $merge_4 = [2=>"Bader", 4=>"Abdelaq"];
    echo "The array Merge With Keys As Numbers : " . "<br>";
    echo "<pre>";
    print_r(array_merge($merge_3 , $merge_4)); // auto puting keys by default !     
    echo "</pre>"; 

    print "<br>";
    print "<br>";

    // ---------------------------------------------------------------------------------------

    // case 1 : Array replace with string keys : 
    $main = ["One"=>"Hello", "Two"=>"My", "Three"=>"Name", "Four"=>"Is", "Five"=>"Mouhamed"];
    $replace = ["One"=>"Hey" , "Five"=>"Yassin"];

    echo "The array replace with string keys : " . "<br>";
    echo "---> This is the Array before replacing : ". "<br>";

    echo "<pre>";
    print_r($main);
    echo "</pre>";
    print "<br>";

    echo "--> here is the array after replacing : " . "<br>";
    echo "<pre>";
    print_r(array_replace($main , $replace));
    echo "</pre>";

    print "<br>";
    print "<br>";

    // Case 2 : Array repkace with number keys : 
    $main = [1=>"Hello" , 2=>"Your", 3=>"Brother", 4=>"Is", 5=>"Khalid"];
    $replace = [3=>"Father", 5=>"Mouhmed"];

    echo "The main Array Before replacing : " . "<br>";
    echo "<pre>";
    print_r($main);
    echo "</pre>";
    print "<br>";

    echo "Here is the Array After Replacing : ". "<br>";
    echo "<pre>";
    print_r(array_replace($main , $replace)); // the keys Does Not Change While Replacing Not as the Merge . 
    echo "</pre>";

    print "<br>";
    print "<br>";

    // ------------------------------------------------------------------------------------------------------------

    $rand_char = ["A", "B", "C", "D", "E", "F"];
    $random_key = array_rand($rand_char);
    echo "The Random Index is: " . $random_key . "<br>";
    echo "The Value Of The Random Index is: " . $rand_char[$random_key];

    print "<br>";
    print "<br>";
    print "<br>";


    echo "The Three Random Numbers Are : ";
    echo "<pre>";
    print_r(array_rand($rand_char , 3));
    echo "</pre>";

    print "<br>";
    print "<br>";
    print "<br>";

    $shuff = ["Hello", "My", "Name", "is", "Mouhamed"];
    echo "The Array Ater Shuffling : " . "<br>";
    shuffle($shuff);
    echo "<pre>";
    print_r($shuff);
    echo "</pre>";

    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";
    print "<br>";