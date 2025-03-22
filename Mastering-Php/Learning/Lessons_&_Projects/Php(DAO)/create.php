<?php

    use app\models\Stagaire;
    require "Autoloader.php";

    // instance from Stagire class : 
    $stagaire = new Stagaire();
    $stagaire->set_nom("yassin");
    $stagaire->set_prenom("bhja");
    $stagaire->set_age(10);
    $stagaire->set_login("yassin");
    $stagaire->set_password("yss789");

    $stagaire->create();