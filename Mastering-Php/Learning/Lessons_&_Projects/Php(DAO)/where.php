<?php

    use app\models\Stagaire;
    require "Autoloader.php";

    $stagaire = new Stagaire();
    echo "<pre>";
        print_r(Stagaire::where('nom', "yassin"));
    echo "</pre>";