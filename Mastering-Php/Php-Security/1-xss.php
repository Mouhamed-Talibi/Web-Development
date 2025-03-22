<?php
    /*
        Cross site scripting :
        ----------------------
            - make sure $_GET and $_POST parameters are the type you expect before you send them to the database. PHP has the filter_var() 
                function to assist with this.
            - use filtervar() with sanitize flags for each data type (integer, float, string, boolean etc...)
    */

    if(isset($_GET['search']) || isset($_GET['name']) || isset($_GET['age'])){
        $filtered_search = filter_var($_GET['search'], FILTER_SANITIZE_STRING);
        $filterred_name  = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
        $filtered_age    = filter_var($_GET['age'], FILTER_SANITIZE_NUMBER_INT);

        $verifiedData = [$filtered_search, $filterred_name, $filtered_age];
        echo "<pre>";
            print_r($verifiedData);
        echo "</pre>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cross Site Scripting</title>
</head>
<body>
    
</body>
</html>