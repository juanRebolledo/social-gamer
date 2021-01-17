<?php 
  require_once("../core/Autoload.php");
  Autoload("C");
  
  session_start();
  session_unset();
  session_destroy();

  header('location: /');
?>