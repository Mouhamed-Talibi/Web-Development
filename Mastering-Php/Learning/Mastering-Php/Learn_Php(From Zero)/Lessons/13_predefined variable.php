<?php

    //  Predefined Variables : 
    // -----------------------

    // search : Pre-defined variable . 

    echo '<pre>';
        // print_r($_SERVER);
        echo '<hr>';
        print $_SERVER["HTTP_CONNECTION"];
    echo '</pre>';

    print '<br>';
    echo $_POST['username']; 
?>

<form action="" method="post">
    <input type="text" name="username" >
    <input type="submit" value="send">
</form>