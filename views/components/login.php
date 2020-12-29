<div class="container-login">
    <div class="login-box">
        <div class="login-body">
            <div class="container-title">
                <h1 class="has-text-centered">Gamer social</h1>
            </div>

            <form action="" method="post">
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

                <div class="container-register pt-5">
                    <p class="has-text-centered">¿Aún sin cuenta? <a href="<?php echo ($_SESSION['SITE_ROOT'] . "index.php?register");?>">Registrate</a></p>
                </div>
            </form>
        </div>
    </div>                    
</div>
