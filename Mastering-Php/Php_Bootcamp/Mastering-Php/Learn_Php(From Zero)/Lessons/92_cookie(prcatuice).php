<?php

    if (isset($_COOKIE["background-color"])) {
        echo "<style> body{ background-color:" . $_COOKIE["background-color"] . " }</style>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        setcookie("background-color", $_POST["bg-color"]);
        header("location: ". $_SERVER["REQUEST_URI"]);
        exit();
    }

?>

<form action="" method="POST">
    <input type="color" name="bg-color">
    <input type="submit" value="choose color"> 
</form>  