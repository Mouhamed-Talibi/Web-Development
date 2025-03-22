<?php
    /*
        - Prevent Session Fixation :
        ----------------------------
            * use session_regenerate_id()
            * search for session fixation in google
    */

    session_start();
    session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Fixation</title>
</head>
<body>
    <!-- get session infos -->
    <?php
        echo "<pre>";
            print session_id();
        echo "</pre>";
    ?>
</body>
</html>