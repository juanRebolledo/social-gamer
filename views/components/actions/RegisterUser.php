<?php
    require_once("../../../autoload.php");
    use Controllers\UserService;
    
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $objUser = new UserService();
    $name = $firstName . " " . $lastName;

    $objUser->handlerUserRegister($name,$user,$password,$email);

