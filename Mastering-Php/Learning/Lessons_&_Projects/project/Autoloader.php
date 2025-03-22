<?php

class Autoloader {
    public static function autoload() {
        spl_autoload_register(function ($class) {
            // Convert the namespace to a file path
            $filename = str_replace("\\", "/", $class) . ".php";
            // Include the file if it exists
            if (file_exists($filename)) {
                require $filename;
            }
        });
    }
}

// Register the autoloader
Autoloader::autoload();
