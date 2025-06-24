<?php

    use app\models\Stagaire;
    require "Autoloader.php";

    $stagaire = new Stagaire();
    print "Tous Les Stagaires :";
    echo "<pre>";
        print_r(Stagaire::all());
    echo "</pre>";

    print "Le Stagaire ayant l'inditifiant 32 : ";
    echo "<pre>";
        print_r(Stagaire::find(32));
    echo "</pre>";