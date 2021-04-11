<?php
  class InsertItem {
    private $connection;

    public function __construct($connectionDB) {
      $this->connection = $connectionDB;
    }

    public function push(string $columns, string $table, string $valuesRef) {
      try {
        $sql = "INSERT INTO `$table`($columns) VALUES ($valuesRef)";
        $data = $this->connection->prepare($sql);
        $data->execute();

        return true;
      } catch (PDOException $e) {
        return false;
      }
    }
  }
