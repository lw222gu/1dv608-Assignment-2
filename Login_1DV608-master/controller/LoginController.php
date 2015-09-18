<?php

    class LoginController
    {
        private $loginView;
        private $loginModel;

        //public $isLoggedIn = false;

        public function __construct(\model\Login $login, LoginView $v){
            $this->loginView = $v;
            $this->loginModel = $login;
            $this->checkUserInput();
        }

        public function checkUserInput()
        {
            if ($this->loginView->didUserPressLoginButton()) {
                $username = $this->loginView->userNameInput();
                $password = $this->loginView->passwordInput();

                try{
                    $this->loginModel->checkUserInput($username, $password);
                }

                catch(Exception $e){
                    $this->loginView->getMessage($e);
                }
            }

        //    if($this->loginView->didUserPressLogoutButton()){
        //        $this->loginModel->loggedIn=false;
        //    }
        }
    }