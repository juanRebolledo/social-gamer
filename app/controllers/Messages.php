<?php

    class Messages extends Controller{
        
        public function t($idChat) {
            $currentUser = "juanasdabassd";
            $ConnectionDB = new ConnectionDB();
            $connection = $ConnectionDB->getConnection();
            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/messages/Messages.php");
        }
    }//end class Register