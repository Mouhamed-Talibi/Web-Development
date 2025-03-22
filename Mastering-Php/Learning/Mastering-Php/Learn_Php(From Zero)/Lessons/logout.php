<?php

    session_start();
    session_unset();
    session_destroy();
    echo "You leged out of the page";