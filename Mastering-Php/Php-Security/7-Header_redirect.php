<?php
    /*
        Header Redirect The Right Way :
        -------------------------------
            - After the header location you have to exit from the script 
                because the hacker can access what's below the header if you didn't exit 
            - 
                header('Location: filePath');
                exit(); || die();
    */

    $adminId = 1;
    if($adminId !== 1) {
        header("Location: error.php?error=Access-Error!");
        exit();
    }
    else{
        echo "Hello Admin";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Redirect</title>
</head>
<body>
    
</body>
</html>