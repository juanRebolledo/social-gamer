<?php
    require_once("../core/Autoload.php");
    Autoload("C");

    $PATH = new PATH();
    $objUser = new UserService();
    
    $name = $_POST['nameuser'];
    $username = $_POST['username'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $twitch = $_POST['twitch'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $url_image_to_mysql = $_POST['url_image_to_mysql'];

    echo "Post method <br>";
    echo "nombre: ". $name . "<br>";
    echo "username: ". $username . "<br>";
    echo "facebook: ". $facebook . "<br>";
    echo "twitter: ". $twitter . "<br>";
    echo "twitch: ". $twitch . "<br>";
    echo "email: ". $email . "<br>";
    echo "password: ". $password . "<br>";
    echo "url_image_to_mysql: ". $url_image_to_mysql . "<br>";
?>
