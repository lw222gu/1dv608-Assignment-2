<?php

    class LoginController
    {
        private $loginView;
        private $loginModel;

        //public $isLoggedIn = false;

        public function __construct(\model\Login $login, LoginView $v){
            $this->loginView = $v;
            $this->loginModel = $login;
            $this->checkUserInput();//hmm, borde kanske inte kalla på den metoden här..
        }

        public function checkUserInput()
        {
            if ($this->loginView->didUserPressLoginButton() && !$this->loginModel->checkIfLoggedIn()) {
                $username = $this->loginView->userNameInput();
                $password = $this->loginView->passwordInput();

                try{
                    if($this->loginModel->checkUserInput($username, $password)){
                        $this->loginView->setLoginMessage();
                    }
                }

                catch(Exception $e){
                    $this->loginView->getMessage($e);
                }
            }

            if($this->loginView->didUserPressLogoutButton() && $this->loginModel->checkIfLoggedIn()){
                $this->loginView->setLogoutMessage();
                $this->loginModel->Logout();
            }
        }

        // state test
        //if (model) user is logged in
        //only check logout
        //else
        //only check login
    }