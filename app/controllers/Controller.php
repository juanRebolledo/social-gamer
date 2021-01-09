<?php

class Controller{

    public static function CreateView($viewName){
        require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/{$viewName}/{$viewName}.php");
    }
    
}