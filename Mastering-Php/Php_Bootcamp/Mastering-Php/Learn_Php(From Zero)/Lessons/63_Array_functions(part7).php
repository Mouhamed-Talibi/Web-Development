<?php

    /*
            - Array Fuctions (part7) : 
            -------------------------

        - array_slice(Array[Required], Start [Required], Length [Optional], Preserve_Keys [Optional])
            Extract A Slice Of The Array
            Start
                0  From Start
                -1 From Last Element 
            Length
                Negative > Stop Slicing Until This Index
                Not Set > All Elements From Start Position
            Preserve Keys
                    False > Default > Reset Keys
                    True > Preserve Keys
                    If Array Have String Keys, It Will Always Preserve The Keys

        - array_splice(Array[Required], Start [Required], Length [Optional], Array[Optional])
            Remove A Portion Of The Array And Replace It With Something Else
            Start
                0  From Start
                -1 From Last Element
            Length
                Negative > Stop Removing Until This Index
                Not set => Remove all elements from Start position 

    */

    echo "<h1> Array functions (part7) : </h1>";
    print '<hr>';
    print '<br>';

    $chars = ["A", "B", "C", "D", "E", "F", "J", "H"];
    $arr_str_keys =  ["A"=>1, "B"=>2, "C"=>3, "D"=>4];
    $arr_int_keys =  [1=>"Mouhamed", 2=>"Yassin", 3=>"Achraf", 4=>"souad"];

    echo "This is the Array Of Chars before slicing : " . "<br>";
    echo "<pre>";
    print_r($chars); // before slicing 
    echo "</pre>";
    print '<br>';

    echo "The Chars that will slice by the function : ";
    echo "<pre>";
    print_r(array_slice($chars , 2)); // slicing from index 2 to the end 
    echo "</pre>";
    print '<br>';

    echo "The array after slicing from index 2 to the end  : ";
    echo "<pre>";
    print_r($chars); // the array stay as it is , no change happened on it after the slicing .  
    echo "</pre>";
    print "<br>";

    echo "The Chars that will slice from index 1 to 4 elements :  " . "<br>";
    echo "<pre>";
    print_r(array_slice($chars, 1 , 4)); // slicing from index 1 to 4 elements  
    echo "</pre>";
    print "<br>";

    echo "The Chars that will slice from the index 3 to the dangerous one of the array : " . "<br>";
    echo "<pre>";
    print_r(array_slice($chars, 1 , -2)); // -2 is the dangerous zone (slicing what is before this zone from the given index to it ) 
    echo "</pre>";
    print "<br>";

    echo "The slicing from array with string keys : " . "<br>";
    echo "<pre>";
    print_r(array_slice($arr_str_keys, 1 , 3)); //  The keys doens't change 
    echo "</pre>";
    print "<br>";

    echo "The slicing from array with integer keys : " . "<br>";
    echo "<pre>";
    print_r(array_slice($arr_int_keys, 1 , 2 , true)); // true to keep the keys like te original in the array  
    echo "</pre>";
    print "<br>";

    print "<br>";
    print "|--------------------------------------------------------------------------------------------------------------|";
    print "<br>";
    print "<br>";

    // -----------------------------------------------------------------------------------------------------------------------


    $data = [1, 2, 3, 4, 5, 6, 7, 8];

    echo "The array before remving any data : " . "<br>";
    echo "<pre>";
    print_r($data); 
    echo "</pre>";
    print "<br>";

    echo "removing The data From the index 5 to the end " . "<br>";
    echo "<pre>";
    print_r(array_splice($data , 5)); // removing the data from index 5 to the end . 
    echo "</pre>";
    print "<br>";

    echo "The array after removing data from index 5 to the end : " . "<br>";
    echo "<pre>";
    print_r($data); // The new array after removing the data from Index 5 to the end  
    echo "</pre>";
    print "<br>";

    echo "Removing The data from index 2 to 3 elements and replace them with new data :" . "<br>";
    echo "<pre>";
    print_r(array_splice($data, 2, 4 , ["Hello", "My", "Name", "Is", "Mouhamed"])); // removing and adding  
    echo "</pre>";
    print "<br>";

    echo "The data after removing the old and adding the new : " . "<br>";
    echo "<pre>";
    print_r($data); // The new array after removing the old data and adding the new   
    echo "</pre>";
    print "<br>";  





