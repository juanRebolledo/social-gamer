<?php
  class SelectItemBD {
    private $connection;

    public function __construct($connectionDB) {
      $this->connection = $connectionDB;
    }
    
    public function dataExistInBD($condition, $table) {
      if ($this->getOneByCondition($condition, $table)) return true;

      return false;
    }

    public function getByCondition(string $condition, $table) {
      $sql = "SELECT * FROM `$table` WHERE $condition";
      $sqlResult = $this->get($sql);

      return $sqlResult;
    }
    
    public function getOneByCondition(string $condition, $table) {
      $sql = "SELECT * FROM `$table` WHERE $condition";
      $sqlResult = $this->getOnlyOne($sql);

      return $sqlResult;
    }

    private function getOnlyOne(string $sql) {
      $data = $this->get($sql);
  
      if ($data->rowCount() == 1) {  
        return $data;
      }

      return false;
    }
    
    private function get(string $sql) {
      try {
        $data = $this->connection->prepare($sql);
        $data->execute();
  
        return $data;
      } catch (PDOException $e) {
        return false;
      }
    }
  }
?>