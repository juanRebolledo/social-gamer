<?php
  class Login extends Controller{
    public function __construct() {
      require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/login/login.php");
    }
  
    public function notfound($params){
      $message = "El usuario o la contraseña son invalidos";
      require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/login/login.php");
    }
  }
