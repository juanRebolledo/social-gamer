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
          
          public function edit($idUser) {
          require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/user/UpdateUser.php");
        }

        public function handlerGetUser(string $idUser) {
          $sql = "SELECT * FROM user JOIN socialnetworks ON user.idsocialnetwork = socialnetworks.idsocialnetwork AND user.iduser = '$idUser'";
            
          return $this->actionsSql->handlerSelectData($sql);
        }
    }//end class User