<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("{$PATH->COMPONENTS}head.php") ?>
    <link rel="stylesheet" href='<?php echo "{$PATH->VIEW_PUBLIC}Login\styles\login.css" ?>'>
    <link rel="stylesheet" href='<?php echo "{$PATH->VIEW_PUBLIC}Login\styles\stars.css" ?>'>
    <title>Inicia sesion</title>
</head>
<body>
    <section class="bg sky">
        <?php
            if(isset($_GET["register"]))
                require("{$PATH->COMPONENTS}register.php");
            else
                require("{$PATH->COMPONENTS}login.php");
        ?>
    </section>
    <script src="<?php echo "{$PATH->VIEW_PUBLIC}Login\js\animationStars.js" ?>"></script> 
</body>
</html>

