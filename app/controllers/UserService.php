<?php
  class UserService{
    public $userMapper;

    public function __construct(){
      $userMapper = new UserMapper();

      $this->userMapper = $userMapper;
    }
        
    public function handlerUserLogin($username,$password) {
      if($this->userMapper->loginUser($username, $password)){
        return true;
      } 
    
      return false;
    }

    public function handlerUserRegister(string $idUser, string $nameuser, string $username, string $password, string $email, string $image, string $facebook, string $twitter, string $twitch):bool{
      if($this->userMapper->registerUser($idUser, $nameuser, $username, $password, $email, $image, $facebook, $twitter, $twitch)){
        return true;
      } 

      return false;
    }      
  }
