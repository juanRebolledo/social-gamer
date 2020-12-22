<?php
  class UserSession {

    public $strUser;

    public function __construct(string $user){
      $this->strUser = $user;
    }

    public function startSession(){
      session_start();
    }
    public function closeSession(){
      session_unset();
      session_destroy();
    }

    public function setCurrentUser(string $user){
      $this->strUser = $user;
    }

    public function getCurrentUser(){
      return $this->strUser;
    }

    public function setSession(){
      $_SESSION["user"] = $this->strUser;
    }

    public function getSession(){
      $arrSession = array('User' => $_SESSION["user"]);
      return $arrSession;
    }
    
  }//end class UserSession
?>