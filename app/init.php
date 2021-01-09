<?php
spl_autoload_register(function($className){
    $sources = array(
        $_SERVER["DOCUMENT_ROOT"]."/app/core/".$className.".php",
        $_SERVER["DOCUMENT_ROOT"]."/app/controllers/".$className.".php"
    );

    foreach($sources as $source){
        if(file_exists($source)){
            require_once $source;
        }
    }
});
  
require_once('Routes.php');





