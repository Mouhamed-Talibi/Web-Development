<?php
    /*
        Good Password Hashig :
        ----------------------
            - use password_hash() function 
            - use password_verify() function to check the password in the db is the same that the user enter
            ! always check new security features 
    */

    $password = "mouhamed@1234";
    $password2 = "hellp";
    $hashedpass = password_hash($password, PASSWORD_DEFAULT);
    echo "Hashed Pass : " . "<br>" . $hashedpass;

    // verify password :
    if(password_verify($password, $hashedpass)){
        print "<br>";
        echo "The password is correct";
    }
    else{
        echo "Password incorrect!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Password Hashing</title>
</head>
<body>
    
</body>
</html>