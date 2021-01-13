<?php
function Autoload($currentLocation = ''){

    if($currentLocation == "/"){    
        spl_autoload_register(function($className){
            
            $sources = array(
                $_SERVER["DOCUMENT_ROOT"]."/app/core/".$className.".php",
                $_SERVER["DOCUMENT_ROOT"]."/app/controllers/".$className.".php",
                $_SERVER["DOCUMENT_ROOT"]."/app/models/mysql/".$className.".php"
            );

            foreach($sources as $source){
                if(file_exists($source)){
                    require_once $source;
                }
            }
        });
    }

    if($currentLocation == "C"){
        spl_autoload_register(function($className){
            
            $sources = array(
                "../core/".$className.".php",
                "../controllers/".$className.".php",
                "../models/mysql/".$className.".php"
            );

            foreach($sources as $source){
                if(file_exists($source)){
                    require_once $source;
                }
            }
        });
    }

}//end function Autoload