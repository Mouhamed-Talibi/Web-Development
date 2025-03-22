<?php 

    /*
            - If , Elseif , Else ( Advanced ):
            ----------------------------------
    */

    echo "<h1> If , Elseif , Else ( Advanced ) </h1>";
    print '<br>';
    // the first exemple  : 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "Your Username is : ";
        echo $_POST["username"];
        print '<br>';
        echo "The Selected language is : ";
        echo $_POST["lang"];
        print '<br>';
        print '<br>';
    } 
    else {
        echo "see you later ";
    };

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST["lang"] == "ar") {
            header("Location : ar.php"); // here to move the user to the Arabic page 
            exit();
        } 
        elseif ($_POST["lang"] == "en") {
            header("Location : en.php"); // here to move the use to the english page 
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HomePage</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Write your Username">
            <select name="lang" id="">
                <option value="ar">Arabic</option>
                <option value="fr">French</option>
                <option value="en">English</option>
            </select>
            <br><br>
            <input type="submit" value="Send">
        </form>
    </body>
</html>