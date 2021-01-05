<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("{$COMPONENTS_PATH}head.php") ?>
    <link rel="stylesheet" href='<?php echo "{$VIEW_PUBLIC_PATH}Login\styles\login.css" ?>'>
    <link rel="stylesheet" href='<?php echo "{$VIEW_PUBLIC_PATH}Login\styles\stars.css" ?>'>
    <title>Inicia sesion</title>
</head>
<body>
    <section class="bg sky">
        <?php
            if(isset($_GET["register"]))
                require("{$COMPONENTS_PATH}register.php");
            else
                require("{$COMPONENTS_PATH}login.php");
        ?>
    </section>
    <script src="<?php echo "{$VIEW_PUBLIC_PATH}Login\js\animationStars.js" ?>"></script> 
</body>
</html>

