<?php

    session_start();
    echo "Hello " . $_SESSION["name"] . " Your id is : " . $_SESSION["id"] . " And your age is : " . $_SESSION["age"];