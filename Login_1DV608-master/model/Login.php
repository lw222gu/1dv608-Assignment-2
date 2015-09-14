<?php

    namespace model;

    class Login {
        private static $username = "Admin";
        private static $password = "Password";
        public $message = "";
        public $loggedIn = false;

        public function __construct() {

        }

        public function checkUserInput($username, $password){
            if(empty($username)){
                $this->message = "Username is missing";
                return false;
            }

            if(empty($password)){
                $this->message = "Password is missing";
                return false;
            }

            if($username !== self::$username || $password !== self::$password){
                $this->message = "Wrong name or password";
                return false;
            }

            $this->loggedIn = true;
            $this->message = "Welcome";
            return true;
        }

        public function checkIfLoggedIn(){
            return $this->loggedIn;
        }

        public function getMessage(){
            return $this->message;
        }
    }