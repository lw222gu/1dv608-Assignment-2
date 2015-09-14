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

            //    if($this->loginModel->checkUserInput($username, $password)) {
                    //Denna måste jag spara undan på nåt vis och använda...
            //        $this->isLoggedIn = true;
            //    }
            //    else {
                $this->loginModel->checkUserInput($username, $password);
                $this->loginView->response();
            //    }

            }
        }
    }