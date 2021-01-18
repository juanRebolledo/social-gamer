<?php
    require_once("../core/Autoload.php");
    Autoload("C");

    $PATH = new PATH();
    $objUser = new UserService();
    
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $name = $firstName . " " . $lastName;
    $idUser = uniqid('u_');

    $newUser = $objUser->handlerUserRegister($idUser, $name,$user,$password,$email); 
    
    if($newUser)
        header("Location: /home");
    else
        header("Location: /E404");
?>
