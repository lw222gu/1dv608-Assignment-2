<?php

    namespace model;

    class Login {
        private static $username = "Admin";
        private static $password = "Password";
        public $loggedIn = false;

        public function __construct() {

        }

        public function checkUserInput($username, $password){
            if(empty($username)){
                throw new \Exception("Username is missing");
            }

            if(empty($password)){
                throw new \Exception("Password is missing");
            }

            if($username !== self::$username || $password !== self::$password){
                throw new \Exception("Wrong name or password");
            }

            $this->loggedIn = true;
            return true;
        }

        public function checkIfLoggedIn(){
            return $this->loggedIn;
        }
    }