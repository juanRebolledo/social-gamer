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
$PATH = new PATH();


require_once("{$PATH->VIEW_PUBLIC}Login\Login.php");*/

Route::set('about-us', function(){
    echo "about us";
    //AboutUs::CreateView();
});

Route::set('contact-us', function(){
    echo "home";
    //ContactUs::CreateView();
});
