<?php

    class ActionsSql extends Controller {
        private $connection;

        public function __construct(){   
          $ConnectionDB = new ConnectionDB();

          $this->connection = $ConnectionDB->getConnection(); 
        }

        public function handlerSelectData(string $sql) {
            $data = $this->connection->prepare($sql);
            $data->execute();

            return $data;
        }

        public function updateItems(string $condition, string $table, string $values) {
            $sql = "UPDATE $table SET $values WHERE $condition";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) return true;

            return false;
        }

        public function deleteItem($condition, $table) {
            $sql = "DELETE FROM `$table` WHERE $condition";
            try {
                $this->connection->exec($sql);
                return true;
            } catch(PDOException $e) {
                return false;
            }
        }

        public function handlerSelectColumn(string $column, $condition, $table, string $valueToSearch) {
            $sql = "SELECT `$column` FROM `$table` WHERE $condition = '$valueToSearch'";
            
            $data = $this->handlerSelectData($sql);
            
            return $data->fetchColumn();
        }

        public function handlerInsertPost($idpost, $iduser, $titlepost, $description, $URLimage, $category):bool{
            try{
                $sqlp = "INSERT INTO `post`(`idpost`, `iduser`, `titlepost`, `description`, `postimage`, `category`) VALUES ('$idpost', '$iduser', '$titlepost', '$description', '$URLimage', '$category')";

                $data = $this->connection->prepare($sqlp);
                $data->execute();
                
                return true;
            }catch(PDOException $e){
                var_dump($e);
                return false;
            }
        }
    }//end class ActionsSql