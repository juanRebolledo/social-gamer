<?php
    $PATH = new PATH(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("{$PATH->VIEWS}components{$PATH->DS}Head.php") ?>
    <link rel="stylesheet" href='<?php echo "{$PATH->CSS}login.css" ?>'>
    <link rel="stylesheet" href='<?php echo "{$PATH->CSS}stars.css" ?>'>
    <title>Inicia sesion</title>
</head>
<body>
    <section class="bg sky">
        <?php
            if(isset($_GET["register"]))
                require("{$PATH->VIEWS}components{$PATH->DS}FormRegister.php");
            else
                require("{$PATH->VIEWS}components{$PATH->DS}FormLogin.php");
        ?>
    </section>
    <script src="<?php echo "{$PATH->JS}animationStars.js" ?>"></script> 
</body>
</html>

