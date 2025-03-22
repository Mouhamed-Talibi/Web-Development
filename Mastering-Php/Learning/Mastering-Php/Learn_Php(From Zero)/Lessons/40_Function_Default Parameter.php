<?php 

    /*
                - Function Default Parameter :
                ______________________________
    */

    echo "<h1>  Function Deafult Parameter </h1>";
    print '<hr>';
    print '<br>';

    // exemlple without default parameter : 
    function introduce($name , $family_name , $country , $age , $address , $level_study) {
        $line_1 = "hello , My Full Name is : $name  $family_name . I live in $country " . "<br>";
        $line_2 = "My Age is  : $age and my adress is : $address .  Now I study in $level_study";
        return $line_1 . $line_2 ;
    }
    $name = "Mouhamed";
    $family_name = "Talibi";
    $country = "Morocco";
    $age = 19;
    $address = "Ouled Teima";
    $level_study = "University";
    echo introduce($name , $family_name , $country , $age , $address , $level_study);

    print '<br>';
    print '<br>';

    // exemple with defualt parameter : 
    function get_data($name = "Private" , $age = "Private" , $country = "Private Country" , $departement = "Private Departement") {
    $info_1 = "hello , My name is : $name , I'm $age Years Old . <br>";
    $info_2 = "My country is : $country  and My Departement is : $departement. <br>";
    return $info_1 . $info_2; 
    }
    echo get_data("Yassin" , 18 , "ALgeria" ,"Backen devloper"); // exemple with arguments 
    print '<br>';
    print '<br>';


    echo get_data("Yassin" , 18 , "ALgeria"); // exemple with one missing arguement has the default value 
    print '<br>';
    print '<br>';

    echo get_data(departement:"Front End Devloper"); // exemple with one argument and the others with the default value 