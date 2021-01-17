<?php
   
    class UserMapper{
        private $pdoConnection;

        public function __construct(){
            $connection = new ConnectionDB();
            $this->pdoConnection = $connection->getConnection();
        }

        public function registerUser(string $iduser, string $name, string $username, string $password, string $email):bool{
            try{
                $sql = 'INSERT INTO user (iduser, name, username, password, email) VALUES(:iduser, :name, :username, :password, :email)';
                $stnt = $this->pdoConnection->prepare($sql);
                $stnt->execute(["iduser" -> $iduser, "name" => $name, "username" => $username, "password" => $password, "email" => $email]);

                return true;
            }catch(PDOException $e){
                return false;
            }
            
        }
    }
?>
