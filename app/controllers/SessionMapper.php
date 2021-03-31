<?php
  class SessionMapper{

    public function setSession($idUser, $username){
      $_SESSION["iduser"] = $idUser;
      $_SESSION["username"] = $username;
    }

    public function isActiveSession(){
      return isset($_SESSION["iduser"]) && isset($_SESSION["username"]);
   }
  }
?>
