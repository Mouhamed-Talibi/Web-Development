<?php
    /*
        Remote file injection :
        -----------------------
            * use allowedFields, allowedTypes, allowedSize etc.. 
            * to remove the feature of file inclusion 
                - open xaampp 
                - go to config 
                - right click > php.ini 
                - search for [ allow_url_include=ON ]
                - change ON to OFF
                - restrat the apache server
    */

    if(isset($_GET['page']) && !empty($_GET['page'])) {
        $page = $_GET['page'];
        $allowedPages = array('html-page.html', 'hello.php');
        // check if page allowed :
        if(in_array($page, $allowedPages)) {
            include_once "test/" . $page;
        }
        else{
            echo "Page Not Found !";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Injection</title>
</head>
<body>
    
</body>
</html>