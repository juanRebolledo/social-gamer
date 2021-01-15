<?php

    class User extends Controller{
        private $actionsSql;
        public function u($idUser) {
            $this->actionsSql = new ActionsSql();
            $data = $this->handlerGetUser($idUser);
            $userInformation = $data->fetch(PDO::FETCH_ASSOC);
            if ($userInformation) {
              $socialNetworks = ["Facebook", "Twitter", "Twitch"];
              require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/user/User.php");
            }
            else
              header("location: /usernotfound");
        }

        public function handlerGetUser(string $idUser) {
          $sql = "SELECT * FROM `user` WHERE iduser = '$idUser'";
            
          return $this->actionsSql->handlerSelectData($sql);
        }
        
        public function handlerGetSocialNetworks(string $id) {
          $sql = "SELECT facebook, twitter, twitch FROM `socialnetworks` WHERE idsocialnetwork  = '$id'";
            
          return $this->actionsSql->handlerSelectData($sql);
        }

    }//end class User