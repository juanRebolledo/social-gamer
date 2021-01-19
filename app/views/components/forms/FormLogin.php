<div class="container-login">
    <div class="login-box">
        <div class="login-body">
            <div class="container-title">
                <h1 class="has-text-centered">Gamer social</h1>
                <?php if (isset($message)) echo "<h2 class='has-text-centered'>$message</h2>" ?>
            </div>

            <form action="/user/login" method="post">
                <div class="form-group">
                    <input autocomplete="off" class="form-control" type="text" placeholder="Usuario" name="username" id="username" required>
                    <label class="form-label">Usuario</label>
                </div>

                <div class="form-group">
                    <input autocomplete="off" class="form-control" type="password" placeholder="Constraseña" name="password" id="password" required>
                    <label class="form-label">Constraseña</label>
                </div>

                <div class="has-text-centered">
                    <button class="button is-fullwidth">Iniciar sesion</button>
                </div>

                <div class="container-register pt-5">
                    <p class="has-text-centered">¿Aún sin cuenta? <a href="/register">Registrate</a></p>
                </div>
            </form>
        </div>
    </div>                    
</div>
