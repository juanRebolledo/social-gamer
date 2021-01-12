<?php

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