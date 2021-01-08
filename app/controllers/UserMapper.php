<?php
    namespace Controllers;

    class UserMapper{
        private $pdoConnection;

        public function __construct(){
            $connection = new ConnectionDB();
            $this->pdoConnection = $connection->getConnection();
        }

        public function registerUser(string $name, string $username, string $password, string $email):bool{
            try{
                $sql = 'INSERT INTO users(name,username,password,email) VALUES(:name, :username, :password, :email)';
                $stnt = $this->pdoConnection->prepare($sql);
                $stnt->execute(["name" => $name, "username" => $username, "password" => $password, "email" => $email]);

                return true;
            }catch(PDOException $e){
                return false;
            }
            
        }
    }//end class UserMapper

?>