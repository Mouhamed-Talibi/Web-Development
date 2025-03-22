<?php

    /*
            - Switch : 
            ---------

                synthax : 
                _________

                switch (expression ) {
                    Case 1 : 
                        // Code Block 1 
                        break;

                    Case 2 : 
                        // Code Block 2 
                        break;

                    Case 3 : 
                        // Code Block 3 
                        break;

                    Default : 
                        Default Code Block ;
                }
    */  

    echo "<h1> Switch </h1>";
    print '<hr>';
    print '<br>';

    // the exemple of the dates of opening the store : 
    $day = "Friday";
    switch ( $day ) {
        case 'Monday':
            echo "hello , This is the $day We're Open from 9 to 14 Pm";
            break;

        case 'Thursday':
            echo "hello this is the $day . we're Open from 10 to 15 Pm";
            break;

        case 'Wednesday':
            echo "hello this is the $day . we're Open from 8 to 13 Pm";
            break;

        case 'Friday':
        case 'Saturday':
            echo "Hello this is the $day . We are Open From 10 to 17 Pm"; // We do this because we are open in Friday and Saturday at The Same Time
            break;

        default:
            echo "Unkown day";
    }