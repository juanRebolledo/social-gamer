<?php

    require_once("../core/Autoload.php");
    Autoload("C");

    $actionSql = new ActionsSql();
    $user = $_POST['username'];
    $passw = $_POST['password'];

    $loginuser = $actionSql->handlerSesionStart($user,$passw);

    if ($loginuser) return header("Location: /home");   

    return header("Location: /Login");
?>