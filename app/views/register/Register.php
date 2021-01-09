<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $PATH = new PATH();
    require_once("{$PATH->VIEWS}components{$PATH->DS}UtilsLoginRegister.php"); 
?>
    <title>Registrarse</title>
</head>
<body>
    <section class="bg sky">
        <?php require_once("{$PATH->VIEWS}components{$PATH->DS}FormRegister.php"); ?>
    </section>
    <script src="<?php echo "{$PATH->JS}animationStars.js" ?>"></script> 
</body>
</html>

