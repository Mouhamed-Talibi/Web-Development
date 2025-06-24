<?php $username="yassin"?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php Page | Home </title>
    </head>
    <body>
        <div>Welcome <?php echo $username ?></div>
        <br>
        <div><?php echo $username?> Your Score is : 1000 points </div>
        <br>
        <div>
            <?php include("Score.php")?>
        </div>
    </body>
</html>