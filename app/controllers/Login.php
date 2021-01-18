<?php

    class Login extends Controller{
        public function notfound($params){
            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/Login/NotFound.php");
        }

    }//end class Login