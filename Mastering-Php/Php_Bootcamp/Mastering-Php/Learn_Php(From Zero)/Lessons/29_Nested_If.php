<?php

    /*
                - Nested If And Advanced Practice : 
                ----------------------------------
    */

    echo "<h1> Nested If And Advanced Practice : </h1>";
    print '<hr>';
    print "<br>";

    // the exemple of the discount of a course : 
    $name = "Mouhamed";
    $country = "Morocco";
    $is_student = true ; 
    $is_orphan = true;
    $con_discount = 20 ; 
    $st_discount = 30 ; 
    $orphan_discount = 75 ; 
    $price = 180 ; 

    if ($country == "Morocco") {
        if ($is_student == True ) {
            if ($is_orphan)  {
                echo "hello  $name ";
                print '<br>';
                echo "the Price without Discount is : $price";
                print '<br>';
                echo "you have the country discount : $con_discount";
                print '<br>';
                echo "and you have the student discount : $st_discount";
                print '<br>';
                echo "and you have the orphan discount : $orphan_discount ";
                print '<br>';
                echo "so the last price of the courrce for you is : ".$price - ($con_discount + $st_discount + $orphan_discount) ;
            }
            else{
                echo "hello  $name ";
                print '<br>';
                echo "the Price without Discount is : $price";
                print '<br>';
                echo "you have the country discount : $con_discount";
                print '<br>';
                echo "and you have the student discount : $st_discount";
                print '<br>';
                echo "so the last price of the courrce for you is : ".$price - ($con_discount + $st_discount); 
            }
        }
        else{
            echo "hello  $name ";
            print '<br>';
            echo "the Price without Discount is : $price";
            print '<br>';
            echo "you have the country discount : $con_discount";
            print '<br>';
            echo "so the last price of the courrce for you is : ".$price - ($con_discount); 
        }
    }
    else {
        echo "hello $name " ; 
        print '<br>';
        echo "No discount For Your country ): ";
        print "<br>";
        echo "the last frice for the course is : $price ";
    }