<?php
  class Register extends Controller {
    private $actionsSql;

    public function __construct() {
      $this->actionsSql = new ActionsSql;
    }

    public function createUser() {
      $objUser = new UserService();
            
      $firstName = $_POST["firstname"];
      $lastName = $_POST["lastname"];
      $username = $_POST["user"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      $name = $firstName . " " . $lastName;
      $idUser = uniqid('u_');

      $newUser = $objUser->handlerUserRegister($idUser, $name, $username, $password, $email, "NOT", "NOT", "NOT", "NOT"); 
            
      if($newUser) header("Location: /login");
      else header("Location: /E404");
    }
  }
