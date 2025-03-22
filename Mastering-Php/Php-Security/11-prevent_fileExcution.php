<?php
    /*
        - Prevent Excute Specific Files :
        ---------------------------------
            * search for files match in apache in google 
            * create a .htaccess file in your folder 
            * write in it : 
                [ 
                    <FilesMatch "\.(list of not allowed files extension)$"> 
                        Order allow,deny
                        Deny from all
                    </FilesMatch>
                ]
            * we separate between the files extensions by  [ | ]
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevent File Excution</title>
</head>
<body>
    
</body>
</html>