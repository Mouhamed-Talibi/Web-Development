<?php

    /*
        - Session Destroy And Login Simulation : 
        ----------------------------------------
    */

    echo "<h1> Session Destroy And Login Simulation </h1>";
    print "<hr>";
    print "<br>";

    session_start();
    $_SESSION["name"] = "Talibi";

    // session_unset();  // -> it just unset the session
    // session_destroy(); // -> it delete the session 

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if ($_POST['user'] === "Talibi") {
            $_SESSION['username'] = "mouhamed";
            $_SESSION['id'] = 100;
        }
    } 

    echo "<pre>";
        print_r($_SESSION);
    echo "</pre>";

    if (isset($_SESSION['username'])) {
        echo "Welcome " . $_SESSION['username'];
    } else {
?>
<form action="" method="POST">
    <input type="text" name="user">
    <br>
    <input type="submit" value="login">
</form>
<?php
    };
?>
<br>
<a href="logout.php" name="logout">Log out</a>