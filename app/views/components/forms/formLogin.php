<div class="container-login flex-center">
  <div class="login-box">
    <div class="login-body">
      <div class="container-title">
        <h1 class="text-center">Gamer social</h1>
        <?php if (isset($message)) echo "<h2 class='has-text-centered'>$message</h2>" ?>
      </div>

      <form action="/user/login" class="d-flex flex-column justify-content-center" method="post">
        <div class="form-group">
          <input autocomplete="off" class="form-control" type="text" placeholder="Usuario" name="username" id="username" required>
          <label class="form-label">Usuario</label>
        </div>

        <div class="form-group">
          <input autocomplete="off" class="form-control" type="password" placeholder="Constraseña" name="password" id="password" required>
          <label class="form-label">Constraseña</label>
        </div>

        <div class="text-center">
          <button class="button w-100">Iniciar sesion</button>
        </div>

        <div class="container-register">
          <p class="text-center">¿Aún sin cuenta? <a href="/register">Registrate</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
