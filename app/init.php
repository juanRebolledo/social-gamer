<?php
<<<<<<< HEAD
spl_autoload_register(function($className){
    $urlCore = $_SERVER["DOCUMENT_ROOT"]."/app/core/".$className.".php";
    $urlController = $_SERVER["DOCUMENT_ROOT"]."/app/controllers/".$className.".php";
    if(file_exists($urlCore)){
        require_once $urlCore;
    }  
    else if(file_exists($urlController)){
        require_once $urlController;
=======
spl_autoload_register( function ($className) {
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
>>>>>>> a7c7941620d8e89aae29647fd973b7e05123bf9d
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require_once $fileName;
});

require_once('Routes.php');




