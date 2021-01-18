<?php
    session_start();
    require_once("../core/Autoload.php");
    Autoload("C");

    $objUser = new UserService();
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $loginUser = $objUser->handlerUserLogin($username,$password); 
    
    if($loginUser)
        header("Location: /home");
    else
        header("Location: /login/notfound");
?>
