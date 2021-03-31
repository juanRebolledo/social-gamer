<?php
  class UserMapper{
    public $pdoConnection;
    public $sessionMapper;

    public function __construct() {
      $pdoConnection = new ConnectionDB();
      $sessionMapper = new SessionMapper();
      $this->pdoConnection = $pdoConnection->getConnection();
      $this->sessionMapper = $sessionMapper;
    }

    public function loginUser(string $username, string $password):bool {
      try {
        /*  Executing the query  */
        $sql = 'SELECT * FROM user WHERE username = :username AND password = :password';
        $stnt = $this->pdoConnection->prepare($sql);
        $stnt->execute(["username" => $username, "password" => $password]);

        /*  Any results?  */
        if ($stnt->rowCount() == 1) {
          $userResult = $stnt->fetch();
          $this->sessionMapper->setSession($userResult->iduser, $userResult->username);
          return true;
        }

        return false;                
      }catch(PDOException $e){
        return false;
      }    
    }
        
    public function registerUser(string $idUser, string $nameuser, string $username, string $password, string $email, string $image, string $facebook, string $twitter, string $twitch):bool{
      try{
        $sql = 'INSERT INTO user (iduser, nameuser, username, password, email, image, facebook, twitter, twitch) VALUES(:idUser, :nameuser, :username, :password, :email, :image, :facebook, :twitter, :twitch)';
        $stnt = $this->pdoConnection->prepare($sql);
        $stnt->execute(["idUser" => $idUser, "nameuser" => $nameuser, "username" => $username, "password" => $password, "email" => $email, "image" => $image, "facebook" => $facebook, "twitter" => $twitter, "twitch" => $twitch,]);
        $this->sessionMapper->setSession($idUser, $username);
                
        return true;
      } catch(PDOException $e){
        return false;
      }  
    }
  }
?>
