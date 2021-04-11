<div class="container-login flex-center">
  <div class="register-box">
    <div class="login-body">
      <div class="container-title">
        <h1 class="text-center">Gamer social</h1>
      </div>

      <form action='/register/createUser' method="post">
        <div class="nombre">
          <div class="form-group mr-1">
            <input autocomplete="off" class="form-control" type="text" placeholder="Nombre" name="firstname" required>
            <label class="form-label">Nombre</label>
          </div>

          <div class="form-group ml-1">
            <input autocomplete="off" class="form-control" type="text" placeholder="Apellidos" name="lastname" required>
            <label class="form-label">Apellidos</label>
          </div>
        </div>

        <div class="form-group">
          <input autocomplete="off" class="form-control" type="text" placeholder="Usuario" name="user" required>
          <label class="form-label">Usuario</label>
        </div>

        <div class="form-group">
          <input autocomplete="off" class="form-control" type="email" placeholder="Correo electronico" name="email" required>
          <label class="form-label">Email</label>
        </div>

        <div class="form-group">
          <input autocomplete="off" class="form-control" type="password" placeholder="Constraseña" name="password" required>
          <label class="form-label">Constraseña</label>
        </div>

        <div>
          <button class="button w-100">Registrarte</button>
        </div>
      </form>

      <div class="container-register pt-5">
        <p class="text-center">¿Ya tienes una cuenta? <a href="/login">Inicia sesion</a></p>
      </div>
    </div>
  </div>
</div>
