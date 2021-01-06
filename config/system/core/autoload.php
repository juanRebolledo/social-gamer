<?php
namespace Config\System\Core;

    class AutoLoader{

        static public function loadEverything(){
            spl_autoload_register(function($class){
                $url = str_replace('\\','/', realpath($_SERVER["DOCUMENT_ROOT"]) . "/{$class}.php");
                require_once($url);
            });
        }
        
    }//end class AutoLoader
?>