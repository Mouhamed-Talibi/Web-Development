<?php 
    /* 
        php is a server side scripting language , and when we want to write php code , we should open the php tag
        " < ? php  " -> is the open tag for php code
        " ? > "      -> is the close tag for php code 
            remeber is you write only php code in your file , the best practice is to not write the close tag but when we have the merge code 
            between php and html , writing the close tag is important. 

        echo  -> we use this function to print the data in the screen . 
        print -> we use this function to print the data in the screen . 
    */  

    echo 'hello world';
    print '<br>';
    echo 'This Is The Echo Function'
?>

<?php

    // those are the single line comments in php 

    /*
        - those are the multines line comments in php 
        - we can use them between or inside the line code to explain something or to disable some code. 
    */

    print '<br>';
    echo 'hello My Friend , How are You ' /* Like This exemple We use the multi line function inside the line code  */ ;
    print '<hr>';
    // we can also print the html code like the line code (print '<br>';)

    /*
        the short line code to print the data is like this "<?= ?>"
    */
?>
<?='This Is The short Way To Print the data in the screen :) ';?>
<?="<hr>"?>


<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php echo "Hello World from Inside Html Code" ?>
        </body>
</html>