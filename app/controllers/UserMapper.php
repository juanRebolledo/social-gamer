<?php
  class UserMapper{
    public $pdoConnection;
    public $sessionMapper;
    public $selectItemDB;

    public function __construct() {
      $pdoConnection = new ConnectionDB();
      $sessionMapper = new SessionMapper();
      $this->pdoConnection = $pdoConnection->getConnection();
      $this->sessionMapper = $sessionMapper;

      $this->selectItemDB = new SelectItemBD($this->pdoConnection);
    }

    public function loginUser(string $username, string $password):bool {
      $condition = "username = '$username' AND password = '$password'";
      $data = $this->selectItemDB->getOneByCondition($condition, "user");
      if ($data) {
        $userResult = $data->fetch();
        $this->sessionMapper->setSession($userResult->iduser, $userResult->username);
        
        return true;
      }
      
      return false;
    }

    public function existsUser(string $email, string $username) {
      $condition = "email = '$email' OR username = '$username'";
      $data = $this->selectItemDB->dataExistInBD($condition, "user");
      
      return $data;
    }
        
    public function registerUser(string $idUser, string $nameuser, string $username, string $password, string $email, string $image, string $facebook, string $twitter, string $twitch):bool{
      if ($this->existsUser($email, $username)) return false;

      $InsertItem = new InsertItem($this->pdoConnection);
      $columns = "iduser, nameuser, username, password, email, image, facebook, twitter, twitch";
      $values = "'$idUser', '$nameuser', '$username', '$password', '$email', '$image', '$facebook', '$twitter', '$twitch'";

      $wasInserted = $InsertItem->push($columns, "user", $values);
      if ($wasInserted) {
        $this->sessionMapper->setSession($idUser, $username);
        return true;
      }
      
      return false;
    }
  }
?>
