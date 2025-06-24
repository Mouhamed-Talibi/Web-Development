<?php

    use app\models\Stagaire;
    require "Autoloader.php";

    $stagaire = new Stagaire();
    $stagaire->delete(8);
