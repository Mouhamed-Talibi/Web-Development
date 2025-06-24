<?php

    use PHPAuth\Auth;

    // Create an instance of the Auth class
    $auth = new Auth();
    
    // Set the authentication credentials
    $auth->setCredentials('username', 'password');
    
    // Check if the user is authenticated
    if ($auth->check()) {
        // User is authenticated, grant access to resources
    } else {
        // User is not authenticated, deny access to resources
    }