<?php
    require_once("../core/Autoload.php");
    Autoload("C");

    $PATH = new PATH();
    $user = new User();
    
    $nameuser = $_POST['nameuser'];
    $username = $_POST['username'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $twitch = $_POST['twitch'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_POST['url_image_to_mysql'];
    $idsocialnetwork = $_POST['idsocialnetwork'];
    $idUser = $_POST['iduser'];

    $user->handlerUpdateUser($nameuser, $username, $password, $email, $image, $facebook, $twitter, $twitch, $idUser, $idsocialnetwork);
?>
