<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bulma framework -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">   
    <!-- jQuery library-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Iconos -->
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>

    
    <script src="scripts/estrellas.js"></script>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/estrellas.css">
    <title>Bienvenido: Inicia sesion</title>
</head>
<body>

    <section class="hero bg sky">
        <div class="hero-body">

            <h1 class="title has-text-white">Jajajaja noc que poner aqui</h1>

            <div class="columns is-centered">
                <div class="column is-one-third" style="z-index: 1;">

                    <div class="login-box">
                        
                        
                        <div class="login-body">
                            <h2 class="subtitle has-text-centered">no se un icono o algo</h2>
                            <h2 class="subtitle has-text-centered has-text-weight-bold is-4">Nombre de la pagina</h2>

                            <form action="acciones/validar.php" method="post">

                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Usuario" name="usuario" required>
                                    <label class="form-label">Usuario</label>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Constraseña" name="usuario" required>
                                    <label class="form-label">Constraseña</label>
                                </div>

                                <div class="has-text-centered">
                                    <button class="button is-fullwidth">Iniciar sesion</button>
                                </div>
                                
                     

                            </form>
                        </div>

                        
                    </div>
                    
                    
                </div> <!-- end div.colum -->
            </div> <!-- end div.colums -->    

        </div>
        
        
        <div class="hero-foot piso"></div>
    </section>
    
    
</body>
</html>
