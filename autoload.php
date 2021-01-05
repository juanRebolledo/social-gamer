<?php
    function autoload($class){
        $url = str_replace('\\','/', $class . ".php");
        require_once($url);
    }

    spl_autoload_register('autoload');
?>