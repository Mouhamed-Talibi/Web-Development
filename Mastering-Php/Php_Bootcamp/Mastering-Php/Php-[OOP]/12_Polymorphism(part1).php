<?php

    /*
            - Polymorphism (part1) : 
            ------------------------

                [ Polymorphism ] : ↡
                    * Describes a pattern in oop wich classes have different functionality while sharing a common interface 
                    * Have Methods Without code (body)
                [ insterface ]   : This Keyword used to create an interface class
                [ Implements ]   : This keyword used to use the interface class
                !                : You Have to use the methods of the interface class
    */

    interface DBconnection{
        public function getUsers();
        public function getArticles();
        public function showStats();
    }

    // first polymorphism class : 
    class Mysql implements DBconnection{
        public function getUsers() {
            echo "Getting Users From Mysql Class." . "<br>";
        }
        public function getArticles() {
            echo "Getting Articles From Mysql Class." . "<br>";
        }
        public function showStats() {
            echo "Showing Stats From Mysql Class." . "<br>";
        }
    }
    // Second polymorphism class : 
    class Oracle implements DBconnection{
        public function getUsers() {
            echo "Getting Users From Oracle Class." . "<br>";
        }
        public function getArticles() {
            echo "Getting Articles From Oracle Class." . "<br>";
        }
        public function showStats() {
            echo "Showing Stats From Oracle Class." . "<br>";
        }
    }
    // first polymorphism class : 
    class Postger implements DBconnection{
        public function getUsers() {
            echo "Getting Users From Postger Class." . "<br>";
        }
        public function getArticles() {
            echo "Getting Articles From Postger Class." . "<br>";
        }
        public function showStats() {
            echo "Showing Stats From Postger Class." . "<br>";
        }
    }
    $sql = new Mysql(); // Here you can just write the name of the class and everything will work good
    $sql->getUsers();
    $sql->getArticles();
    $sql->showStats();
    echo "<pre>";
        print_r($sql);
    echo "</pre>";

