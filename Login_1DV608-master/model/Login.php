<?php

    namespace model;

    session_start();

    class Login {
        private static $username = "Admin";
        private static $password = "Password";
        public $savedUserName = "";
        public $isLoggedInSession = "isLoggedIn";



        public function __construct() {
            if(!isset($_SESSION[$this->isLoggedInSession])){
                $_SESSION[$this->isLoggedInSession] = false;
            }
        }

        public function checkUserInput($username, $password){
            if(empty($username)){
                throw new \Exception("Username is missing");
            }

            if(empty($password)){
                $this->savedUserName = $username;
                throw new \Exception("Password is missing");
            }

            if($username !== self::$username || $password !== self::$password){
                $this->savedUserName = $username;
                throw new \Exception("Wrong name or password");
            }

            $_SESSION[$this->isLoggedInSession] = true;
            return true;
        }

        public function checkIfLoggedIn(){
            if($_SESSION[$this->isLoggedInSession]){
                return true;
            }
            return false;
        }

        public function Logout(){
            $_SESSION[$this->isLoggedInSession] = false;
            session_destroy();
        }

    }