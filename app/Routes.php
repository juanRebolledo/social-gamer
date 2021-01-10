<?php
// require_once "core/App.php";
// require_once "core/Controller.php";

// $app = new App();

/*
/////

require_once('config/system/core/autoload.php');
use Config\System\Core\AutoLoader;
use Config\System\Core\PATH;

AutoLoader::loadEverything();



require_once("{$PATH->VIEW_PUBLIC}Login\Login.php");*/

Route::set('login', function(){
    Home::CreateView("Login");
});

Route::set('register', function(){
    Home::CreateView("Register");
});

Route::set('create', function(){
    Home::CreateView("Create");
});

Route::set('home', function(){
    Home::CreateView("Home");
});

Route::set('messages', function(){
    Home::CreateView('Messages');
});