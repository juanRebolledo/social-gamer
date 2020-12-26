<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>

    <link rel="stylesheet" href="styles/login.css">
    <!-- <link rel="stylesheet" href="<?php echo "$_SESSION[VIEW_PUBLIC_PATH]" ?>Login/styles/login.css"> -->
    <link rel="stylesheet" href="styles/stars.css">
    <title>Inicia sesion</title>
</head>
<body>

    <section class="bg sky">
        <div class="container-login">
            <div class="login-box">
                <div class="login-body">
                    <div class="title">
                        <h2 class="subtitle has-text-centered has-text-weight-bold is-4">Social gamer</h2>
                    </div>

                    <form action="acciones/validar.php" method="post">
                        <div class="form-group">
                            <input autocomplete="off" class="form-control" type="text" placeholder="Usuario" name="usuario" required>
                            <label class="form-label">Usuario</label>
                        </div>

                        <div class="form-group">
                            <input autocomplete="off" class="form-control" type="password" placeholder="Constraseña" name="usuario" required>
                            <label class="form-label">Constraseña</label>
                        </div>

                        <div class="has-text-centered">
                            <button class="button is-fullwidth">Iniciar sesion</button>
                        </div>
                    </form>
                </div>
            </div>                    
        </div>
    </section>

    <script src="js/login.js"></script>
</body>
</html>
