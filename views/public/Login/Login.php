<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo "$_SESSION[VIEW_PUBLIC_PATH]". "Login\styles/login.css" ?>">
    <link rel="stylesheet" href="<?php echo "$_SESSION[VIEW_PUBLIC_PATH]". "Login\styles/stars.css" ?>">
    <title>Inicia sesion</title>
</head>
<body>
    <section class="bg sky">
        <?php
            if(isset($_GET["register"]))
                require("$_SESSION[COMPONENTS_PATH]". "register.php");
            else
                require("$_SESSION[COMPONENTS_PATH]". "login.php");
        ?>
    </section>
    <script src="<?php echo "$_SESSION[VIEW_PUBLIC_PATH]". "Login\js/animationStars.js" ?>"></script> 
</body>
</html>
