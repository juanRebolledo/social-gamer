<?php

    class SessionMapper{

        public function setSession($idUser, $username){
            $_SESSION["idUser"] = $idUser;
            $_SESSION["username"] = $username;
            
        }

        public function isActiveSession(){
            if(isset($_SESSION["idUser"]) && isset($_SESSION["username"]))
                return true;
            else
                return false;
        }

    }//end class Session


?>