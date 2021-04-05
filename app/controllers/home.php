<?php
  class Home extends Controller{    
    public function __contruct() {
      require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/home/home.php");
    }
  }
?>
