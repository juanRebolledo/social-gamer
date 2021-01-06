<?php
    namespace Controllers;

    class UserService{
        private $userMapper;

        public function __construct(){
            $mapper = new UserMapper();
            $this->userMapper = $mapper;
        }
        
        public function handlerUserLogin(){

        }

        public function handlerUserRegister(string $name, string $username, string $password, string $email){
            if($this->userMapper->registerUser($name, $username, $password, $email)){
                header("Location:" . "http://" . $_SERVER['HTTP_HOST'] . $_SESSION['VIEW_PRIVATE_PATH']. "/Home/Home.php");
            }
            else{
                header("Location: " . $_SERVER['DOCUMENT_ROOT']);
            }
        }
        
    }//end class UserService