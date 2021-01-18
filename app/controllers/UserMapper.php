<?php
   
    class UserMapper{
        public $pdoConnection;
        public $sessionMapper;

        public function __construct(){
            $pdoConnection = new ConnectionDB();
            $sessionMapper = new SessionMapper();
            $this->pdoConnection = $pdoConnection->getConnection();
            $this->sessionMapper = $sessionMapper;
        }

        public function loginUser(string $username, string $password):bool{
            try{
                /*  Executing the query  */
                $sql = 'SELECT * FROM user WHERE username = :username AND password = :password';
                $stnt = $this->pdoConnection->prepare($sql);
                $stnt->execute(["username" => $username, "password" => $password]);

                /*  Any results?  */
                if ($stnt->rowCount() == 1){
                    $userResult = $stnt->fetch();
                    $this->sessionMapper->setSession($userResult->iduser, $userResult->username);
                    return true;
                }
                else
                    return false;
                    
            }catch(PDOException $e){
                return false;
            }

        }

        public function registerUser(string $idUser, string $name, string $username, string $password, string $email):bool{
            try{
                $sql = 'INSERT INTO user (iduser, name, username, password, email) VALUES(:idUser, :name, :username, :password, :email)';
                $stnt = $this->pdoConnection->prepare($sql);
                $stnt->execute(["idUser" => $idUser, "name" => $name, "username" => $username, "password" => $password, "email" => $email]);

                return true;
            }catch(PDOException $e){
                return false;
            }
            
        }
    }
?>
