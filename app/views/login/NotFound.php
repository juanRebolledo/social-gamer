<?php
    $sessionMapper = new SessionMapper();
    if($sessionMapper->isActiveSession())
        header("Location: /home");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $PATH = new PATH();
    require_once("{$PATH->COMPONENTS}UtilsLoginRegister.php"); 
?>
    <title>Inicia sesion</title>
</head>
<body>
    <div class="app">
        <section class="bg sky">
            <?php require_once("{$PATH->FORMS}FormLoginNotFound.php"); ?>
        </section>
    </div>
    <script src="<?php echo "/{$PATH->JS}animationStars.js" ?>"></script> 
</body>
</html>

