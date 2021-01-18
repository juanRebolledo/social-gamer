<!DOCTYPE html>
<html lang="en">
<head>
<?php
        $PATH = new PATH(); 
        require_once("{$PATH->HEAD}head.php");
    ?>
    <link rel="stylesheet" href="<?php echo "/{$PATH->CSS}E404.css" ?>">
    <title>Oh no! ¿Dónde estamos?</title>
</head>
<body>
    <div class="app flex-center">
        <div class="c-error-404 flex-center">
            <div class="c-error-about">
                <h1>Oh no!</h1>
                <h2>¡Has encontrado un lugar misterioso!</h2>
                <h2>Entrar fue sencillo, salir será mas.</h2>
                <a href="/">Regresar</a>
            </div>
            <div class="c-error-img">
                <?php require_once "{$PATH->IMG}e404.svg" ?>
            </div>
        </div>
    </div>
</body>
</html>
