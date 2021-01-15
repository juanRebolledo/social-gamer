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

        public function handlerSelectColumn(string $column, $condition, $table, string $valueToSearch) {
            $sql = "SELECT `$column` FROM `$table` WHERE $condition = '$valueToSearch'";
            
            $data = $this->handlerSelectData($sql);
            
            return $data->fetchColumn();
        }
    }//end class ActionsSql