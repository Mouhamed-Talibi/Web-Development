<?php

    // create function with an exception : 
    function checkNumber($number){
        if($number > 10){
            throw new Exception("Number Must Be Less Than Or Equal 10");
        }else{
            return "This Is A Valid Number";
        }
    }
    echo checkNumber(10);



    print "<br>";
    print "<br>";



    /* 
        try, throw and catch : 
        -----------------------
            [ Try ]   => A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
            [ Throx]  => This is how you trigger an exception. Each "throw" must have at least one "catch"
            [ Catch ] =>  A "catch" block retrieves an exception and creates an object containing the exception information
    */
    function checkNum($num) {
        if($num > 10) {
            throw new Exception("The Number Must be Under 10"); // Fixed typo in "Numbe" to "Number"
        } else {
            return "This number is valid";
        }
    }
    
    // Try and Catch:
    try {
        echo checkNum(19);  // This will throw an exception since 19 > 10
        echo "This message you see is because the number is valid";  // This won't be reached if an exception is thrown
    } catch(Exception $e) {
        echo "Message: " . $e->getMessage();  // This will display the exception message
    }




    print "<br>";
    print "<br>";




    // Creating a custom Exception class : 
    class customException extends Exception{
        public function messageError(){
            $error = 'Error on line : ' . $this->getLine() . " In " . $this->getFile() . "<b> " . $this->getMessage() . "</b> " . " Is Not A valid Email";
            return $error;
        }
    }
    $email = "mouhamedgmail.com";

    // try and catch : 
    try{
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
            throw new customException($email);
        }
        else{
            echo "This email: $email is Valid";
        }
    }
    catch(customException $e){
        echo "Message : " . $e->messageError();
    }


    print "<br>";
    print "<br>";


    // multiple exceptions : 
    $email = "email@example.com";
    try{
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            throw new customException("Email Not Valid! Must be ike this : email@example.com");
        }
        else{
            echo "This $email is valid email" . "<br>";
        }
        if(strpos($email, "example") !== false){
            throw new Exception("$email is an example email" . "<br>") ;
        }
        else{
            echo "This is a valid email : $email" . "<br>";
        }
    }
    catch(customException $e){
        echo "Message : " . $e->messageError();
    }
    catch(Exception $e){
        echo "Message : " . $e->getMessage();
    }


    print "<br>";
    print "<br>";


    // set_exception_handler : 
    function myExceptionHandler($exception){
        echo "<b>" . "Exception : " . "</b>" . $exception->getMessage();
    }
    set_exception_handler("myExceptionHandler");
    throw new Exception("Unexpected Error Ocuur");
