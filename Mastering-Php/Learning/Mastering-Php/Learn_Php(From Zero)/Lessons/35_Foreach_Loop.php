<?php

    /*
                Foreach Loop  : 
                ---------------


    */


    echo "<h1> Foreach Loop </h1>";
    print '<hr>';
    print '<br>';

    $students = ["Yassin" , "Eman" , "Oumaima" , "Mouhamed" , "Ahmed" , "achref"];
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    print '<br>';
    print '<br>';

    echo " <b> let's print the students using the foreach </b> :";
    print '<br>';
    print '<br>';

    foreach ($students as $student) { // here we print just the key without value   
        echo "the student name is : $student <br>";
    }

    print '<br>';
    print '<br>';

    $students_with_notes = ["Yassin" => 12 , "Eman" => 14 , "Oumaima" => 17 , "Mouhamed" => 19 , "Ahmed" => 10 , "achref" => 11];
    echo "<pre>";
    print_r($students_with_notes);
    echo "</pre>";

    echo " <b> let's print the students with their notes using the foreach </b> :";
    print '<br>';
    print '<br>';

    foreach ($students_with_notes as $student => $note) { // here we print the key and its value 
        echo "The Students is : <b> $student </b> and its Note is : <b> $note </b> " . "<br>";
    }


