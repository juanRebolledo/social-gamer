<?php
spl_autoload_register(function($className){
    if(file_exists('core/'.$className.'.php')){
        require_once 'core/'.$className.'.php';
    }  
    else if(file_exists('./controllers/'.$className.'.php')){
        require_once './controllers/'.$className.'.php';
    }
});

require_once('Routes.php');




