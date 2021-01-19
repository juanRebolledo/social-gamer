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
            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/user/user.php");
          }
          else header("location: /usernotfound");
        }

        public function login() {
          if (session_status() == PHP_SESSION_NONE) {
            session_start();
          }

          $objUser = new UserService();
          
          $username = $_POST["username"];
          $password = $_POST["password"];

          $loginUser = $objUser->handlerUserLogin($username,$password); 
          
          if($loginUser)
              header("Location: /home");
          else
              header("Location: /login/notfound");
        }

        public function logout() {
          if (session_status() == PHP_SESSION_NONE) {
            session_start();
          }
          session_unset();
          session_destroy();

          header('location: /');
        }

        public function update() {    
          $nameuser = $_POST['nameuser'];
          $username = $_POST['username'];
          $facebook = $_POST['facebook'];
          $twitter = $_POST['twitter'];
          $twitch = $_POST['twitch'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $image = $_POST['url_image_to_mysql'];
          $idUser = $_POST['iduser'];

          $this->handlerUpdateUser($nameuser, $username, $password, $email, $image, $facebook, $twitter, $twitch, $idUser);
        }
          
        public function edit($idUser) {
          $userInformation = $this->handlerGetUser($idUser);

          if ($userInformation) {
            $socialNetworks = ["Facebook", "Twitter", "Twitch"];
            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/user/updateUser.php");
          }
          else
            header("location: /usernotfound");
        }

        public function handlerGetUser(string $idUser) {
          $sql = "SELECT * FROM user WHERE iduser = '$idUser'";
            
          $data = $this->actionsSql->handlerSelectData($sql);
          return $data->fetch(PDO::FETCH_ASSOC);
        }
        
        public function handlerGetPostFromUser(string $idUser) {
          $sql = "SELECT * FROM post WHERE post.iduser = '$idUser'";
          
          return $this->actionsSql->handlerSelectData($sql);
        }

        public function handlerUpdateUser(string $nameuser, string $username, string $password, string $email, string $image, string $facebook, string $twitter, string $twitch, string $idUser) {
          if (strlen($facebook) < 5) $facebook = 'NOT';
          if (strlen($twitter) < 5) $twitter = 'NOT';
          if (strlen($twitch) < 5) $twitch = 'NOT';

          $condition = "iduser = '$idUser'";
          $values = "nameuser='$nameuser', username='$username', password = '$password', email = '$email', image = '$image', facebook = '$facebook', twitter = '$twitter', twitch = '$twitch'";
          
          if ($this->actionsSql->updateItems($condition, 'user', $values)) {
            header("location: /user/u/$idUser");
          } else {
            header("location: /algosaliomal");
          }
        }
    }//end class User