<?php

    /*
            - Encapsulation : 
            -----------------

                . Private       -> You cannot change the value of the property direct , You nedd to change it from the method.
                . sha1()        -> Function to encapsulate the sensitive data, to not give anyone the accees to see the data as text
                . password_hash -> more secure than sha1
    */

    class User{
        // properties
        public $name;
        public $age;
        public $height;
        public $email;
        private $pass;
    
        // constants : 
        const MINCHARS = 8;
        const MAXCHARS = 15;
    
        // method to secure the pass:
        public function securePass($pass) {
            // checking the length of the pass : 
            if (strlen($pass) < self::MINCHARS) {
                throw new Exception("Sorry We cannot Change the password, must be greater than 8 chars");
            } elseif (strlen($pass) > self::MAXCHARS) {
                throw new Exception("Sorry, you can't change the password, must be Less than 15 chars");
            } else {
                // encapsulate the pass : 
                $this->pass = password_hash($pass, PASSWORD_DEFAULT);
            }
        }
        public function getInfo($name, $age, $height, $email, $pass) {
            $this->name = $name;
            $this->age = $age;
            $this->height = $height;
            $this->email = $email;
            $this->securePass($pass);
        }
    }
    // object from the class : 
    $achraf = new User();
    try {
        $achraf->getInfo("Achraf", 19, "177cm", "achraf@gmail.com", "achraf78");
        echo "<pre>";
            print var_dump($achraf);
        echo "</pre>";
    } catch (Exception $e) {
        echo $e->getMessage();
    }