<?php
spl_autoload_register(function($className){
    $urlCore = $_SERVER["DOCUMENT_ROOT"]."/app/core/".$className.".php";
    $urlController = $_SERVER["DOCUMENT_ROOT"]."/app/controllers/".$className.".php";
    if(file_exists($urlCore)){
        require_once $urlCore;
    }  
    else if(file_exists($urlController)){
        require_once $urlController;
    }
});

require_once('Routes.php');




