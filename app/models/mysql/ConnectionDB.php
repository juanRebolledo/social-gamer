<?php
    //namespace Controllers;
    //use PDO; // <- This because we are using autoload with namespaces
    class ConnectionDB{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $dbname = "red_social";
        private $dsn;
        private $pdoConnection;

        //Create a PDO instance 
        public function __construct(){
            try{
                $this->dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8";
                $this->pdoConnection = new PDO($this->dsn, $this->user, $this->password);

                $this->pdoConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $this->pdoConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //$this->pdoConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); <- In case of using LIKE ?
            }catch(PDOException $e){
                $this->pdoConnection = "Fatal error connecting with the server";
                echo "ERROR: ".$e->getMessage();
            }
        }

        public function getConnection(){
            return $this->pdoConnection;
        }

    }//end class pdoConnection

?>