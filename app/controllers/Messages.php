<?php

    class Messages extends Controller{
        
        public function t($id) {
            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/messages/Messages.php");
        }
    }//end class Register