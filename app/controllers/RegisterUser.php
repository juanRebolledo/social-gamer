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
    $iduser = uniqid('u_');

    $newUser = $objUser->handlerUserRegister($iduser, $name,$user,$password,$email); 
    
    if($newUser)
        header("Location: /home");
    else
        header("Location: /nosepudo");
?>
