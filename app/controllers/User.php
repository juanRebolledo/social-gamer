<?php

    class User extends Controller {
        private $actionsSql;
        public function __construct() {   
          $this->actionsSql = new ActionsSql();
        }
        
        public function u($idUser) {
          $userInformation = $this->handlerGetUser($idUser);
          $postOfUser = $this->handlerGetPostFromUser($idUser);

          if ($userInformation) {
            $socialNetworks = ["Facebook", "Twitter", "Twitch"];
            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/user/User.php");
          }
          else header("location: /usernotfound");
        }
          
        public function edit($idUser) {
          $userInformation = $this->handlerGetUser($idUser);

          if ($userInformation) {
            $socialNetworks = ["Facebook", "Twitter", "Twitch"];
            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/user/UpdateUser.php");
          }
          else
            header("location: /usernotfound");
        }

        public function handlerGetUser(string $idUser) {
          $sql = "SELECT * FROM user JOIN socialnetworks ON user.idsocialnetwork = socialnetworks.idsocialnetwork AND user.iduser = '$idUser'";
            
          $data = $this->actionsSql->handlerSelectData($sql);
          return $data->fetch(PDO::FETCH_ASSOC);
        }
        
        public function handlerGetPostFromUser(string $idUser) {
          $sql = "SELECT * FROM post WHERE post.iduser = '$idUser'";
          
          return $this->actionsSql->handlerSelectData($sql);
        }

        public function handlerUpdateUser(string $nameuser, string $username, string $password, string $email, string $image, string $facebook, string $twitter, string $twitch, string $idUser, string $idsocialnetwork) {
          if (strlen($facebook) < 5) $facebook = 'NOT';
          if (strlen($twitter) < 5) $twitter = 'NOT';
          if (strlen($twitch) < 5) $twitch = 'NOT';

          $condition = "A.iduser = '$idUser' AND B.idsocialnetwork = '$idsocialnetwork'";
          $table = "user A, socialnetworks B";
          $values = "A.nameuser='$nameuser', A.username='$username', A.password = '$password', A.email = '$email', A.image = '$image', B.facebook = '$facebook', B.twitter = '$twitter', B.twitch = '$twitch'";
          
          if ($this->actionsSql->updateItems($condition, $table, $values)) {
            header("location: /user/u/$idUser");
          } else {
            header("location: /algosaliomal");
          }
        }
    }//end class User