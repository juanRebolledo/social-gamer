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

        public function handlerUserRegister(string $name, string $username, string $password, string $email):bool{
            if($this->userMapper->registerUser($name, $username, $password, $email)){
                return true;
            }
            else{
                return false;
            }
        }
        
    }//end class UserService