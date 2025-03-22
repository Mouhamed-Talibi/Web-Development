<?php

    /*
            - Array functions (Pat1) :
            -------------------------

            - array_chunk (Array[Required], Length [Required], Preserve_Key [Optional])
                Split An Array Into Chunks [Return A Multidimensional Indexed Array]
                    Preserve Key
                    [False > Default] Reindex The Keys
                    [True] Preserve The Keys
            - array_change_key_case(Array[Required], Case [Optional])
                Changes The Case of All Keys In An Array
                Case
                    [CASE_LOWER => Default] Changes The Keys To Lowercase
                    [CASE_UPPER] Changes The Keys To Uppercase
            - array_combine(Array_Of_Keys [Required], Array_of_Values[Required])
            - array_count_values (Array[Required])
                Counts All The Values Of An Array
    */
    $array = [1=>"mouhamed", 2=>"yassin", 3=>"bader", 4=>"ahmed", 5=>"karim"];
    echo "<pre>";  
        print_r(array_chunk($array, 2, True));
    echo "</pre>";

    $array = ['one'=>"this",'two'=>"is",'three'=>"my",'four'=>"name"];
    echo "<pre>";
        print_r(array_change_key_case($array, CASE_UPPER));
    echo "</pre>";

    $keys = [1, 2, 3, 4];
    $values = ["this", "is", "his", "book"];
    echo "<pre>";
        print_r(array_combine($keys, $values));
    echo "</pre>";

    echo "<pre>";
    print_r(array_count_values($values));
    echo "</pre>";

    print "<br>";

    /*
            - Array functions (part2) : 
            ---------------------------

        - array_reverse(Array [Required], Preserve [Optional])
            Reverse Array Elements
        - array flip(Array[Required])
            Exchange Keys With Its Values

        - count (Array[Required], Mode [Optional])
            Count Array Elements
            Mode : 
                0 > Default => Does Not Count Elements Of Multidimensional Arrays
                1 > Count Elements of Multidimensional Arrays

        - in_array(Search[Required], Array[Required], Type [Optional])
            Checks If A Value Exists In An Array
        - array_key_exists(Key [Required], Array[Required])
            Check If Key Is Exists
    */
    $array = ["one"=>"That", "two"=>"Is", "three"=>"Very", "four"=>"Good"];
    echo "<pre>";
        print_r(array_reverse($array, True));
    echo "</pre>";

    echo "<pre>";
        print_r(array_flip($array));
    echo "</pre>";

    $counting = ["friends" , "users" , "database", "array" , "functions" , "help" , [1 , 2 , 3]];
    echo "the number of elements in the array with the 0 mode is : " . count($counting) . "<br>"; 
    echo "the number if the elements in the array with the 1 mode is : " . count($counting , 1) . "<br>"; 

    if(in_array("That", $array)){
        echo "[ That ] is in array <br>";
    }else{
        echo "[ That ] isn't in array <br>";
    }

    $prises = [
        "Glasses" => 150 ,
        "Laptop" => 2150 , 
        "Pencil" => 20 , 
        "Shirt" => 150 , 
        "Phone" => 1500
    ];
    if (array_key_exists("Laptop" , $prises)) {
        echo "the Laptop is Found , And its price is : " . $prises["Laptop"] . "Dh";
    }

    print "<br>";
    print "<br>";

    /*
            - Array Functions (part3) : 
            --------------------------

            - array_keys(Array[Required], Value[Optional], Type [Optional])
                Return The Array Keys
                Туре
                    False > Default => No Checking For Type
                    True > Check For Type

            - array_values (Array[Required])
                Return All The Values Of An Array
            - array_pad(Array[Required], Size [Required], Value[Required])
                Pad Array To The Specified Length With A Value
                Negative Value Add Elements Before Original Items
                If Size < Array Length Nothing Will Be Deleted 

            - array product (Array [Required])
                Calculate The Product of values In An Array => Return Int || Float
                In Mathematics, A Product Is The Result Of Multiplication
            - array_sum(Array[Required])
                Calculate The Sum Of Values In An Array
    */
    $students = [1=>"achraf", 2=>"Ahmed", 3=>"karim", 4=>"mouhamed", 5=>"hamza"];
    echo "<pre>";
        print_r(array_keys($students, true));
    echo "</pre>";

    echo "<pre>";
        print_r(array_values($students));
    echo "</pre>";

    echo "<pre>";
    print_r(array_pad($students, 7, ["hello", "world"]));
    echo "</pre>";

    $product = [7, 8, 9, 6, 4];
    echo "The Product of the numbers is : " . array_product($product) ;
    print "<br>";

    $sum = [7, 8, 9, 6, 4];
    echo "The sum of the numbers is : " . array_sum($sum);

    print "<br>";
    print "<br>";

    /*
            - Array Functions (Part4) : 
            --------------------------

        Every Array Has An Internal Pointer To Its "Current" Element
        Which Is Initialized To The First Element.
        Functions Returns Value of Array Elegent That's Currently Pointed By The Internal Pointer

        - current (Array[Required]) => Return The Current Element In An Array
        - next(Array[Required]) => Advance The Internal Pointer
        - prev(Array[Required]) => Rewind The Internal Pointer
        - reset (Array[Required]) => Put The Internal Pointer On First Element
        - end (Array[Required]) => Put The Internal Pointer On Last Element
    */
    $users = ["achraf", "ahmed", "mouhamed", "hind", "sarab"];
    echo "The current user is : " . current($users) . "<br>";
    echo "The next user is : " . next($users) . "<br>";
    echo "The previous user is : " . prev($users) . "<br>";
    echo "The reset user is : " . reset($users) . "<br>";
    echo "The end user is : " . end($users) . "<br>";

    print "<br>";

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
    $merge_1 = ["One"=> "Canada", "Two"=> "Morocco", "Three"=> "United State"];
    $merge_2 = ["One"=> "America", "Four"=> "Ukraine"];
    echo "<pre>";
    print_r(array_merge($merge_1 , $merge_2));
    echo "</pre>"; 

    $main = ["one"=>"this", "two"=>"is", "three"=>"me"];
    $replacement = ["one"=>"That", "three"=>"a book"];
    echo "<pre>";
        print_r(array_replace($main, $replacement));
    echo "</pre>";

    $rand_char = ["A", "B", "C", "D", "E", "F"];
    $random_key = array_rand($rand_char);
    echo "The Random Index is: " . $random_key . "<br>";
    echo "The Value Of The Random Index is: " . $rand_char[$random_key] . "<br>";

    $shuff = ["Hello", "My", "Name", "is", "Mouhamed"];
    echo "The Array Ater Shuffling : " . "<br>";
    shuffle($shuff);
    echo "<pre>";
    print_r($shuff);
    echo "</pre>";

    print "<br>";

    /*
            - Array Fuctions (part6) :
            -------------------------

        - array_shift(Array[Required])
            Shift An Element Off The Beginning of Array
            This Function Will Reset => "reset()" The Input Array Pointer

        - array_pop(Array[Required])
            Pop The Element Off Ehe End Of Array
            This Function Will Reset => "reset()" The Input Array Pointer

        - array_push(Array[Required], Values[Optional])
            Push One Or More Elements Onto The End Of Array
            You Can Use $arr[]

        - array_unshift(Array [Required], Values [Optional])
            Add One Element In The Beginning Of An Array
            This Function Will Reset => "reset()" The Input Array Pointer
    */
    $arr = ["hello", "world"];
    array_shift($arr);
    echo "<pre>";
        print_r($arr);
    echo "</pre>";

    array_pop($arr);
    echo "<pre>";
        print_r($arr);
    echo "</pre>";

    array_push($arr, ["hello", "how", "are", "you"]);
    echo "<pre>";
        print_r($arr);
    echo "</pre>";

    array_unshift($arr, "English", "Hindi");
    echo "<pre>";
        print_r($arr);
    echo "</pre>";

    print "<br>";

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
    $chars = ["A", "B", "C", "D", "E", "F", "J", "H"];
    $arr_str_keys =  ["A"=>1, "B"=>2, "C"=>3, "D"=>4];
    $arr_int_keys =  [1=>"Mouhamed", 2=>"Yassin", 3=>"Achraf", 4=>"souad"];
    echo "<pre>";
    print_r(array_slice($chars , 3)); 
    echo "</pre>";

    echo "<pre>";
    echo "The Array AFter Slicing  : ";
    print_r($chars); 
    echo "</pre>";

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

    $data = [1, 2, 3, 4, 5, 6, 7, 8];
    echo "removing The data From the index 5 to the end " . "<br>";
    echo "<pre>";
    print_r(array_splice($data , 5)); // removing the data from index 5 to the end . 
    echo "</pre>";
    print "<br>";

    echo "Removing The data from index 2 to 3 elements and replace them with new data :" . "<br>";
    echo "<pre>";
    print_r(array_splice($data, 2, 4 , ["Hello", "My", "Name", "Is", "Mouhamed"])); // removing and adding  
    echo "</pre>";
    print "<br>";

    echo "<pre>";
    print_r($data); // After removing and adding  
    echo "</pre>";

    print "<br>";

    /*
            - Array Functions (part8) :
            ---------------------------

        - sort (Array[Required], Flag [Optional])
            Sort An Indexed Array In Ascending Order
        - rsort(Array[Required], Flag [Optional])
            Sort An Indexing Array In Descending Order

        - asort (Array[Required], Flag[Optional])
            Sort An Associative Array In Ascending Order According To The Value
        - arsort (Array[Required], Flag [Optional])
            Sort An Associative Array In Descending Order According To The Value

        - ksort (Array[Required], Flag[Optional])
            Sort An Associative Array In Ascending Order According To The Key
        - krsort (Array[Required], Flag[Optional])
            Sort An Associative Array In Descending Order According To The Key

        - natsort(Array[Required], Flag[Optional])
            Sorts An Array By Using A "Natural Order" Algorithm

        Practice : 
            - Flags 
            - Our own sorting function
    */
    $nums = [18, 25, 26, 51, 14, 10, 9, 1];

    echo "Sorting the data in Ascending order : " . "<br>";
    sort($nums);
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    print "<br>";

    echo "Sorting the nums in Descending order : " . "<br>";
    rsort($nums);
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    print "<br>";

    print "<br>";

    // ------------------------------------------------------------------------------

    $data = ["m"=>"Mouhamed", "y"=>"Yassin", "a"=>"Ahmed", "b"=>"Bader", "s"=>"Sarab"];

    echo "Sorting the assossiative array in Ascending ordetr : " . "<br>";
    asort($data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    print "<br>";

    echo "Sorting the assossiative array in Descending Order : " . "<br>";
    arsort($data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    print "<br>";

    print "<br>";

    // --------------------------------------------------------------------------------

    $sorting_k = [1=>"Users", 4=>"students", 2=>"website", 3=>"friends"];

    echo "Sorting the array according to the keys in Ascending order :" . "<br>";
    ksort($sorting_k);
    echo "<pre>";
    print_r($sorting_k);
    echo "</pre>";
    print "<br>";

    echo "Sorting the array according to the keys in Descending order :" . "<br>";
    krsort($sorting_k);
    echo "<pre>";
    print_r($sorting_k);
    echo "</pre>";
    print "<br>";

    print "<br>";

    // ------------------------------------------------------------------------------------

    $array = ["Friend1" , "Friend20", "Friend3"];
    echo "sorting the array by the sort function : " . "<br>";
    sort($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    print "<br>";

    echo "Soring the array to the natural sort : " . "<br>";
    natsort($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    print "<br>"; 

    /*
            - Array Functions (part9) : 
            ---------------------------

        - array_map(Callback Function [Required], Array[Required], Other Arrays [Optional])
            Applies The Callback To The Elements Of The Given Arrays

        - array_filter(Array[Required], Callback Function[Required], Flag [Optional])
            Filter Values Of An Array Using A Callback Function
            Flag
                ARRAY_FILTER_USE_KEY
                ARRAY_FILTER_USE_BOTH
                0 Default > Send Value As Arguments

        - array_reduce(Array[Required], Callback Function [Required], Initial Value[Optional])
            Reduce The Array To A Single Value
            Carry > The Value Of The Previous Iteration || Initial Value
            Item > The Value Of The Current Iteration
    */
    function helloUser($f_name, $l_name){
        return "Hello $f_name $l_name" . "<br>";
    }
    $f_names = ["mouhamed", "achraf", "bader"];
    $l_names = ["talibi", "fahim", "jihad"];
    echo "<pre>";
        print_r(array_map("helloUser", $f_names, $l_names));
    echo "</pre>";

    $nums = [
        1 => 5, 
        4 => 20, 
        6 => 30, 
        2 => 25,  
        3 => 15,
        5 => 10,
    ];
    function check_num($number) {
        if ($number >= 15) {
            return $number;
        }
    };

    echo "<b>". "The Values That are Greater than or Equal 15 : " ."</b>". "<br>";
    echo "<pre>";
        print_r(array_filter($nums , "check_num"));
    echo "</pre>";
    print "<br>";

    echo "<b>" . "The Arryay filter ysing the filte by key and value :" . "</b>" . "<br>";
    echo "<pre>";
    print_r(array_filter($nums, "check_num", ARRAY_FILTER_USE_BOTH));
    echo "</pre>";

    function sum($carry, $item) {
        echo "The Initial Value is : " . $carry . "<br>";
        echo "The Item That Will Add To The Initial Value is : " . $item . "<br>";
        echo "The Result Of the Sum Is : " . $carry + $item . "<br>";
        echo "-------------------------------------------------------------------------------------------------- <br>";
        return $carry + $item ; 
    };
    $nums = [10, 56, 24, 78, 15, 25];
    echo "The Result Of The Sum is : " . array_reduce($nums, "sum");
    print "<br>";
    print "<br>";
    print "<br>";

    // give the array reduce an initial value : 
    echo "The Result is : " . array_reduce($nums, "sum", 567);

    print "<br>";
    print "<br>";