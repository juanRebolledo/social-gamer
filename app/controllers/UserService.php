<?php

    class UserService{
        public $userMapper;

        public function __construct(){
            $userMapper = new UserMapper();

            $this->userMapper = $userMapper;
        }
        
        public function handlerUserLogin($username,$password){
            if($this->userMapper->loginUser($username, $password)){
                return true;
            }
            else{
                return false;
            }
        }

        public function handlerUserRegister(string $idUser, string $name, string $username, string $password, string $email):bool{
            if($this->userMapper->registerUser($idUser, $name, $username, $password, $email)){
                return true;
            }
            else{
                return false;
            }
        }
        
    }//end class UserService